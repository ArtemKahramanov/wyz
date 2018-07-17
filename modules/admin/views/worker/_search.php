<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WorkerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="worker-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fio') ?>

    <?= $form->field($model, 'passport_data') ?>

    <?= $form->field($model, 'inn') ?>

    <?= $form->field($model, 'employment_history_id') ?>

    <?php // echo $form->field($model, 'cafedra_id') ?>

    <?php // echo $form->field($model, 'rank') ?>

    <?php // echo $form->field($model, 'pension_certificate_number') ?>

    <?php // echo $form->field($model, 'holiday_id') ?>

    <?php // echo $form->field($model, 'contract_id') ?>

    <?php // echo $form->field($model, 'start_working_date') ?>

    <?php // echo $form->field($model, 'position_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
