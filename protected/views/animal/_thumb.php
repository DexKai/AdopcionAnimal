<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <?php echo CHtml::image(Yii::app()->baseUrl.'/images/Animal/'.$data->image,'imagen',array("height"=>260, "width"=>180)); ?>
        <div class="caption">
            <h3><?php echo CHtml::encode($data->nombre_animal); ?></h3>
            <p><?php echo CHtml::encode($data->id_raza); ?></p>
            <p><?php echo CHtml::encode($data->genero_animal); ?></p>
            <p><?php $this->widget(
				'booster.widgets.TbButton',
				array(
					'label' => 'Ver',
					'context' => 'primary',
					'buttonType' => 'link',
					'url' => array('animal/view','id'=>$data->id_animal),
				)
			); ?></p>

         
        </div>
    </div>
</div>