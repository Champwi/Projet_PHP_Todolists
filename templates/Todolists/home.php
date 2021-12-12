<section>
<h1>Accueil des listes publiques</h1>
    <?php foreach ($todolists as $venti): ?>
        <article>

        <!--$venti est appelé dans TodolistsController--> 
            <div class="publique"><?= $this->Html->link($venti->title, ['controller' => 'Todolists', 'action' => 'show', $venti->id]) ?>
            <?= $this->Html->image('/img/data/'.$venti->picture) ?>
            
            <p class="lien"><?= $this->Html->link('Copier la liste', ['controller' => 'Todolists', 'action' => 'copy', $venti->id]) ?></p></div>
            


        </article>

<?php endforeach ?>








<style type="text/css">
html,body {
  padding: 0;
  margin:0;
  background-image:url("https://www.zupimages.net/up/21/16/gzh3.jpg");
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
  background-size: cover;
}

label {
    font-weight: 20;
}

.lien {
    font-size:13px;
    background:#ed6f70;
    border: solid 1px #dd5e5f;
    margin:auto;
    width:120px;
}
a {
    color:white;
}

h1{
    text-align:center;
    font-size:35px;
    color:white;
}
.publique {
    border: 1px solid white;
    width:500px;
    margin:auto;
    padding:auto;
    text-align:center;
    font-size:20px;
    padding-top:20px;
    padding-bottom:20px;
    margin-bottom:15px;
    margin-top:15px;
    background-color:black;
    opacity:0.5;
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;

</style>