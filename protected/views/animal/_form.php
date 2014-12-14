<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'animal-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),//NO TE OLVIDES DE ASIGNAR ESTO
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'numero_chip',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'nombre_animal',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>20)))); ?>

	<?php //echo $form->textFieldGroup($model,'id_especie',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->dropDownListGroup($model,
										'id_especie',
										array(
											'widgetOptions'=>array('data'=>$model->getMenuEspecie(),
											'htmlOptions'=>array(
												'empty'=>'Seleccione...',
												'class'=>'input-large',
												'ajax' =>array(
													'url'=>$this->createUrl('razasPorEspecie'),
													'type'=>'POST',
													'update'=>'#Animal_id_raza'))))
										); ?>

	<?php //echo $form->textFieldGroup($model,'id_raza',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->dropDownListGroup($model,
										'id_raza',
										array(
											'widgetOptions'=>array('data'=>$model->getMenuRaza(),
											'htmlOptions'=>array(
												'empty'=>'Seleccione...',
												'class'=>'input-large',
												)))
										); ?>

	<?php //echo $form->textFieldGroup($model,'id_color',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->dropDownListGroup($model,
										'id_color',
										array(
											'widgetOptions'=>array('data'=>$model->getMenuColores(),
											'htmlOptions'=>array(
												'empty'=>'Seleccione...',
												'class'=>'input-large',
												)))
										); ?>

	<?php echo $form->dropDownListGroup($model,'genero_animal', array('widgetOptions'=>array('data'=>array("Sin definir"=>"Sin definir","Macho"=>"Macho","Hembra"=>"Hembra",), 'htmlOptions'=>array('class'=>'input-large')))); ?>

	<?php echo $form->textFieldGroup($model,'edad_animal',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'peso',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->dropDownListGroup($model,'desparasitado', array('widgetOptions'=>array('data'=>array("Sin definir"=>"Sin definir","Si"=>"Si","No"=>"No",), 'htmlOptions'=>array('class'=>'input-large')))); ?>

	<?php echo $form->dropDownListGroup($model,'esterilizado', array('widgetOptions'=>array('data'=>array("Sin definir"=>"Sin definir","Si"=>"Si","No"=>"No",), 'htmlOptions'=>array('class'=>'input-large')))); ?>

	<?php echo $form->textAreaGroup($model,'vacunas', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>

	<?php echo $form->textAreaGroup($model,'observaciones', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>

	<?php //echo $form->datePickerGroup($model,'fecha_ingreso',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click on Month/Year to select a different Month/Year.')); ?>

	<?php //echo $form->textFieldGroup($model,'image',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>1024)))); ?>

	<?php echo $form->labelEx($model,'image'); ?>
    <?php echo CHtml::activeFileField($model, 'image'); ?>
    <?php echo $form->error($model,'image'); ?>

	<?php if($model->isNewRecord!='1'){
		echo CHtml::image(Yii::app()->request->baseUrl.'/images/Animal/'.$model->image,"image",array("height"=>300, "width"=>400));   // Image shown here if page is update page
	}?>
<br />
	<?php echo $form->dropDownListGroup($model,'adoptado', array('widgetOptions'=>array('data'=>array("No"=>"No","Si"=>"Si",), 'htmlOptions'=>array('class'=>'input-large')))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
