

<?php 
//créer un formulaire 
echo '<h1>'.$venti->title.'</h1>';

echo $this->Form->create($items, ['url' => ['controller' => 'items','action' =>'new']]);
    echo '<h2> Créer un nouveau item</h2>';
    echo $this->Form->control('content', ['label' => 'Contenu']);

// ligne ajoutée
    echo $this->Form->control('deadline', ['value' => 'deadline', 'label' => 'Date de fin (Changez la date en cliquant sur l\'icon calendrier.)']);
    echo $this->Form->hidden('todolist_id', ['value' => $venti->id ]); 
    echo $this->Form->button('Ajouter');
echo $this->Form->end(); ?>


    <table>
  <caption>To Do List</caption>
  <thead>
    <tr>
      <th scope="col">Action</th>
      <th scope="col">Date</th>
      <th scope="col">Check</th>
      <th scope="col">Modifier une tâche</th>
      <th scope="col">Supprimer une tâche</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-label="Action"><?php foreach ($venti->items as $i): ?><p><?= $i->content ?></p><?php endforeach ?></td>
      <td data-label="Date"><?php foreach ($v->items as $a): ?><p><?= $a->deadline ?></p><?php endforeach ?></td>
      <td data-label="Check" class="e"> <?php foreach ($v->items as $a): ?><p><?= $a->status ? "<img src='https://zupimages.net/up/21/16/2qai.png'/>" : "<img src='https://zupimages.net/up/21/16/tn7y.png'/>" ?></p><?php endforeach ?></td>
      <td data-label="Modifier" class="e"> <?php foreach ($v->items as $a): ?><p><?= $this->Html->link("Modifier le contenu", ['controller' => 'Items', 'action' => 'show', $a->id]) ?></p><?php endforeach ?></td>

      <td data-label="Supprimer" class="e"> <?php foreach ($v->items as $a): ?>
       
       <!-- code de la prof-->
       <p><?= $this->Form->postLink('Supprimer', ['controller' => 'Items', 'action' => 'delete', $a->id], ['confirm' => 'Etes-vous sûr de vouloir supprimer cet item ?']) ?><p>
     
      <?php endforeach ?></td>
    </tr>
  </tbody>
</table>

<style type="text/css">
html,body {
  padding: 0;
  margin:0;
  background-image: url("https://www.zupimages.net/up/21/16/45vh.jpg");
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
  background-size: cover;
}

label {
    font-weight: 20;
    background:black;
    font-size:15px;
    padding-top:10px;
    padding-left:5px;
    padding-bottom:10px;
    color:white;
    opacity:0.5;

}

h1 {
  color:white;
}
a {
    color:white;
}
h1 {
    border:1px solid white;
    text-align:center;
    font-size:30px;
    padding-top:20px;
    padding-bottom:20px;
}

h2 {
  color:white;
    font-size:24px;
}

input#deadline{
    width:176px;
    color:white;
}
.button, button, input[type='button'], input[type='reset'], input[type='submit']{
    background-color:#ed6f70;
    border: solid 2px #ffa1a2;
    border-radius:0px;
    font-family:"Poppins";
    font-weight: 20;
}
p{
    margin-bottom:35px;
    margin-top:25px;
}

caption{
  color:white;
}

input {
    margin-bottom:38px;
    margin-top:10px;
}
table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: black;
  border: 1px solid #ddd;
  padding: .35em;
  opacity:0.5;
  color:white;
}

table th,
table td {
  padding: 30px;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}
</style>





   











