<section>
<h1>Sommaire des Todolists créés</h1>
    <?php foreach ($todolists as $venti): ?>
        <article>
            <div class="publique"><?= $this->Html->link($venti->title, ['controller' => 'Todolists', 'action' => 'show', $venti->id]) ?> 
            <p><?= $this->Html->image('/img/data/'.$venti->picture) ?></p></div>

        </article>
   <?php endforeach ?> 
</section>

<style type="text/css">
html,body {
  padding: 0;
  margin:0;
  background-image:url("https://www.zupimages.net/up/21/16/mytk.jpg");
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
  background-size: cover;
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