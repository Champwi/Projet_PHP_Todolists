<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PicturesTable extends Table{


	public function initialize(array $c) :void{
		parent::initialize($c);
		$this->addBehavior('Timestamp');
		
		$this->addBehavior('Image');

		$this->belongsTo('Users', [
			'foreignKey' => 'user_id',
			'joinType' => 'INNER'
		]);

		$this->hasMany('Comments', [
			'foreignKey' => 'picture_id',
			'joinType' => 'INNER',
			'dependent' => true,
			'cascadeCallbacks' => true
		]);
	}


	public function validationDefault(Validator $v) : Validator{

		$v->maxLength('description', 300)
			->notEmptyString('description');

		return $v;
	}

}