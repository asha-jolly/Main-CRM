<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DealHistory */

$this->title = 'Update Deal History: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Deal Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="deal-history-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
