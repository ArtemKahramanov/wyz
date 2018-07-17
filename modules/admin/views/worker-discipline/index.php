<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WorkerDisciplineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Worker Disciplines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="worker-discipline-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Worker Discipline', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'worker_id',
            'discipline_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
