<?php 

namespace App\Controller;

class TodolistsController extends AppController{


    
	public function beforeFilter(\Cake\Event\EventInterface $event) {
	    parent::beforeFilter($event);
	    //pas besoin de se connecter pour voir la page
	    $this->Authentication->addUnauthenticatedActions(['home','stats']);
	}

    public function index(){
		/* $todolists = $this->Todolists->find('all');
		$this->set(compact('todolists'));
 */

        $todolists = $this->Todolists->find()->where(['user_id =' => $this->Authentication->getIdentity()->get('id')]);
        $this->set(compact('todolists'));
	}

    public function home(){

        $todolists = $this->Todolists->find()->where(['visibility !=' => 0]);
        $this->set(compact('todolists'));
    }

    
    public function new(){
      //créer une variable new - réintilialsier
        $new = $this->Todolists->newEmptyEntity();
        
        //Si on est en post
        if($this->request->is('post','put')){
        //on crée une entity de comm vide pour récupérer les données du formulaire - lire contenu du formulaire, récupére tous les champs

            $new = $this->Todolists->patchEntity($new, $this->request->getData());
            $new->user_id = $this->Authentication->getIdentity()->get('id');
            //$user = variable
            //$new = Todolists
//getIdentity ()permet de récup l'utilisateur de se connecter

        //on recupere les données du form
        //récupére tous les éléments dans pictures
       $new->picture = $this->request->getUploadedFile('picture');
       

        //si le fichier est vide ou n'est pas au bon format (pour savoir s'il est au bon format, on regarde si son type est dans le tableau des types autorisés)
        if( empty($this->request->getUploadedFile('picture')->getClientFilename()) || !in_array($this->request->getUploadedFile('picture')->getClientMediaType(), ['image/png', 'image/jpg', 'image/jpeg', 'image/gif']) ){
            //erreur 
            $this->Flash->error('L\'image est obligatoire et doit être au format png, jpg ou gif.');
        } else { //sinon (ok)
            //on recup l'extension du fichier
            $ext = pathinfo($this->request->getUploadedFile('picture')->getClientFilename(), PATHINFO_EXTENSION);
            //on cree un nouveau nom pour le fichier
            $newName = 'pict-'.time().'-'.rand(0,9999999).'.'.$ext;
            //on place ce nouveau nom dans l'entité
            $new->picture = $newName;
            //on tente la sauvegarde dans la base
            if( $this->Todolists->save($new) ){
                //on deplace le fichier de la memoire temporaire vers notre dossier data
                $this->request->getUploadedFile('picture')->moveTo(WWW_ROOT.'img/data/'.$newName);
                //confirmation
                $this->Flash->success('Image sauvegardée + Todolist enregistré. Consultez votre ToDoList dans "Sommaire des Todolists".');
                //redirection
                return $this->redirect(['action' => 'index']);
            }else { //sinon (pas sauv)
                //erreur
                $this->Flash->error('Sauvegarde de l\'image + Todoliste impossible.');
            }//fin sinon pas sauv
        }//fin sinon ok


    }
    $this->set(compact('new'));

 }



 //afficher les détails de la to do list
 
public function show($id = null){
    //si id est vide, on va vers accueil
    if(empty($id))
        return $this->redirect(['action' => 'index']);
        //return est bloquant, donc exécute et s'arrête donc pas besoin de le stoper 
    //find() donne un ensemble de resultat. Pour avoir le premier resultats, on applique  la méthode first() 
    $venti = $this->Todolists->findById($id) ->contain(['items']);

    if($venti->isEmpty()){
        $this->Flash->error('Cette publication n\'existe pas.');
        return $this->redirect(['action' =>'index']);
    }

    $venti = $venti->first();
    $this->set(compact('venti'));


    $v = $this->Todolists->findById($id) ->contain(['items']);

    if($v->isEmpty()){
        $this->Flash->error('Cette publication n\'existe pas.');
        return $this->redirect(['action' =>'index']);
    }

    $v = $v->first();
    $this->set(compact('v'));

    
    $this->loadModel('items');

$items = $this->items->newEmptyEntity();
    $this->set(compact('items')); 

}

