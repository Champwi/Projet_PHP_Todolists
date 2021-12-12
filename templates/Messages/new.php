<?php 
//créer un formulaire 

echo $this->Form->create($new);
    echo '<h2>Envoyer un message</h2>';
    echo $this->Form->control('subject', ['label' => 'Titre']);
    echo $this->Form->control('content', ['label' => 'Contenu']);
    echo $this->Form->button('Envoyer');
echo $this->Form->end(); ?>

<style type="text/css">

html,body {
  padding: 0;
  margin:0;
  background-image: url("https://www.zupimages.net/up/21/16/aoh2.jpg");
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
  background-size: cover;
}

div.note-editable {
    background-color:black;
    color:white;
    height: 300px;
    opacity:0.5;
}
label {
    font-weight: 20;
    color:white;
}

a {
    color:white;
}

h1{
    text-align:center;
    font-size:35px;
}

h2{
    color:white;
}
button {
   
    background-color:#ed6f70;
    border: solid 2px #ffa1a2;
    font-family: "Poppins";
    font-weight: 20;
}

</style>


