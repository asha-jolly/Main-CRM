<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Userrole */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userrole-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-sm-6">
    <?= $form->field($model, 'role_name')->textInput(['maxlength' => true]) ?>
    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
       </div> 
    <?php ActiveForm::end(); ?>

</div>
