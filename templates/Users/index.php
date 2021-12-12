<h1>Les utilisateurs</h1>

<ul>
	<?php foreach ($users as $u): ?>
    <li><?= $this->Html->link($u->username, ['controller' => 'Users', 'action' => 'show', $u->id]) ?>
    <p><?= $this->Html->link('Envoyer un message', ['controller' => 'Messages', 'action' => 'new', $u->id]) ?></p>
</li> 

		<!--<?= $u->username ?>-->


	<?php endforeach ?>
</ul>

<style type="text/css">
html,body {
  padding: 0;
  margin:0;
  background-image:url("https://www.zupimages.net/up/21/16/5bmg.jpg");
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
  background-size: cover;
}
h1 {
  color:white;
}
li {
  float:left;
  margin-right:10px;
	color:white;
	padding:10px;
	border: solid 1px white;
  width:250px;
  background-color: black;
  opacity: 0.5;
}
a{
  color:white;
}

p { font-size:13px;
    background:#ed6f70;
    border: solid 1px #dd5e5f;
    width:130px;
}
</style>