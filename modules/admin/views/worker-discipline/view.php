<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\WorkerDiscipline */

$this->title = $model->worker_id;
$this->params['breadcrumbs'][] = ['label' => 'Worker Disciplines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="worker-discipline-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'worker_id' => $model->worker_id, 'discipline_id' => $model->discipline_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'worker_id' => $model->worker_id, 'discipline_id' => $model->discipline_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'worker_id',
            'discipline_id',
        ],
    ]) ?>

</div>
