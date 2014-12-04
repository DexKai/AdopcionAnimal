<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->widget(
'booster.widgets.TbBreadcrumbs',
array(
'links' => array('Inicio Sesión'),
)
);
?>

<h1>Inicio Sesión</h1>

<div class="form">
<?php $form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
        'id' => 'verticalForm',
        'htmlOptions' => array('class' => 'well'), // for inset effect
    )
); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>
<?php  
echo $form->textFieldGroup($model, 'username');
echo $form->passwordFieldGroup($model, 'password');
?>
	<div class="row buttons">
		<?php $this->widget(
    'booster.widgets.TbButton',
    array('buttonType' => 'submit', 'label' => 'Login')
); ?>
	</div>

<?php $this->endWidget();
unset($form); ?>
</div><!-- form -->
