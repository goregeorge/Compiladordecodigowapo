<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container">

		<?php $this->widget('booster.widgets.TbNavbar',array(
			'brand' => 'Pizarra Virtual',
			'items'=>array(
				array(
					'class' => 'booster.widgets.TbMenu',
					'items' => array(
						'class' => 'navbar-text',
	          array('label'=>'Inicio', 'url'=>array('/site/index')),
	          array('label'=>'Proyectos', 'url'=>array('/proyecto/index')),
	          array('label'=>'Planes', 'url'=>array('/plan/index')),
	          array('label'=>'Usuarios', 'url'=>array('/usuario/index')),
	          array('label'=>'Grupos', 'url'=>array('/planUsuario/index')),
	          array('label'=>'Pizarra Virtual General', 'url'=>array('/site/page', 'view' => 'pizarra-virtual-general')),
	          array('label'=>'Pizarra Virtual Grupal', 'url'=>array('/site/page', 'view' => 'pizarra-virtual-grupal')),
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name .')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					)
				)
			),
		)); ?>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<div class="hero-unit">
		<?php echo $content; ?>
	</div>


	<div class="navbar">
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
