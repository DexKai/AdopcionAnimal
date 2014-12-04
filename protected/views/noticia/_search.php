<?php
/** @var NoticiaController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id_noticia', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'titulo', array('class' => 'span5', 'maxlength' => 100)); ?>

<?php echo $form->datepickerRow($model, 'fecha_publicacion', array('prepend'=>'<i class="icon-calendar"></i>')); ?>

<?php echo $form->textAreaRow($model,'cuerpo',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

<?php echo $form->textFieldRow($model, 'image', array('class' => 'span5', 'maxlength' => 128)); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
