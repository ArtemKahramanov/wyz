<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Worker;
use app\models\Discipline;

/* @var $this yii\web\View */
/* @var $model app\models\WorkerDiscipline */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="worker-discipline-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'worker_id')->dropDownList(ArrayHelper::map(Worker::find()->all(), 'id', 'fio')) ?>

    <?= $form->field($model, 'discipline_id')->dropDownList(ArrayHelper::map(Discipline::find()->all(), 'id', 'name')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
