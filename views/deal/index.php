<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use backend\models\Opportunity;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DealSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Deals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Deal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'opportunity_id',
			[ 
			    'attribute'=>'opportunity_id',
				'value'=>function($data){
					return isset($data->Opportunity_id)?$data->Opportunity->oppor_name:'';
				},
				'filter'=>ArrayHelper::map(Opportunity::find()->asArray()->all(),'id','oppor_name'),
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
