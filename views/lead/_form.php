<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Lead */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lead-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-sm-6">
    <?php
                
                $userrole= backend\models\UserRole::find()->all();
                $listuserRole = ArrayHelper::map($userrole, 'id', 'role_name');
                ?>    
                <?php echo $form->field($model, 'user_role_id')->dropDownList($listuserRole, ['prompt' => '--Select--']); ?>

    <?= $form->field($model, 'lead_owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lead_company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lead_firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lead_lastname')->textInput(['maxlength' => true]) ?>
	

    <?= $form->field($model, 'lead_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lead_email')->textInput(['maxlength' => true]) ?>
	</div>
	 <div class="col-sm-6">

    <?= $form->field($model, 'lead_phone')->textInput() ?>

    <?= $form->field($model, 'lead_mobile')->textInput() ?>

    <?= $form->field($model, 'lead_employees')->textInput() ?>

    <?= $form->field($model, 'lead_address')->textarea(['rows' => 5]) ?>

   
    <label class="control-label">Created At</label>
         <?=DatePicker::widget([
            'name' => 'created_at',
            'value' => '16-03-2018',
            'template' => '{addon}{input}',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'dd-M-yyyy'
            ]
        ]);
      ?><br>

 
	   <label class="control-label">Updated At</label>
         <?=DatePicker::widget([
            'name' => 'updated_at',
            'value' => '16-03-2018',
            'template' => '{addon}{input}',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'dd-M-yyyy'
            ]
        ]);
		?><br>
	  </div>
	 
	  <div class="clearfix">

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>

