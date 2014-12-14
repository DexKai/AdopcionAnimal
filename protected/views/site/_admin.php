<h1>Bienvenido</h1>

<p>Seleccione la opción que desea.</p>

<?php $animal = CHtml::image(Yii::app()->request->baseUrl.'/images/cat.png','this is alt tag of image');?>
<?php $adopcion = CHtml::image(Yii::app()->request->baseUrl.'/images/animal_hamster.png','this is alt tag of image');?>
<?php $noticia = CHtml::image(Yii::app()->request->baseUrl.'/images/news.png','this is alt tag of image');?>
<?php $user_admin = CHtml::image(Yii::app()->request->baseUrl.'/images/user.png','this is alt tag of image');?>

<table style="width:100%">
    <tr>
        <td><?php echo CHtml::link($animal,array('animal/index',/*'id'=>1*/));?></td>
        <td><?php echo CHtml::link($adopcion,array('adopcion/index',/*'id'=>1*/));?></td>
        <td><?php echo CHtml::link($noticia,array('noticia/index',/*'id'=>1*/));?></td>
        <td><?php echo CHtml::link($user_admin,array('cruge/ui/usermanagementadmin',/*'id'=>1*/));?></td>

    </tr>
    <tr>
    	<td><?php echo 'Animales' ?></td>
        <td><?php echo 'Adopción' ?></td>               
        <td><?php echo 'Noticias' ?></td>
        <td><?php echo 'Administrar Usuarios' ?></td>
    </tr>


</table>




<?php echo Yii::app()->user->ui->displayErrorConsole();?>

