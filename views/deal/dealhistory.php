<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DealSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Deal Histories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
<div class="col-sm-6">
   

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
			[
			'attribute'=>'opportunity_id',
			'value'=>function($data){
				return isset($data->opportunity_id)? $data->opportunity->oppor_name:'';
			},
			'filter'=>ArrayHelper::map(\backend\models\Opportunity::find()->asArray()->all(),'id','oppor_name'),
			],
            'deal_name',
            'deal_amount',
            'deal_closingdate',
            //'deal_probability',
            //'start_date',
            //'end_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
