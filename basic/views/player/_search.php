<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlayerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="player-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'image_uri') ?>

    <?= $form->field($model, 'player_jersey_number') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'matches') ?>

    <?php // echo $form->field($model, 'run') ?>

    <?php // echo $form->field($model, 'highest_score') ?>

    <?php // echo $form->field($model, 'fifties') ?>

    <?php // echo $form->field($model, 'hundreds') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
