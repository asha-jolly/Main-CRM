<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Opportunity */

$this->title = 'Update Opportunity: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Opportunities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="opportunity-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,'lead'=>$lead
    ]) ?>

</div>