    public function stats(){
        //recup toutes les lignes de la table - $t peut être appeler autrement du moment qu'on récupère toujours la même variable
        
        $xiao = $this->Todolists->find('all')->contain('Users');
//Prendre les champs qui nous intéresses dans table todolists + users
        $xiao->select([
            'totalTodolists' => $xiao->func()->count('Todolists.id'), 'user_id', 'Users.username'])
            ->group('user_id')->order(['totalTodolists' => 'DESC'])
            ->limit(5);

        /*$autreVariable = 42;*/
        //transmet la variable à la vue
        $this->set(compact('xiao'));

        /*$this->set('z', $autreVariable);*/

        $diluc = $this->Todolists->find('all')->contain(['Users']);

//Prendre les champs qui nous intéresses dans table todolists + users
        $diluc
            ->join([
                'item' => [
                    'table' => 'items',
                    'type' => 'INNER',
                    'conditions' => ['item.todolist_id = todolists.id', 'item.status = 1'],
                ]
            ])
            ->select([
                'totalstatus' => $diluc->func()->count('item.id'), 'user_id', 'Users.username'])
            ->group('user_id')->order(['totalstatus' => 'DESC'])
            ->limit(5);

        /*$autreVariable = 42;*/
        //transmet la variable à la vue
        $this->set(compact('diluc'));
        

          
        $aether = $this->Todolists->find('all')
        ->join([
            'c' => [
                'table' => 'Copies',
                'type' => 'INNER',
                'conditions' => ['c.origin_id = todolists.id'],
            ]
        ]);
//Prendre les champs qui nous intéresses dans table todolists + users
        $aether->select([
            'totalCopies' => $aether->func()->count('c.id'), 'user_id', 'Todolists.title'])
            ->group('user_id')->order(['totalCopies' => 'DESC'])
            ->limit(5);

        /*$autreVariable = 42;*/
        //transmet la variable à la vue
        $this->set(compact('aether'));

    }


 public function copy($id)
    {
        if (empty($id)) {
            return $this->redirect($this->referer());
        }

        $originList = $this->Todolists->get($id);

        if ($this->request->is(['post', 'put'])) {
            $newList = $this->Todolists->newEmptyEntity();
            $listToCopy = $this->Todolists->get($id, ['contain' => ['items']]);

            if (!empty($listToCopy)) {
                // Set new list data
                $newList->user_id = $this->request->getAttribute('identity')->id;
                $newList->title = $listToCopy->title;
                $newList->visibility = $listToCopy->visibility;

                /*$ext = explode('.', $listToCopy->picture)[1]; // Get file extension

                $path = WWW_ROOT . '/img/data/';
                $newName = 'pict-' . time() . '-' . rand(0, 9999999) . '.' . $ext;
                if (copy($path . $listToCopy->picture, $path . $newName)) {
                    $newList->picture = $newName;
                }*/

                if ($this->Todolists->save($newList)) {
                    $this->loadModel('Items');

                    foreach ($listToCopy->items as $item) {
                        $newItem = $this->Items->newEmptyEntity();

                        $newItem->todolist_id = $newList->id;
                        $newItem->content = $item->content;
                        $newItem->deadline = $item->deadline;
                        $newItem->status = false;

                        $this->Items->save($newItem);
                    }

                    $this->loadModel('Copies');
                    $copy = $this->Copies->newEmptyEntity();

                    $copy->origin_id = $listToCopy->id;
                    $copy->newlist_id = $newList->id;

                    $this->Copies->save($copy);

                    return $this->redirect(['action' => 'show', $newList->id]);
                } else {
                    $this->Flash->success('La liste a bien été créée.');
                }
            }
        }

        
        $this->set(compact('originList'));
    }


} 