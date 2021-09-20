<?php 
namespace app\models;
use yii\db\ActiveRecord;

class Person extends ActiveRecord
{
private $id;
private $name;
private $lastname;
private $birthdate;
private $birthplace;
private $education;
private $privatelife;
private $work;
private $achievements;


public function rules(){
    return [
[
    ['id','name','lastname','birthdate','birthplace','education','privatelife','work','achievements'], 'required']
];
}
}

?>