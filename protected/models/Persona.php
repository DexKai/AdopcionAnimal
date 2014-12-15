<?php

/**
 * This is the model class for table "persona".
 *
 * The followings are the available columns in table 'persona':
 * @property string $id_rut
 * @property integer $iduser
 * @property string $nombre
 * @property string $apellido_p
 * @property string $apellido_m
 * @property string $fecha_nacimiento
 * @property string $genero
 * @property string $direccion
 * @property integer $id_comuna
 * @property integer $id_provincia
 * @property integer $id_region
 * @property integer $telefono
 * @property string $lista
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
			array('id_rut, nombre, apellido_p, apellido_m, fecha_nacimiento, genero, direccion, id_comuna, id_provincia, id_region, telefono, lista', 'required'),
			array('iduser, id_comuna, id_provincia, id_region, telefono', 'numerical', 'integerOnly'=>true),
			array('id_rut', 'length', 'min'=>9,'message'=>'RUT inválido'),
			array('id_rut', 'length', 'max'=>12,'message'=>'RUT inválido'),
			array('id_rut', 'unique', 'message'=>'Ya existe un usuario con este RUT'),
			array('id_rut', 'validateRut','message'=>'RUT inválido'),
			array('nombre, apellido_p, apellido_m', 'length', 'max'=>100),
			array('genero', 'length', 'max'=>11),
			array('direccion', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_rut, iduser, nombre, apellido_p, apellido_m, fecha_nacimiento, genero, direccion, id_comuna, id_provincia, id_region, telefono,lista', 'safe', 'on'=>'search'),
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
			'adopcions' => array(self::HAS_MANY, 'Adopcion', 'id_rut'),
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
			'id_rut' => 'RUT',
			'iduser' => 'Nombre de Usuario',
			'nombre' => 'Nombre',
			'apellido_p' => 'Apellido Paterno',
			'apellido_m' => 'Apellido Materno',
			'fecha_nacimiento' => 'Fecha de Nacimiento',
			'genero' => 'Género',
			'direccion' => 'Dirección',
			'id_comuna' => 'Comuna',
			'id_provincia' => 'Provincia',
			'id_region' => 'Región',
			'telefono' => 'Teléfono',
			'lista' => 'Lista',
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

		$criteria->compare('id_rut',$this->id_rut,true);
		$criteria->compare('iduser',$this->iduser);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido_p',$this->apellido_p,true);
		$criteria->compare('apellido_m',$this->apellido_m,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('genero',$this->genero,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('id_comuna',$this->id_comuna);
		$criteria->compare('id_provincia',$this->id_provincia);
		$criteria->compare('id_region',$this->id_region);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('lista',$this->lista,true);

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

	/* Esta función retornará un array con todas las regiones para ser usadas en un DropDown */
	public function getMenuRegiones($key=null){
		if($key!==null)
			return Region::model()->findByPk($key)->nombre_region;
		$regiones = Region::model()->findAll();
		return CHtml::listData($regiones,'id_region','nombre_region');
	}

	/* Esta función retornará un array con todas las provincias para ser usadas en un DropDown */
	public function getMenuProvincias($key=null){
		if($key!==null)
			return Provincia::model()->findByPk($key)->nombre_provincia;
		$provincias = Provincia::model()->findAll();
		return CHtml::listData($provincias,'id_provincia','nombre_provincia');
	}

	/* Esta función retornará un array con todas las comunas para ser usadas en un DropDown */
	public function getMenuComunas($key=null){
		if($key!==null)
			return Comuna::model()->findByPk($key)->nombre_comuna;
		$comunas = Comuna::model()->findAll();
		return CHtml::listData($comunas,'id_comuna','nombre_comuna');
	}
/*
	public static function getRaza($key=null){

		if($key!==null)
			return Raza::model()->findByPk($key)->nombre_raza;
		return CHtml::listData(Raza::model()->findAll(),'id_raza','nombre_raza');
	}
*/

	public function validateRut($attribute, $params) {
        $data = explode('-', $this->id_rut);
        $evaluate = strrev($data[0]);
        $multiply = 2;
        $store = 0;
        for ($i = 0; $i < strlen($evaluate); $i++) {
            $store += $evaluate[$i] * $multiply;
            $multiply++;
            if ($multiply > 7)
                $multiply = 2;
        }
        isset($data[1]) ? $verifyCode = strtolower($data[1]) : $verifyCode = '';
        $result = 11 - ($store % 11);
        if ($result == 10)
            $result = 'k';
        if ($result == 11)
            $result = 0;
        if ($verifyCode != $result)
          //$this->addError('rut', 'Rut inválido.');
            $this->addError($attribute,'Run inválido');


    }

    public function getPersona(){
    	$criteria = new CDbCriteria;
    	$criteria = $criteria->addCondition('t.lista <> "Negra"');
		$personas = Persona::model()->findAll($criteria);
		return CHtml::listData($personas,'id_rut','fullname');
	}

	public function getFullName() {
        $fullName = (! empty ( $this->nombre )) ? $this->nombre : '';
        $fullName .= (! empty ( $this->apellido_p )) ? ((! empty ( $fullName )) ? " " . $this->apellido_p : $this->apellido_p) : '';
        $fullName .= (! empty ( $this->apellido_m )) ? ((! empty ( $fullName )) ? " " . $this->apellido_m : $this->apellido_m) : '';
        return $fullName;
	}
}
