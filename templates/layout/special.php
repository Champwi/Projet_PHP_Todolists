<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['special']) ?>

</head>
<body>
	<header>
	
		<nav>
		<?= $this->Html->link('Se connecter', ['controller'=>'Users', 'action' => 'login'], ['class' => ($this->templatePath == 'Users' && $this->template == 'login') ? 'active' : '' ]) ?>
		</nav>
	</header>


	<section>
		
		<?= $this->Flash->render() ?>
		<?= $this->fetch('content') ?>
	</section>
</body>
</html>

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
nav a {
    color:white;
    font-weight:1;
}

 nav {
	 padding-top:150px;
	 padding-bottom:30px;
	 text-align:center;
 }
</style>