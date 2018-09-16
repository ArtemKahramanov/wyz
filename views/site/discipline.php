<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Дисциплины';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <ul>
    <?php foreach ($disciplines as $discipline): ?>
        <li>
            <?= Html::encode("{$discipline->id}: {$discipline->name}, Количество часов:{$discipline->hours}") ?>
        </li>
    <?php endforeach; ?>
    </ul>

    <?= LinkPager::widget(['pagination' => $pagination]) ?>

</div>
