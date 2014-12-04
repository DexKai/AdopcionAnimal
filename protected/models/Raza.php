<?php

Yii::import('application.models._base.BaseRaza');

class Raza extends BaseRaza
{
    /**
     * @return Raza
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Raza|Razas', $n);
    }

}