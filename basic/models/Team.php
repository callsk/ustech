<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property string $name
 * @property string $logo_uri
 * @property string $club_state
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],  // 'club_state'
            [['logo_uri'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            [['name', 'club_state'], 'string', 'max' => 200]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'logo_uri' => 'Logo Uri',
            'club_state' => 'Club State',
        ];
    }

    public function getImageurl()
    {
        $url = \Yii::$app->request->BaseUrl.'/uploads/'.$this->logo_uri;
        return $url;
    }
}
