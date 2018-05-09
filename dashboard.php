<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\DashboardAsset;
use yii\helpers\Html;
use yii\helpers\Url;

DashboardAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
			     <div class="container">
				  <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
				 <i class="icon-reorder shaded" ></i></a>
				  <a class="brand" href="index.php" style="font-family:cursive">CUSTOMER RELATIONSHIP MANAGEMENT</a>	<br>
                         			  
						<form action="/crm/backend/web/index.php?r=site%2Flogout" method="post">
                        <input type="hidden" name="_csrf-backend" value="jRHf0vJgvTMzqbSbgRyY32bIcjwxUgkYb8qc_ry1i6ygJ5zqtwfMCl397f63bM66NIwzCHdjb3NW_vfK1fy9lQ==">
                        <button type="submit" class="btn btn-danger pull-right square-btn-adjust glyphicon glyphicon-log-out"> Logout</button></form>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->		
		
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="sidebar">

						 <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic" style="color:white" "pull-right"><br>
                <center><img src="..\web\images\aa.jpg" alt="..." class="img-circle" style="width:120px"> </center><br>
				 <div class="user-text-online">
               <center> <span class="glyphicon glyphicon-unchecked" style="font-color:green"></span>&nbsp;Online</center></div>		
				 
				 
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br>
			
                            <ul class="widget widget-menu unstyled" style="font-family: cursive">
                                <li class="active"><a href="http://localhost/crm/backend/web/index.php" style="color:white"><i class="menu-icon dashboard"></i>Dashboard
                                    <b class="glyphicon glyphicon-dashboard pull-left" style="color:white"></b>
									</a></li>
                                <li><a href="http://localhost/crm/backend/web/index.php?r=user%2Findex" style="color:white"><i class="menu-icon "></i>User 
                                  <b class="glyphicon glyphicon-user pull-left" style="color:white"></b>								</a>
                                </li>
                                <li><a href="http://localhost/crm/backend/web/index.php?r=userrole%2Findex" style="color:white"><i class="menu-icon "></i>User Role
                                    <b class="glyphicon glyphicon-user pull-left" style="color:white"></b>
									</a></li>
                              
                           


                            <ul class="widget widget-menu unstyled" style="font-family: cursive">
                                <li><a href="http://localhost/crm/backend/web/index.php?r=lead%2Findex" style="color:white"><i class="menu-icon"></i> Lead 
								 <b class="glyphicon glyphicon-tasks pull-left" style="color:white"></b></a></li>
								 
								 <li><a href="http://localhost/crm/backend/web/index.php?r=opportunity%2Findex" style="color:white"><i class="menu-icon"></i>Opportunity 
								 <b class="	glyphicon glyphicon-folder-open pull-left" style="color:white"></b></a></li>
								 
                              
								<li><a href="http://localhost/crm/backend/web/index.php?r=deal%2Findex" style="color:white"><i class="menu-icon"></i>Deal 
								 <b class="glyphicon glyphicon-thumbs-up pull-left" style="color:white"></b></a></li>
								 
								 <li><a href="http://localhost/crm/backend/web/index.php?r=deal/deal-history" style="color:white"><i class="menu-icon"></i>DealHistory 
								 <b class="glyphicon glyphicon-thumbs-up pull-left" style="color:white"></b></a></li>
								 
								 
								 <li><a href="http://localhost/crm/backend/web/index.php?r=settings%2Findex" style="color:white"><i class="menu-icon"></i>Settings 
								 <b class="	glyphicon glyphicon-cog pull-left" style="color:white"></b></a></li>
                            <!--/.widget-nav-->
                            
						<!--	  <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages" style="color:white"><i class="glyphicon glyphicon-cog" style="color:white">
                                </i><i class="glyphicon glyphicon-menu-down pull-right" style="color:white"></i>
                                 Settings </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="/crm/frontend/web/index.php?r=site%2Frequest-password-reset"><i class="glyphicon glyphicon-inbox"></i> change Password </a></li>
                                        
                                    </ul>
                                </li>
                                
                            </ul>
							--!>
                       
                        <!--/.sidebar-->
						 </div>
                    </div>
                    <!--/.span3-->
                    <div class="row">
                        <div class="col-sm-8">
                            <?= $content ?>
                        </div>
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>


        <br> <br> 



        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2018 CRM - UnityBees </b>All rights reserved.
            </div>
        </div>


        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
