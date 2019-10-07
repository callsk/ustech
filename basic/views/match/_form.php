<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="match-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'match_date')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'match_result')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'team1_id')->textInput() ?>
    <?= $form->field($model, 'team2_id')->textInput() ?>
    <?= $form->field($model, 'created_at')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'updated_at')->textInput(['maxlength' => true]) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
