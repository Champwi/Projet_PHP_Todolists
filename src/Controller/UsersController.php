<?php

namespace App\Controller;

use Cake\ORM\Query;

class UsersController extends AppController{
	
	public function beforeFilter(\Cake\Event\EventInterface $event) {
	    parent::beforeFilter($event);
	    //autorise l'action login et add de ce controller seulement
	    $this->Authentication->addUnauthenticatedActions(['login', 'new', 'index']);
	}

	public function index(){
		$users = $this->Users->find('all');
		$this->set(compact('users'));
	}


	public function new(){
		$this->viewBuilder()->setLayout('special');


		$new = $this->Users->newEmptyEntity();
		if($this->request->is('post')){
			$new = $this->Users->patchEntity($new, $this->request->getData());
			if($this->Users->save($new)){
				$this->Flash->success('Inscription réussite. Veuillez vous connecter pour accéder à votre espace personnel.');
				return $this->redirect(['controller' => 'Users', 'action' => 'index']);
			}else{
				$this->Flash->error('Recommencez.');
			}
		}
		$this->set(compact('new'));
	}


	public function login(){


		if($this->request->is(['post'])){

			$res = $this->Authentication->getResult();
			if($res->isValid()){
				$this->Flash->success('Bienvenue ! ');
				return $this->redirect($this->Authentication->getLoginRedirect() ?? ['controller' => 'todolists','action' => 'home']);
			}else{
				$this->Flash->error('Identifiants incorrects.');
			}
		}
	}


	public function logout(){
		$result = $this->Authentication->getResult();
		$this->Authentication->logout();
		$this->Flash->success('A bientôt !');
		return $this->redirect(['controller' => 'todolists','action' => 'home']);
	}

	




	public function show($id = null){
		//si id est vide, on va vers accueil
		if(empty($id))
			return $this->redirect(['action' => 'index']);
			//return est bloquant, donc exécute et s'arrête donc pas besoin de le stoper  
		//Identification par id
		$username = $this->Users->findById($id)-> contain('Todolists', function (Query $q) {
			return $q
				//->find('visibility');
				->where(['Todolists.visibility !=' => 0]);
		});
		

		if($username->isEmpty()){
			$this->Flash->error('Cette publication n\'existe pas.');
			return $this->redirect(['action' =>'index']);
		}
	
		$username = $username->first();
		$this->set(compact('username'));
	}

}