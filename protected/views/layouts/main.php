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
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/table.css" />

	<title><?php echo CHtml::encode($this -> pageTitle); ?></title>
</head>

<body class="body">


<!--=== Top ===-->
<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6 contact">
				<!-- Logo -->
				<table>
					<tr>
						<td>
							<img  src='images/logo.png' align=left hspace=25>
						</td>
						<td>
							<?php  //<h2>Sistema Adopción Animal</h2> ?>
						</td>
						<td>
							<?php
							if (!Yii::app()->user->isGuest){
								echo '<table class="tbl_login"><tr><td>'.Yii::app()->user->getState("nombre").'</td></tr>
											 <tr><td>'.Yii::app()->user->getState("cargo").'</td></tr></table>';
							}
							else{
								echo '<table><tr><td>&nbsp;</td></tr>
								<tr><td>&nbsp;</td></tr></table>';
							}
							?>
						</td>
					</tr>
				</table>
				<!-- /logo -->
            </div>
            
        </div>
    </div>
</div><!--/top-->
<!--=== End Top ===-->

<!--=== Header ===-->
 <div class="header">
    <div class="container">

    <!-- Menu -->
	<?php $this->widget(
'booster.widgets.TbNavbar',
array(
'type' => null, // null or 'inverse'
'brand' => 'Inicio',
'brandUrl' => array('/site/index'),
'collapse' => true, // requires bootstrap-responsive.css
'fixed' => true,
'fluid' => true,
'items' => array(
array(
'class' => 'booster.widgets.TbMenu',
'type' => 'navbar',
		'items' => array(
				array('label'=>'Inicio', 'url'=>array('/site/index')),
				array('label'=>'Acerca', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contacto', 'url'=>array('/site/contact')),
				array('label'=>'Noticia', 'url'=>array('/noticia/index'), 'visible'=>Yii::app()->user->checkAccess('Administrador')),
				array('label'=>'Animales', 'url'=>array('/animal/index'), 'visible'=>Yii::app()->user->checkAccess('Administrador')),
				array('label'=>'Especie', 'url'=>array('/especie/index'), 'visible'=>Yii::app()->user->checkAccess('Administrador')),
				array('label'=>'Raza', 'url'=>array('/raza/index'), 'visible'=>Yii::app()->user->checkAccess('Administrador')),
				array('label'=>'Persona', 'url'=>array('/persona/index'), 'visible'=>Yii::app()->user->checkAccess('Administrador')),

						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		),
	),
));
 ?>
 </div> <!-- /container -->
 </div> <!--/header -->
<!-- === End Header === -->

<div class="container">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this -> widget('zii.widgets.CBreadcrumbs', array('links' => $this -> breadcrumbs, )); ?><!-- breadcrumbs -->
	<?php endif ?>
</div>



<div class="container">
    <!-- Start Yii page content -->
	<?php echo $content; ?>
	<!-- End Yii Page Content -->
</div>

<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> por ISW-2014 Grupo 4<br/>
		Todos los derechos reservados.<br/>

		
</div><!-- footer -->
	
</div>

</body>
</html>