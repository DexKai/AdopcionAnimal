<?php

/**
 * This is the model class for table "adopcion".
 *
 * The followings are the available columns in table 'adopcion':
 * @property integer $id_adopcion
 * @property integer $id_animal
 * @property string $id_rut
 * @property string $fecha_adopcion
 *
 * The followings are the available model relations:
 * @property Persona $idRut
 * @property Animal $idAnimal
 */
class Adopcion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'adopcion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_rut', 'required'),
			array('id_animal', 'numerical', 'integerOnly'=>true),
			array('id_rut', 'length', 'max'=>12),
			array('fecha_adopcion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_adopcion, id_animal, id_rut, fecha_adopcion', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idRut' => array(self::BELONGS_TO, 'Persona', 'id_rut'),
			'idAnimal' => array(self::BELONGS_TO, 'Animal', 'id_animal'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_adopcion' => 'Código',
			'id_animal' => 'Animal',
			'id_rut' => 'Adoptante',
			'fecha_adopcion' => 'Fecha Adopción',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_adopcion',$this->id_adopcion);
		$criteria->compare('id_animal',$this->id_animal);
		$criteria->compare('id_rut',$this->id_rut,true);
		$criteria->compare('fecha_adopcion',$this->fecha_adopcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Adopcion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


	
}
