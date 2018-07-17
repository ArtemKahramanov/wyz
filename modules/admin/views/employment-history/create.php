<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EmploymentHistory */

$this->title = 'Create Employment History';
$this->params['breadcrumbs'][] = ['label' => 'Employment Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employment-history-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
