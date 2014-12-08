<?php

/**
 * This is the model class for table "comuna".
 *
 * The followings are the available columns in table 'comuna':
 * @property integer $id_comuna
 * @property string $nombre_comuna
 * @property integer $id_provincia
 *
 * The followings are the available model relations:
 * @property Provincia $idProvincia
 * @property Persona[] $personas
 */
class Comuna extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'comuna';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_comuna, id_provincia', 'required'),
			array('id_provincia', 'numerical', 'integerOnly'=>true),
			array('nombre_comuna', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_comuna, nombre_comuna, id_provincia', 'safe', 'on'=>'search'),
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
			'idProvincia' => array(self::BELONGS_TO, 'Provincia', 'id_provincia'),
			'personas' => array(self::HAS_MANY, 'Persona', 'id_comuna'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_comuna' => 'Id Comuna',
			'nombre_comuna' => 'Nombre Comuna',
			'id_provincia' => 'Id Provincia',
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

		$criteria->compare('id_comuna',$this->id_comuna);
		$criteria->compare('nombre_comuna',$this->nombre_comuna,true);
		$criteria->compare('id_provincia',$this->id_provincia);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Comuna the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
