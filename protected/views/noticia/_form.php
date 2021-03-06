<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'noticia-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),//NO TE OLVIDES DE ASIGNAR ESTO
)); ?>

<p class="help-block">Campos con <span class="required">*</span> son obligatorios.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'titulo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>20,'maxlength'=>255)))); ?>

    <?php /*echo $form->datePickerGroup($model,'fecha_publicacion',array('widgetOptions'=>array('options'=>array(
                    'format' => 'yyyy-mm-dd',
            'viewformat' => 'mm/dd/yyyy',
            'language' => 'es'),

            'htmlOptions'=>array('class'=>'span5')),
            'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>',
            'append'=>'Click on Month/Year to select a different Month/Year.')); */?>

	<?php echo $form->textAreaGroup($model,'cuerpo', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>8, 'cols'=>45, 'class'=>'span8')))); ?>

	<?php //echo $form->textFieldGroup($model,'image',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>128)))); ?>

	<?php //echo $form->textFieldRow($model,'image',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->labelEx($model,'image'); ?>
    <?php echo CHtml::activeFileField($model, 'image'); ?>
    <?php echo $form->error($model,'image'); ?>

	<?php if($model->isNewRecord!='1'){
		echo CHtml::image(Yii::app()->request->baseUrl.'/images/Noticia/'.$model->image,"image",array("height"=>300, "width"=>400));   // Image shown here if page is update page
	}?>
<br />
<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
