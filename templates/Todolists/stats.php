<h1>Top 5 des utilisateurs ayant créés le plus de Todolists</h1><br>
<?php foreach ($xiao as $klee): ?>
<div class="u"><div class="klee"><?= $klee->user->username ?></div>
<div class="kaeya"><?= $klee->totalTodolists ?></div></div>
<?php endforeach ?>
<br>
<h1>Top 5 des utilisateurs ayant le plus d'items cochés</h1><br>
<?php foreach ($diluc as $kaeya): ?>
<div class="u"><div class="klee"><?= $kaeya->user->username ?></div>
<div class="kaeya"><?= $kaeya->totalstatus ?></div></div>
<?php endforeach ?>
<br>
<h1>Les listes les plus copiées</h1><br>
<?php foreach ($aether as $lumine): ?>
<div class="u"><div class="klee"><?= $lumine->title ?></div>
<div class="kaeya"><?= $lumine->totalCopies ?></div></div>
<?php endforeach ?>

<style type="text/css">
html,body {
  padding: 0;
  margin:0;
  background-image: url("https://www.zupimages.net/up/21/16/k7ed.jpg");
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
  background-size: cover;
  color:white;
}

.u {
    display:flex;
    background-color:black;
    opacity: 0.5;
    color:white;
    text-align:center;
    font-size:14px;
    padding-top:20px;
    padding-bottom:20px;
    width:700px;
    margin:auto;
    padding:auto;
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

a {
    color:white;
}
h1 {
    color:white;
    border:1px solid white;
    text-align:center;
    font-size:30px;
    padding-top:20px;
    padding-bottom:20px;
    width:700px;
    margin:auto;
    padding:auto;
    background-color:black;
    opacity:0.6;
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
.kaeya, .klee {
    text-align:center;
    margin:auto;
    padding:auto;
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

