<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?> 

    <div class="col-md-6"> 
   <?php
                
                $userRole= backend\models\userRole::find()->all();
                $listuserRole = ArrayHelper::map($userRole, 'id', 'role_name');
                ?>    
                <?php echo $form->field($model, 'user_role_id')->dropDownList($listuserRole, ['prompt' => '--Select--']); ?>


        <?= $form->field($model, 'firstname')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>

        <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

       <br>
	   <label class="control-label">Date Of Birth</label>
         <?=DatePicker::widget([
            'name' => 'dob',
            'value' => '16-03-2018',
            'template' => '{addon}{input}',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'dd-M-yyyy'
            ]
        ]);
      ?><br>

        <?= $form->field($model, 'gender')->radioList([1 => 'Male', 2 => 'Female']) ?>
        <?= $form->field($model, 'address')->textarea(['rows' => 5]) ?>
    </div>

    <div class="col-md-6">
        <?php
        if (isset($model->profile_image) && ($model->profile_image != '')) {
            $url = Yii::$app->request->baseUrl . '/uploads/user/' . $model->profile_image;
            echo Html::img($url, ['width' => '70', 'height' => '40', 'class' => 'designing']);
        } else {
            ?>
            <img src = "<?php echo Yii::$app->request->baseUrl . '/images/profile.png'; ?>" 
			alt = "User Image" style="max-height: 75px;">
            <?php
        }

        echo $form->field($model, 'profile_image')->fileInput()
        ?>        

        <?= $form->field($model, 'phonenumber')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'password_hash')->passwordInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'status')->dropDownList([10=>"Active",20=>"Inactive"])?>
		
    </div>
    <br>
	 <div class="clearfix"></div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
