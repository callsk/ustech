<?php

namespace app\controllers;

use Yii;
use app\models\Team;
use app\models\TeamSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;

/**
 * TeamController implements the CRUD actions for Team model.
 */
class TeamController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Team models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TeamSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Team model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Team model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Team();

        $posted = Yii::$app->request->post('Team');

        $obj = $model->find()
            ->where('name = :name', [':name' => $posted['name']])
            ->one();

        if($obj && $obj->name){
            Yii::$app->getSession()->addFlash('error', 'Team name '.$posted['name'].' already exists');
            return $this->redirect(['create']);
        }


        if ($model->load(Yii::$app->request->post())) {

            $logo = UploadedFile::getInstance($model, 'logo_uri');
            if (is_object($logo) && $model->validate() && $logo->name != '') {
                $logo_uri = $logo->baseName . time(). '.' . $logo->extension;
                $logo->saveAs('uploads/' . $logo_uri);
                $model->logo_uri = $logo_uri;
                $model->save(true, ["name", "logo_uri", "club_state"]);
            } else {
                $model->save(true, ["name", "club_state"]);
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Team model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $posted = Yii::$app->request->post('Team');

        $obj = $model->find()
            ->where('name = :name', [':name' => $posted['name']])
            ->andWhere('id != :id', [':id' => $id])
            ->one();

        if($obj && $obj->id){
            Yii::$app->getSession()->addFlash('error', 'Team name '.$posted['name'].' already exists');
            return $this->redirect(['view', 'id' => $model->id]);
        }


        if ($model->load(Yii::$app->request->post())) {

            $logo = UploadedFile::getInstance($model, 'logo_uri');
            if (is_object($logo) && $model->validate() && $logo->name != '') {
                $logo_uri = $logo->baseName . time(). '.' . $logo->extension;
                $logo->saveAs('uploads/' . $logo_uri);
                $model->logo_uri = $logo_uri;
                $model->save(true, ["name", "logo_uri", "club_state"]);
            } else {
                $model->save(true, ["name", "club_state"]);
            }
            Yii::$app->getSession()->addFlash('success', 'Details updated successfully.');
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Team model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Team model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Team the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Team::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
