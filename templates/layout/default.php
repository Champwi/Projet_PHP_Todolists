<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'summernote-lite.min', 'cake']) ?>
    <?= $this->Html->script(['jquery-3.4.1.slim.min', 'summernote-lite.min']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <script>
    $(function(){
        $('textarea').summernote({
            toolbar : [
                ['style', ['style','bold', 'italic', 'underline', 'clear']],
                ['font', ['fontname', 'fontsize', 'color']]
            ]
        });
    })

    </script>
</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title">
        </div>
        <div class="top-nav-links">

            <?php if($this->request->getAttribute('identity') == null) : ?>
                <?= $this->Html->link('Accueil', ['controller'=>'Todolists', 'action' => 'home'], ['class' => ($this->templatePath == 'Todolists' && $this->template == 'home') ? 'active' : '' ]) ?>
                <?= $this->Html->link('Liste des statistiques', ['controller'=>'Todolists', 'action' => 'stats'], ['class' => ($this->templatePath == 'Todolists' && $this->template == 'stats') ? 'active' : '' ]) ?>
                <?= $this->Html->link('Créer un compte', ['controller'=>'Users', 'action' => 'new'], ['class' => ($this->templatePath == 'Users' && $this->template == 'new') ? 'active' : '' ]) ?>
                <?= $this->Html->link('Se connecter', ['controller'=>'Users', 'action' => 'login'], ['class' => ($this->templatePath == 'Users' && $this->template == 'login') ? 'active' : '' ]) ?>
            <?php else : ?>
                <?= $this->Html->link('Liste des statistiques', ['controller'=>'Todolists', 'action' => 'stats'], ['class' => ($this->templatePath == 'Todolists' && $this->template == 'stats') ? 'active' : '' ]) ?>
                <?= $this->Html->link('Envoyer un message à un utilisateur', ['controller'=>'Users', 'action' => 'index'], ['class' => ($this->templatePath == 'Users' && $this->template == 'index') ? 'active' : '' ]) ?>
                <?= $this->Html->link('Ajouter une Todolist', ['controller'=>'Todolists', 'action' => 'new']) ?>
                <?= $this->Html->link('Sommaire des Todolists', ['controller'=>'Todolists', 'action' => 'index']) ?>
                <?= $this->Html->link('Messagerie', ['controller'=>'Messages', 'action' => 'index']) ?>
                <?= $this->Html->link('Se déconnecter', ['controller'=>'Users', 'action' => 'logout']) ?>


                <span><?= $this->request->getAttribute('identity')->name ?></span>
            <?php endif; ?>

        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>

<style type="text/css">
.top-nav-links a {
    color:white;
    font-weight: 1;
    
}
</style>