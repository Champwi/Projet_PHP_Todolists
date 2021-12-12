<?php 
//créer un formulaire 

echo $this->Form->create($item);
    echo '<h2> Modifier un item</h2>';
    echo $this->Form->control('content', ['label' => 'Contenu']);

// ligne ajoutée
    echo $this->Form->control('deadline', ['value' => 'deadline', 'label' => 'Date de fin (Changez la date en cliquant sur l\'icon calendrier.)']);
    echo $this->Form->control('status', array(
       'label'=>'Cocher la liste' ,'type' => 'checkbox')); 
    echo $this->Form->button('Modifier');
echo $this->Form->end(); ?>

<p><?= $this->Html->link('Retour à la liste', ['controller' => 'Todolists', 'action' => 'show', $item->todolist_id]) ?></p>

<style type="text/css">
html,body {
    color:white;
  padding: 0;
  margin:0;
  background-image:url("https://www.zupimages.net/up/21/16/3ps8.jpg");
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
  background-size: cover;
}

label {
    font-weight: 20;
    color:white;
}
input#content , input#deadline, h2{
    color:white;
}

button, button, input[type='button'], input[type='reset'], input[type='submit']{
    background-color:#ed6f70;
    border: solid 2px #ffa1a2;
    border-radius:0px;
    font-family:"Poppins";
    font-weight: 20;
}

a {
    color:white;
}

h1{
    text-align:center;
    font-size:35px;
}


</style>
