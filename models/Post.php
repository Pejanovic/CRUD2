<?php

namespace app\controllers;

use yii\db\ActiveRecord;

class Post extends ActiveRecord
{
    public $name;
    public $lastname;
    public $birthdate;
    public $birthplace;
    public $education;
    public $privatelife;
    public $work;
    public $achievements;


    public function rules(){
        return [
            [
                ['name','lastname','birthdate','birthplace','education','privatelife','work','achievements'], 'required']
        ];
    }
}