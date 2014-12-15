<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
    </br>
        <?php echo CHtml::image(Yii::app()->baseUrl.'/images/Animal/'.$data->image,'imagen',array("height"=>260, "width"=>180)); ?>
        <div class="caption">

            <h3><?php echo CHtml::encode($data->nombre_animal); ?></h3>

        <table>
            <tr>
                <td><strong>Raza:</strong></td>
                <td><?php echo CHtml::encode(Raza::getRaza($data->id_raza)); ?></td>
            </tr>
            <tr>
                <td><strong>Género:</strong></td>
                <td><?php echo CHtml::encode($data->genero_animal); ?></td>
            </tr>
            <tr>
                <td><strong>Adoptado:</strong></td>
                <td><?php echo CHtml::encode($data->adoptado); ?></td>
            </tr>
        </table>
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