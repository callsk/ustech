<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Player */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="player-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_uri')->fileInput() ?>

    <?= $form->field($model, 'player_jersey_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'matches')->textInput() ?>

    <?= $form->field($model, 'run')->textInput() ?>

    <?= $form->field($model, 'highest_score')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fifties')->textInput() ?>

    <?= $form->field($model, 'hundreds')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
