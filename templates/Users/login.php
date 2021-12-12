

<!-- <?= $this->Form->create() ?>
	
	<?= $this->Form->control('username', ['label' => 'Votre pseudo']) ?>
	<?= $this->Form->control('password', ['type' => 'password', 'label' => 'Votre mot de passe']) ?> 
	<?= $this->Form->button(__('Se connecter')) ?>


<?= $this->Form->end() ?>


 -->




<body class="align">

  <div class="login">

    <header class="login__header">
      <h2><svg class="icon">
          <use xlink:href="#icon-lock" />
        </svg>Se connecter</h2>
    </header>

    <form action="#" class="login__form" method="POST">

      <div>
	  <?= $this->Form->create() ?>
	
	<?= $this->Form->control('username', ['label' => 'Votre pseudo']) ?>
	<?= $this->Form->control('password', ['type' => 'password', 'label' => 'Votre mot de passe']) ?>
	<?= $this->Form->button(__('Se connecter')) ?>


<?= $this->Form->end() ?>


      </div>

    </form>

  </div>

  <svg xmlns="http://www.w3.org/2000/svg" class="icons">

    <symbol id="icon-lock" viewBox="0 0 448 512">
      <path d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z" />
    </symbol>

  </svg>

</body>



<style type="text/css">

html,body {
  padding: 0;
  margin:0;
  background-image: url("https://www.zupimages.net/up/21/16/jv2m.jpg");
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

body {
  background-color: #c0c0c0;
  font-family: 'Varela Round', sans-serif;
  line-height: 1.5;
  margin: 0;
  min-block-size: 100vh;
  padding: 5vmin;
}

main.main {
	margin-top: -150px;
}
h2 {
  font-size: 1.75rem;
  color:white;
}

input {
  background-image: none;
  border: none;
  font: inherit;
  margin: 0;
  padding: 0;
  transition: all 0.3s;
}

svg {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}

/* ---------- ALIGN ---------- */
.align {
  display: grid;
  place-items: center;
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

/* ---------- ICONS ---------- */
.icons {
  display: none;
}

.icon {
  fill: currentcolor;
  display: inline-block;
  height: 1em;
  width: 1em;
}

/* ---------- LOGIN ---------- */
.login {
  width: 400px;
}

.login__header {
  background-color: #ed6f70;
  border-top-left-radius: 1.25em;
  border-top-right-radius: 1.25em;
  color: #fff;
  padding: 1.25em 1.625em;
}

.login__header :first-child {
  margin-top: 0;
}

.login__header :last-child {
  margin-bottom: 0;
}

.login h2 .icon {
  margin-right: 14px;
}

.login__form {
  background-color: #fff;
  border-bottom-left-radius: 1.25em;
  border-bottom-right-radius: 1.25em;
  color: #777;
  display: grid;
  gap: 0.875em;
  padding: 1.25em 1.625em;
}

.login input {
  border-radius: 0.1875em;
}

.login input[type="email"],
.login input[type="password"] {
  background-color: #eee;
  color: #777;
  padding: 0.25em 0.625em;
  width: 100%;
}

.login input[type="submit"] {
  display: block;
  margin: 0 auto;
}

</style>