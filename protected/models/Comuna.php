<?php

Yii::import('application.models._base.BaseComuna');

class Comuna extends BaseComuna
{
    /**
     * @return Comuna
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Comuna|Comunas', $n);
    }

}