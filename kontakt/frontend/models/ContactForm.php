
	<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 26.03.2016
 * Time: 9:32
 */

namespace app\models;
use yii\db\ActiveRecord;


class ContactForm extends ActiveRecord{

    public static function tableName(){
        return 'posts';
    }

    public function attributeLabels(){
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            
        ];
    }

    public function rules(){
        return [
            [ ['name', 'text'], 'required' ],
            [ 'email', 'trim' ],
        ];
    }

} 
	
	
	
	
	
	
	
	

   