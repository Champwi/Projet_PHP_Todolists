<?php 

namespace App\Controller;

class MessagesController extends AppController{

    //receiver_id 
        public function new($id){
        
        $new = $this->Messages->newEmptyEntity();
        
        //Si on est en post
        if($this->request->is('post')){
        //on crée une entity de comm vide pour récupérer les données du formulaire
//Id du destinataire
            $new = $this->Messages->patchEntity($new, $this->request->getData());
            $new->sender_id = $this->Authentication->getIdentity()->get('id');
            $new->receiver_id = $id;

        //on essaie de le sauvegarder
        if($this->Messages->save($new))
            //si ça marche, renvoie vers une confirmation
            $this->Flash->success('Commentaire enregistré');
            //sinon
            else
                //erreur
                $this->Flash->error('Sauvegarde du commentaire impossible');
    }

    $this->set(compact('new')); 
}

    public function index(){
        $messages = $this->Messages->find('all')->contain(['Users']);
        $messages = $messages->where(['receiver_id =' => $this->Authentication->getIdentity()->get('id')]);
        $this->set(compact('messages'));

    }

    
}