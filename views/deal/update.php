<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Deal */

$this->title = 'Update Deal: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Deals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="deal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,'Opportunity'=>$Opportunity
    ]) ?>

</div>
