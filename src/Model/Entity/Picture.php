<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;


class Picture extends Entity{

	protected $_accessible = [
		'*' => true,
		'id' => false
	];

}