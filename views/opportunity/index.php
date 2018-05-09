<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OpportunitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Opportunities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="opportunity-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Opportunity', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'oppor_name',
            'lead_id',
            [
            
             'attribute' => 'status',
               
            'format' => 'raw',
                
             'filter' => array("10" => "Active", "20" => "Inactive"),
             
              'value' => function ($model, $key, $index, $widget) {
                
             switch ($model->status) {
                         
             case 10:
                         
              return Html::a("Active", "#");
                            
               break;
                    
               case 20:
                  
                return Html::a("Inactive", "#");
   
                break;
                   
  }
              
   }
          
   ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
