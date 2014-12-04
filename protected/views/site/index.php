<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $rol = Yii::app()->db->createCommand()
    ->select('itemname')
    ->from('cruge_authassignment')
    ->where('userid=:userid', array(':userid'=>Yii::app()->user->id))
    ->queryRow(); ?>

<?php if ($rol['itemname']=='Administrador') { $this->renderPartial('_admin');}   ?>

<?php if ($rol['itemname']=='Adoptante') { $this->renderPartial('_adoptante');}   ?>




