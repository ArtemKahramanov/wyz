<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WorkerDiscipline */

$this->title = 'Update Worker Discipline: ' . $model->worker_id;
$this->params['breadcrumbs'][] = ['label' => 'Worker Disciplines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->worker_id, 'url' => ['view', 'worker_id' => $model->worker_id, 'discipline_id' => $model->discipline_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="worker-discipline-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
