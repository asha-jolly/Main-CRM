<?php
use backend\assets\LoginAsset;
use yii\helpers\Html;
LoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
	<?= $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => 'favicon.ico']); ?>
        <link rel="icon" type="image/png" sizes="96x96" href="<?= Yii::$app->request->baseUrl; ?>/images/a.jpg">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
 
    <?php $this->beginBody() ?>
    
   <div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html" >
			  		Customer Relationship Management
			  	</a>

				<!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
                                   <?= $content ?>
    </div>
                            </div>
                    </div>
                
	<div class="clearfix"></div>
				 <!--/.wrapper-->
<div class="footer">
		<div class="container">
			<b class="copyright">&copy; 2018  CRM Admin - UnityBees </b> All rights reserved.
		</div>
	</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
