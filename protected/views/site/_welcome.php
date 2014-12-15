
<div>
<?php

    $this->widget(
    'booster.widgets.TbCarousel',
    array(
    'items' => array(
    array(
    'image' => 'images/Carousel/1-placeholder.jpg',
    //'label' => 'First Thumbnail label',
    //'caption' => 'First Caption.'
    ),
    array(
    'image' => 'images/Carousel/2-placeholder.jpg',
    //'label' => 'Second Thumbnail label',
    //'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
    ),
    array(
    'image' => 'images/Carousel/3-placeholder.jpg',
    //'label' => 'Third Thumbnail label',
    //'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
    ),
    array(
    'image' => 'images/Carousel/4-placeholder.jpg',
    //'label' => 'Second Thumbnail label',
    //'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
    ),
    ),
    )
    );
 ?>
 </div>

 <?php echo Yii::app()->user->ui->displayErrorConsole();?>