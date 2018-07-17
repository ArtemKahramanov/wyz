<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\WorkerDiscipline */

$this->title = 'Create Worker Discipline';
$this->params['breadcrumbs'][] = ['label' => 'Worker Disciplines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="worker-discipline-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
