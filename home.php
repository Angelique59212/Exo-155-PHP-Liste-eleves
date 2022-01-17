<?php
include "array.php";
?>
//foreach ($students as $student) {
//    echo $student['name']." ". $student['firstName'] . "<br>";
//}
<ul><?php
        foreach($students as $key => $student){?>
            <li><a href="students.php?id=<?=$key?>"><?=$student[0]?><?=$student[1]?></a></li>
            <?php
        }?>
</ul>




