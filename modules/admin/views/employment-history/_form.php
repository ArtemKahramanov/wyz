<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmploymentHistory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employment-history-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'number')->textInput() ?>

    <?= $form->field($model, 'date_issue')->textInput() ?>

    <?= $form->field($model, 'commands')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
