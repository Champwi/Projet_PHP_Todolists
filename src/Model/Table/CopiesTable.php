<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CopiesTable extends Table{


	public function initialize(array $c) :void{
		parent::initialize($c);
		$this->addBehavior('Timestamp');
	}


	public function validationDefault(Validator $v) : Validator{
		return $v;
	}

}