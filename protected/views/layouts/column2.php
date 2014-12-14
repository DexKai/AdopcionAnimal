<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-21">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-6 last">
	<div id="sidebar">
	<?php

		if($this->menu){
			$this->widget(
					'booster.widgets.TbMenu',
					array(
							'type' => 'pills',
							'stacked' => true,
							'items' => array(array('label'=>'Operaciones:','icon'=>'wrench', 'url'=>'#', 'active'=>true),),
					)
			);
			$this->widget(
					'booster.widgets.TbMenu',
					array(
							'type' => 'pills',
							'stacked' => true,
							'items' => $this->menu,
							'htmlOptions'=>array('class'=>'operations'),
					)
			);
		}
	?>

	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>