<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
   
    <div class="module-head">
   <div class="panel-heading"> 
   <div class="profile clearfix">
              <div class="profile_pic" style="color:white" "pull-right">
                <center><img src="..\web\images\abc.png" alt="..." class="img-circle" style="width:130px"> </center>
				</div>
				</div>
				<br>
                            <div class="panel-title" style="font-family:cursive"><center><b>Log In To Your Account</b></center></div> 
				 
                        </div> 
   </div>
						    <div class="module-body">
							<div class="control-group">							
		
		 <?= $form->field($model, 'username', [
            'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control transparent','style'=>'height:40px']
        ])->textInput()->input('username', ['placeholder' => "Username"])->label(false)?>
								
							</div>
							<div class="control-group">							
							
			 <?= $form->field($model, 'password', [
            'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control transparent','style'=>'height:40px']
        ])->passwordInput()->input('password', ['placeholder' => "Password"])->label(false)?>
								
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
								 <?= $form->field($model, 'rememberMe')->checkbox()?>
                                
                                          
						<div class="form-group margT10"> 
						<!-- Button --> 
							 <?= Html::submitButton('LOGIN', ['class' => 'btn btn-primary btn-lg btn-block', 'name' => 'login-button']) ?>
						 
                                  <br>
                                    Not register ? <a href="/crm/frontend/web/index.php?r=site%2Fsignup" >click here </a> 
						</div> 
									
								</div>
							</div>
						</div>


            <?php ActiveForm::end(); ?>
       