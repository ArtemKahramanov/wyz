<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Запросы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <ul>
    <?php foreach ($workers as $worker): ?>
        <li>
            <?= Html::encode("{$worker->id} {$worker->fio}") ?>:
        </li>
    <?php endforeach; ?>
    </ul>

    <?= LinkPager::widget(['pagination' => $pagination]) ?>

</div>
