<h1><?php echo ucwords(CrugeTranslator::t("crear nuevo usuario"));?></h1>
<div class="form">
<?php
	/*
		$model:  es una instancia que implementa a ICrugeStoredUser
	*/
?>
<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>
<?php echo CHtml::errorSummary(array($persona,$model)); ?>

<?php $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id'=>'crugestoreduser-form',
    'enableAjaxValidation'=>false,
    'enableClientValidation'=>false,
)); ?>

<div class="row form-group">
    <div class="row">
    	<?php echo $form->textFieldGroup($persona,'id_rut',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>12)))); ?>
        <?php //echo $form->labelEx($persona,'nombre'); ?>
        <?php //echo $form->textField($persona,'nombre',array('maxlength'=>128,'autocomplete'=>"off",'placeholder'=>"Ej: Nancy")); ?>
        <?php //echo $form->error($persona,'nombre'); ?>
        <?php echo $form->textFieldGroup($persona,'nombre',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>

	<?php echo $form->textFieldGroup($persona,'apellido_p',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>

	<?php echo $form->textFieldGroup($persona,'apellido_m',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>

    <?php echo $form->datePickerGroup($persona,'fecha_nacimiento',array('widgetOptions'=>array('options'=>array(
            'format' => 'yyyy-mm-dd',
            'viewformat' => 'mm/dd/yyyy',
            'language' => 'es'),
            'htmlOptions'=>array('class'=>'span5')),
            'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>')); ?>



	<?php echo $form->dropDownListGroup($persona,'genero', array('widgetOptions'=>array('data'=>array("Sin definir"=>"Sin definir","Masculino"=>"Masculino","Femenino"=>"Femenino",), 'htmlOptions'=>array('class'=>'input-large')))); ?>

	<?php echo $form->textFieldGroup($persona,'direccion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>1024)))); ?>

	<?php echo $form->dropDownListGroup($persona,
										'id_region',
										array(
											'widgetOptions'=>array('data'=>$persona->getMenuRegiones(),
											'htmlOptions'=>array(
												'empty'=>'Seleccione...',
												'class'=>'input-large',
												'ajax' =>array(
													'url'=>$this->createUrl('provinciasPorRegion'),
													'type'=>'POST',
													'update'=>'#Persona_id_provincia'))))
										); ?>

	<?php echo $form->dropDownListGroup($persona,
										'id_provincia',
										array(
											'widgetOptions'=>array('data'=>$persona->getMenuProvincias(),
											'htmlOptions'=>array(
												'empty'=>'Seleccione...',
												'class'=>'input-large',
												'ajax' =>array(
													'url'=>$this->createUrl('comunasPorProvincia'),
													'type'=>'POST',
													'update'=>'#Persona_id_comuna'))))
										); ?>

	<?php echo $form->dropDownListGroup($persona,
										'id_comuna',
										array(
											'widgetOptions'=>array('data'=>$persona->getMenuComunas(),
											'htmlOptions'=>array(
												'empty'=>'Seleccione...',
												'class'=>'input-large',
												)))
										); ?>

	<?php echo $form->textFieldGroup($persona,'telefono',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
    </div>
	<div class="col">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('maxlength'=>128,'autocomplete'=>"off",'placeholder'=>"adoptante22")); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
	<div class="col">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('maxlength'=>128,'autocomplete'=>"off",'placeholder'=>"adoptante@correo.com")); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
	<div class="col">
		<?php echo $form->labelEx($model,'newPassword'); ?>
		<?php echo $form->textField($model,'newPassword',array('maxlength'=>128,'autocomplete'=>"off",'placeholder'=>" ")); ?>
		<?php echo $form->error($model,'newPassword'); ?>
		
		<script>
			function fnSuccess(data){
				$('#CrugeStoredUser_newPassword').val(data);
			}
			function fnError(e){
				alert("error: "+e.responseText);
			}
		</script>
		<?php echo CHtml::ajaxbutton(
			CrugeTranslator::t("Generar una nueva clave")
			,Yii::app()->user->ui->ajaxGenerateNewPasswordUrl
			,array('success'=>'js:fnSuccess','error'=>'js:fnError')
		); ?>

	</div>
</div>
<div class="row buttons">
	<?php Yii::app()->user->ui->tbutton("Crear Usuario"); ?>
</div>
<?php echo $form->errorSummary($model); ?>
<?php $this->endWidget(); ?>
</div>