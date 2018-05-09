<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DealHistory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="deal-history-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="col-sm-6">
    <?php
                
                $Deal= backend\models\Deal::find()->all();
                $listdeal = ArrayHelper::map($Deal, 'id', 'deal_name');
                ?>    
                <?php echo $form->field($model, 'deal_id')->dropDownList($listdeal, ['prompt' => '--Select--']); ?>
</div>
    <div class="form-group">
	<div class="col-md-12">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
</div>
    <?php ActiveForm::end(); ?>
</div>

