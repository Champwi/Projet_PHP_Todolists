
<p><?= $this->Html->link($username->username, ['controller' => 'Users', 'action' => 'show', $username->id]) ?></p>
<!-- UserTable : Todolists-->
<?php foreach ($username->todolists as $j): ?>
<!--<p><?= $j->title ?></p>-->
<p><?= $this->Html->link($j->title, ['controller' => 'Todolists', 'action' => 'show', $j->id]) ?></p> 
<?php endforeach ?> 


    <style type="text/css">
html,body {
  padding: 0;
  margin:0;
  background-image: url("https://zupimages.net/up/21/16/q30c.jpg");
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
  background-size: cover;
}

li {
	color:white;
	padding:10px;
	border: solid 1px white;
}
a{
  color:white;
}
</style>