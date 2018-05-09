<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Deal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="deal-form">
<div class="col-md-6"> 

    <?php $form = ActiveForm::begin(); ?>

     <?php 
                $Opportunity= backend\models\Opportunity::find()->all();
                $listOpportunity = ArrayHelper::map($Opportunity, 'id', 'oppor_name');
                ?>    
                <?php echo $form->field($model, 'opportunity_id')->dropDownList($listOpportunity, ['prompt' => '--Select--']); ?>


    <?= $form->field($model, 'deal_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deal_amount')->textInput() ?>

   <br>
	   <label class="control-label">Closing Date</label>
         <?=DatePicker::widget([
            'name' => 'deal_closingdate',
            'value' => '16-03-2018',
            'template' => '{addon}{input}',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'dd-M-yyyy'
            ]
        ]);
      ?><br>
	  </div>
	  <div class="col-md-6"> 

    <?= $form->field($model, 'deal_probability')->textInput(['maxlength' => true]) ?>

     <br>
	   <label class="control-label">Start Date</label>
         <?=DatePicker::widget([
            'name' => 'start_date',
            'value' => '16-03-2018',
            'template' => '{addon}{input}',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'dd-M-yyyy'
            ]
        ]);
      ?><br>

    <br>
	   <label class="control-label">End Date</label>
         <?=DatePicker::widget([
            'name' => 'end_date',
            'value' => '16-03-2018',
            'template' => '{addon}{input}',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'dd-M-yyyy'
            ]
        ]);
      ?><br>
	  </div>
    <div class="clearfix"></div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
