<?php
// protected/models/ImportEmployeesForm.php
class ImportEmployeesForm extends CFormModel {
    public $the_file;
    public function rules()
    {
        return array(
            array('the_file', 'file', 'allowEmpty'=>false,
                'types'=>'png',
                'maxSize'=>array(1024 * 2000),
                'message'=>'Solo se admiten archivos de texto con extensión PNG'),
        );
    }
    public function attributeLabels(){
        return array(
            "the_file"=>"Archivo a Importar",
        );
    }
}