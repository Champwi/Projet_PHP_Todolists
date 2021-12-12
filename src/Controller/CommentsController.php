<?php

namespace App\Controller;

class CommentsController extends AppController{


	public function new(){

		$new = $this->Comments->newEmptyEntity();
		if($this->request->is('post')){
			$new = $this->Comments->patchEntity($new, $this->request->getData());
			$new->user_id = $this->request->getAttribute('identity')->id;
			if($this->Comments->save($new)){
				$this->Flash->success('Saved');
			}else{
				$this->Flash->error('Try again');
			}
		}
		return $this->redirect(['controller' => 'Pictures', 'action' => 'index', '#' => 'picture'.$new->picture_id]);
	}
}
