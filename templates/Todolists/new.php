
	<?php 

echo $this->Form->create($new, ['enctype' => 'multipart/form-data']) ;

    echo '<h1> Créer une nouvelle todolist</h1>';
    
    //echo $this->Form->control('title', ['label' =>'Titre de la publication']);
    echo $this->Form->control('title', ['label' => 'Contenu']); 
    echo $this->Form->control('visibility', array(
        'type' => 'checkbox', 
        'label' => __('Afficher la todolist en public', true)));

    //echo $this->Form->control('author', ['label' => 'Nom de l\'auteur']); 

    echo $this->Form->control('picture',['label'=>'Ajouter une photo','type'=>'file']);

    echo $this->Form->submit('Ajouter');
    echo $this->Form->end(); ?>







<style type="text/css">
html,body {
  padding: 0;
  margin:0;
  background-image: url("https://www.zupimages.net/up/21/16/nq7f.jpg");
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
  background-size: cover;
}


label {
    font-weight: 20;
    color:white;

}

a {
    color:white;
}
input{
    color:white;
}
h1{
    color:white;
    text-align:center;
    font-size:35px;
}
.button, button, input[type='button'], input[type='reset'], input[type='submit']{
    background-color:#ed6f70;
    border: solid 2px #ffa1a2;
    border-radius:0px;
    font-family:"Poppins";
    font-weight: 20;
}

</style>

