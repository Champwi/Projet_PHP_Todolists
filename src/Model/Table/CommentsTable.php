<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CommentsTable extends Table{


	public function initialize(array $c) :void{
		parent::initialize($c);
		$this->addBehavior('Timestamp');

		$this->belongsTo('Users', [
			'foreignKey' => 'user_id',
			'joinType' => 'INNER'
		]);

		$this->belongsTo('Pictures', [
			'foreignKey' => 'picture_id',
			'joinType' => 'INNER'
		]);
	}


	public function validationDefault(Validator $v) : Validator{

		$v->notEmptyString('name');

		return $v;
	}

}