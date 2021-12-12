<?php 

namespace App\Controller;

class ItemsController extends AppController{
    public function show($id)
    {
        if(empty($id))
        return $this->redirect(['action' => 'index']);
    $item = $this->Items->findById($id);

    if($item->isEmpty()){
        $this->Flash->error('Cette publication n\'existe pas');
        return $this->redirect(['action' =>'index']);
    }
    $item = $item->first();

    //si on est en post
    if($this->request->is(['post', 'put', 'patch'])){
        $this->Items->patchEntity($item, $this->request->getData());

        if($this->Items->save($item)){
            $this->Flash->success('Modifié');
            return $this->redirect(['action' =>'show', $id]);
        }
        $this->Flash->error('Impossible de modifier');
    }

    $this->set(compact('item'));
    }

    public function new(){

        $new = $this->Items->newEmptyEntity();
        
        //Si on est en post
        if($this->request->is('post')){
        //on crée une entity de comm vide pour récupérer les données du formulaire

            $new = $this->Items->patchEntity($new, $this->request->getData());
        //on essaie de le sauvegarder
        if($this->Items->save($new))
            //si ça marche, renvoie vers une confirmation
            $this->Flash->success('Votre Item a été enregistré dans la Todolist.');
            //sinon
            else
                //erreur
                $this->Flash->error('Sauvegarde de l\'Item impossible.');
}//fin du test mode
            //redirige vers la page de publication
            return $this->redirect(['controller' =>'todolists', 'action' => 'show', $new->todolist_id]);
    }

    public function delete($id)
    {
        //code de la prof
        //$delete = $this->Todolists->findById($id)->contain(['items']);
        $track = $this->Items->get($id);

        if ($this->Items->delete($track)) {
            $this->Flash->success('Item supprimé');
        } else {
            $this->Flash->error('Impossible a supprimé l\'item');
        }

        return $this->redirect(['controller' => 'todolists', 'action' => 'show', $track->todolist_id]);

    }


    
}
