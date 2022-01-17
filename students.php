<?php
include 'array.php';
?>

<h1>Liste des élèves</h1>
<ul><?php
    foreach($students as $key => $student){?>
        <li><a href="/?p=informations&id=<?=$key?>"><?=$student['name'] . " "?><?=$student['firstName']?></a></li>
        <?php
    }?>
</ul>


