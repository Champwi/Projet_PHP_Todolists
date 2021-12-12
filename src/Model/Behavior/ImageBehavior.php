<?php  // src/Model/Behavior/ImageBehavior.php

namespace App\Model\Behavior;


use Cake\ORM\Behavior;
use Cake\Datasource\EntityInterface;
use Cake\Event\Event;
use ArrayObject;


class ImageBehavior extends Behavior{

	//lorsque on supprime l'entité, son fichier file est supprimé du serveur
	public function beforeDelete(Event $event, EntityInterface $entity, ArrayObject $options){
		if( !empty($entity->file)  && file_exists(WWW_ROOT.'img/data/pictures/'.$entity->file) )
			unlink(WWW_ROOT.'img/data/pictures/'.$entity->file);
	}
}