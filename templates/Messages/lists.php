
	<!-- CE QUE J'AI AJOUTER ET QU'IL FAUDRAIT RETIRER SI BUG -->

<?php 

echo $this->Form->create();
    echo '<h1> Développement en cours</h1>';
    
    //echo $this->Form->control('title', ['label' =>'Titre de la publication']);
    echo $this->Form->control('content', ['label' => 'Ecrire un message']);
    //echo $this->Form->control('author', ['label' => 'Nom de l\'auteur']);

    echo $this->Form->button('Ajouter');
echo $this->Form->end(); ?>

<style type="text/css">

html,body {
  padding: 0;
  margin:0;
  background-image: linear-gradient(135deg, rgba(155, 89, 182,0.8) 0%,rgba(211, 84, 0,0.8) 100%), url("http://www.hdbackgroundpoint.com/wp-content/uploads/2014/05/24/453.jpeg");
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

h1{
    text-align:center;
    font-size:35px;
}
button {
   
    background-color:#ed6f70;
    border: solid 2px #ffa1a2;
    font-family: "Poppins";
    font-weight: 20;
}

</style>


