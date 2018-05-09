<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DealSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="deal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php // $form->field($model, 'id') ?>

    <?php // $form->field($model, 'opportunity_id') ?>

    <?php echo  $form->field($model, 'deal_name') ?>

    <?php //$form->field($model, 'deal_amount') ?>

    <?php // $form->field($model, 'deal_closingdate') ?>

    <?php // echo $form->field($model, 'deal_probability') ?>

    <?php // echo $form->field($model, 'start_date') ?>

    <?php // echo $form->field($model, 'end_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
