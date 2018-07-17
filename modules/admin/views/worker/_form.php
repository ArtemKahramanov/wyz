<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Worker */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="worker-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passport_data')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inn')->textInput() ?>

    <?= $form->field($model, 'employment_history_id')->textInput() ?>

    <?= $form->field($model, 'cafedra_id')->textInput() ?>

    <?= $form->field($model, 'rank')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pension_certificate_number')->textInput() ?>

    <?= $form->field($model, 'holiday_id')->textInput() ?>

    <?= $form->field($model, 'contract_id')->textInput() ?>

    <?= $form->field($model, 'start_working_date')->textInput() ?>

    <?= $form->field($model, 'position_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
