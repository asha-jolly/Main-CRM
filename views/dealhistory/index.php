<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DealHistorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Deal Histories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deal-history-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel,'DealName'=>'DealName']); ?>

    
  
</div>
