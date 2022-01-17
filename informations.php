<?php
include 'array.php';
?>

<h1>Plus d'infos</h1><?php
$key = $_GET['id'];
?>
<p>Nom: <?=$students[$key]['name']." ". $students[$key]['firstName']?></p>
<p>Age: <?=$students[$key]['age']?>ans</p>
<p>Ville: <?=$students[$key]['city']?></p>
<p>Hobbys:</p><?php
    foreach ($students[$key]['hobbys'] as $value) {?>
        <span><?=$value?></span><?php
    }?>
<div>
    <a href="/?p=students">Revenir à la liste</a>
</div>






