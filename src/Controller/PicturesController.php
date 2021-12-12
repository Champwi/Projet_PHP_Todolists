<?php

namespace App\Controller;

class PicturesController extends AppController{

	public function beforeFilter(\Cake\Event\EventInterface $event) {
		parent::beforeFilter($event);
		$this->Authentication->addUnauthenticatedActions(['index']);
	}

	public function new(){

		$n = $this->Pictures->newEmptyEntity();

		//traitement ..
		//si on a recu le form
		if($this->request->is(['post', 'put'])){
			//on recupere les données du form
			//puisqu'on gere des fichiers, on passe nos elements à la main plutot que faire le patch (qui plante pour les fichiers)
			$n->description = $this->request->getData('description');
			$n->user_id = $this->request->getAttribute('identity')->id;

			//si le fichier est vide ou n'est pas au bon format (pour savoir s'il est au bon format, on regarde si son type est dans le tableau des types autorisés)
			if( empty($this->request->getData('file')->getClientFilename()) || !in_array($this->request->getData('file')->getClientMediaType(), ['image/png', 'image/jpg', 'image/jpeg', 'image/gif']) ){
				//erreur 
				$this->Flash->error('L\'image est obligatoire et doit être au format png, jpg ou gif.');
			} else { //sinon (ok)
				//on recup l'extension du fichier
				$ext = pathinfo($this->request->getData('file')->getClientFilename(), PATHINFO_EXTENSION);
				//on cree un nouveau nom pour le fichier
				$newName = 'pict-'.time().'-'.rand(0,9999999).'.'.$ext;
				//on place ce nouveau nom dans l'entité
				$n->file = $newName;
				//on tente la sauvegarde dans la base
				if( $this->Pictures->save($n) ){
					//on deplace le fichier de la memoire temporaire vers notre dossier data
					$this->request->getData('file')->moveTo(WWW_ROOT.'img/data/pictures/'.$newName);
					//confirmation
					$this->Flash->success('Image sauvegardée');
					//redirection
					return $this->redirect(['action' => 'index']);
				}else { //sinon (pas sauv)
					//erreur
					$this->Flash->error('Sauvegarde impossible');
				}//fin sinon pas sauv
			}//fin sinon ok
		}//fin reception form
		$this->set(compact('n'));
	}

	public function index(){
		//on recup toutes les images
		//$imgs = $this->Pictures->find('all', ['contain' => ['Users', 'Comments.Users']]);


		//$this->loadModel('Comments');
		//$n = $this->Comments->newEmptyEntity();


		//$this->set(compact(['imgs', 'n']));
	}


	public function delete($id = null) {
		$this->request->allowMethod(['post', 'delete']);
		$track = $this->Pictures->get($id);
		
		if ($this->Pictures->delete($track)) {
			$this->Flash->success('Image supprimée');
		} else {
			$this->Flash->error('Impossible de supprimer l\'image');
		}

		return $this->redirect(['action' => 'index']);
	}


}