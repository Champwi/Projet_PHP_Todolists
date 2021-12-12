	<h1>Les messages reçus sont repertoriés ici. </h1>
  <h3>(Vous pourrez consulter les messages seulement après qu'un utilisateur vous a envoyé un message.)</h3>
  <?php foreach ($messages as $tartaglia): ?>

    <div class="msg"><?= $tartaglia->subject ?>

    <?= $tartaglia->content ?> </div>
    <p>par <?= $tartaglia->user->username ?>, le <?= $tartaglia->created ?></p>

    <?php endforeach ?>




  <style type="text/css">
html,body {
  color:white;
  padding: 0;
  margin:0;
  background-image: url("https://www.zupimages.net/up/21/16/gf8r.jpg");
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
  background-size: cover;
}
pre {
  background-color:black;
}
label {
    font-weight: 20;
}

a {
    color:white;
}

h1{
    text-align:center;
    font-size:35px;
    color:white;
}
h3 {
  font-size:20px;
  color:white;
  text-align:center;
}
.msg {
   
    border: 1px solid white;
    text-align:center;
    font-size:20px;
    padding-top:20px;
    padding-bottom:20px;
    width:500px;
    margin:auto;
    padding:auto;
    background:black;
    opacity:0.4;
}

p {
  margin-top:10px;
  font-size:14px;
  text-align:center;
  margin-bottom:10px;
}
.img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;

</style>