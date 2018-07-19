<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Cafedra;
use app\models\Holiday;
use app\models\Position;
use app\models\Contract;
use app\models\EmploymentHistory;

/* @var $this yii\web\View */
/* @var $model app\models\Worker */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="worker-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passport_data')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inn')->textInput() ?>

    <?= $form->field($model, 'employment_history_id')->dropDownList(ArrayHelper::map(EmploymentHistory::find()->all(), 'id', 'number')) ?>

    <?= $form->field($model, 'cafedra_id')->dropDownList(ArrayHelper::map(Cafedra::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'rank')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pension_certificate_number')->textInput() ?>

    <?= $form->field($model, 'holiday_id')->dropDownList(ArrayHelper::map(Holiday::find()->all(), 'id', 'date_start')) ?>

    <?= $form->field($model, 'contract_id')->dropDownList(ArrayHelper::map(Contract::find()->all(), 'id', 'date_start')) ?>

    <?= $form->field($model, 'start_working_date')->textInput() ?>

    <?= $form->field($model, 'position_id')->dropDownList(ArrayHelper::map(Position::find()->all(), 'id', 'name')) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
