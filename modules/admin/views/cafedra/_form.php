<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Worker;

/* @var $this yii\web\View */
/* @var $model app\models\Cafedra */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cafedra-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'assistant_id')->dropDownList(ArrayHelper::map(Worker::find()->all(), 'id', 'fio')) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
