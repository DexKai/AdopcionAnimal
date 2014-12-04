<?php

Yii::import('application.models._base.BaseAnimal');

class Animal extends BaseAnimal
{
    /**
     * @return Animal
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Animal|Animals', $n);
    }

}