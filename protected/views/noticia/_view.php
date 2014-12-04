<?php
/** @var NoticiaController $this */
/** @var Noticia $data */
?>
<div class="view">
                    
        <?php if (!empty($data->titulo)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->titulo); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->fecha_publicacion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('fecha_publicacion')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->fecha_publicacion, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->fecha_publicacion)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->cuerpo)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('cuerpo')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->cuerpo); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->image)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
            </div>
            <div class="field_value">
                <img alt="<?php echo $data ?>" title="<?php echo $data ?>" src="<?php echo $data->image; ?>" />
                            </div>
        </div>

        <?php endif; ?>
    </div>