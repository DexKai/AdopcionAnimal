
<h1>Bienvenido Adoptante</h1>

<p>Seleccione la opción que desea.</p>

<?php $animal = CHtml::image(Yii::app()->request->baseUrl.'/images/cat.png','this is alt tag of image');?>
<?php $noticia = CHtml::image(Yii::app()->request->baseUrl.'/images/news.png','this is alt tag of image');?>
<?php $adoptante = CHtml::image(Yii::app()->request->baseUrl.'/images/user.png','this is alt tag of image');?>


<?php $usuario = Yii::app()->db->createCommand()
    ->select('persona_rut')
    ->from('cruge_user')
    ->where('iduser=:userid', array(':userid'=>Yii::app()->user->id))
    ->queryRow(); ?>



<table style="width:100%">
    <tr>
        <td><?php echo CHtml::link($animal,array('animal/index',/*'id'=>1*/));?></td>
        <td><?php echo CHtml::link($noticia,array('noticia/index',/*'id'=>1*/));?></td>
        <td><?php echo CHtml::link($adoptante,array('persona/view','id'=>$usuario['persona_rut']));?></td>

    </tr>
    <tr>
        <td><?php echo 'Tus Mascotas' ?></td>
        <td><?php echo 'Ver Noticias' ?></td>
        <td><?php echo 'Tu Perfil' ?></td>
    </tr>


</table>

<?php //print_r($usuario); ?>
<?php //echo Yii::app()->user->id; ?>

<?php echo Yii::app()->user->ui->displayErrorConsole();?>