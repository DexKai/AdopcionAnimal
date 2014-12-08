<?php

/**
 * This is the model class for table "persona".
 *
 * The followings are the available columns in table 'persona':
 * @property string $RUT
 * @property integer $iduser
 * @property integer $id_comuna
 * @property string $nombre
 * @property string $apellido_p
 * @property string $apellido_m
 * @property string $genero
 * @property string $direccion
 * @property integer $telefono
 * @property string $fecha_nacimiento
 *
 * The followings are the available model relations:
 * @property Adopcion[] $adopcions
 * @property CrugeUser[] $crugeUsers
 * @property CrugeUser $iduser0
 * @property Comuna $idComuna
 */
class Persona extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'persona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RUT, id_comuna, nombre, apellido_p, apellido_m, genero, direccion, telefono, fecha_nacimiento', 'required'),
			array('iduser, id_comuna, telefono', 'numerical', 'integerOnly'=>true),
			array('RUT', 'length', 'max'=>12),
			array('nombre, apellido_p, apellido_m', 'length', 'max'=>100),
			array('genero', 'length', 'max'=>11),
			array('direccion', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RUT, iduser, id_comuna, nombre, apellido_p, apellido_m, genero, direccion, telefono, fecha_nacimiento', 'safe', 'on'=>'search'),
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
			'adopcions' => array(self::HAS_MANY, 'Adopcion', 'RUT'),
			'crugeUsers' => array(self::HAS_MANY, 'CrugeUser', 'persona_rut'),
			'iduser0' => array(self::BELONGS_TO, 'CrugeUser', 'iduser'),
			'idComuna' => array(self::BELONGS_TO, 'Comuna', 'id_comuna'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RUT' => 'Rut',
			'iduser' => 'Iduser',
			'id_comuna' => 'Id Comuna',
			'nombre' => 'Nombre',
			'apellido_p' => 'Apellido P',
			'apellido_m' => 'Apellido M',
			'genero' => 'Genero',
			'direccion' => 'Direccion',
			'telefono' => 'Telefono',
			'fecha_nacimiento' => 'Fecha Nacimiento',
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

		$criteria->compare('RUT',$this->RUT,true);
		$criteria->compare('iduser',$this->iduser);
		$criteria->compare('id_comuna',$this->id_comuna);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido_p',$this->apellido_p,true);
		$criteria->compare('apellido_m',$this->apellido_m,true);
		$criteria->compare('genero',$this->genero,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Persona the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
