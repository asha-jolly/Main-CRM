<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use backend\models\UserRole;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'firstname',
            'lastname',
            'gender',
            'dob',
            //'address',
            //'phonenumber',
            //'user_role_id',
			[ 
			    'attribute'=>'user_role_id',
				'value'=>function($data){
					return isset($data->user_role_id)?$data->userRole->role_name:'';
				},
				'filter'=>ArrayHelper::map(userRole::find()->asArray()->all(),'id','role_name'),
				],
            //'auth_key',
            //'username',
            //'password_hash',
            //'password_reset_token',
            //'email:email',
            //'status',
            //'created_at',
            //'updated_at',
            //'profile_image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
