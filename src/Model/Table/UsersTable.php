<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table{ 


	public function initialize(array $c) :void{
		parent::initialize($c);
		$this->addBehavior('Timestamp');

		$this->hasMany('Todolists', [
			'foreignKey' => 'user_id',
			'joinType' => 'INNER'
		]);

		$this->hasMany('Messages', [
			'foreignKey' => 'receiver_id',
			'joinType' => 'INNER'
		]);
	}


	public function validationDefault(Validator $v) : Validator{

		$v->maxLength('name', 30)
			->notEmptyString('name');

		return $v;
	}

}