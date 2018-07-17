<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cafedra */

$this->title = 'Create Cafedra';
$this->params['breadcrumbs'][] = ['label' => 'Cafedras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cafedra-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
