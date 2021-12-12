<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class TodolistsTable extends Table{


	public function initialize(array $c) :void{
		parent::initialize($c);
		$this->addBehavior('Timestamp');

		$this->belongsTo('Users', [
			'foreignKey' => 'user_id',
			'joinType' => 'INNER'
		]);

		$this->hasMany('items',[
            'foreignKey' => 'todolist_id',
            'joinType' => 'INNER'
        ]);

		$this->hasMany('Copies',[
            'foreignKey' => 'origin_id',
            'joinType' => 'INNER'
        ]);
	}


	public function validationDefault(Validator $v) : Validator{

		$v->notEmptyString('title');

		return $v;
	}

}