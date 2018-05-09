<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DealHistory */

$this->title = 'Create Deal History';
$this->params['breadcrumbs'][] = ['label' => 'Deal Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deal-history-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
