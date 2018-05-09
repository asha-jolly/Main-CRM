<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Opportunity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="opportunity-form">
<div class="col-sm-6">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'oppor_name')->textInput(['maxlength' => true]) ?>

    <?php
                $lead = backend\models\Lead::find()->all();
                $listlead = ArrayHelper::map($lead, 'id', 'lead_owner');
                ?>    
                <?php echo $form->field($model, 'lead_id')->dropDownList($listlead, ['prompt' => '--Select--']); ?>

   <?= $form->field($model, 'status')->dropDownList([10=>"Active",20=>"Inactive"])?>

    <div class="clearfix">
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div><br>
</div>
