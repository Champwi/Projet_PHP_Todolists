
<h1>Créer un compte</h1>

<?= $this->Form->create($new) ?>
	
	<?= $this->Form->control('username', ['label' => 'Votre pseudo']) ?>
	<?= $this->Form->control('password', ['type' => 'password', 'label' => 'Votre mot de passe']) ?> 
	<?= $this->Form->button('Créer un compte') ?>


<?= $this->Form->end() ?>





<style type="text/css">

html,body {
  padding: 0;
  margin:0;
  background-image: url("https://www.zupimages.net/up/21/16/ddzo.jpg") !important;
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
  background-size: cover;
}


@use postcss-preset-env {
  stage: 0;
}

/* ---------- GENERAL ---------- */
* {
  box-sizing: inherit;
}

html {
  box-sizing: border-box;
}
form button{
    background-color:#ed6f70;
    border: solid 2px #ffa1a2;
    border-radius:0px;
    font-family:"Poppins";
    font-weight: 20;
	color:white;
	padding: 6px 13px 6px 13px;
}

body {
  background-color: #c0c0c0;
  font-family: 'Varela Round', sans-serif;
  line-height: 1.5;
  margin: 0;
  min-block-size: 100vh;
  padding: 5vmin;
}

label{
	color:white;
}
h1 {
  font-size: 1.75rem;
  color:white;
  text-align:center;
}

input {
  background-image: none;
  border: none;
  font: inherit;
  margin: 0;
  padding: 0;
  transition: all 0.3s;
}


/* ---------- BUTTON ---------- */

.button, button, input[type='button'], input[type='reset'], input[type='submit']{
	margin-top:30px;
    background-color:#ed6f70;
    border: solid 2px #ffa1a2;
    border-radius:0px;
    font-family:"Poppins";
    font-weight: 20;
}




</style>