<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WorkerDiscipline */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="worker-discipline-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'worker_id')->textInput() ?>

    <?= $form->field($model, 'discipline_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
