<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Holiday */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="holiday-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_start')->textInput() ?>

    <?= $form->field($model, 'date_stop')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
