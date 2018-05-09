<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\LeadSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lead-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_role_id') ?>

    <?= $form->field($model, 'lead_owner') ?>

    <?= $form->field($model, 'lead_company') ?>

    <?= $form->field($model, 'lead_firstname') ?>

    <?php // echo $form->field($model, 'lead_lastname') ?>

    <?php // echo $form->field($model, 'lead_title') ?>

    <?php // echo $form->field($model, 'lead_email') ?>

    <?php // echo $form->field($model, 'lead_phone') ?>

    <?php // echo $form->field($model, 'lead_mobile') ?>

    <?php // echo $form->field($model, 'lead_employees') ?>

    <?php // echo $form->field($model, 'lead_address') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
