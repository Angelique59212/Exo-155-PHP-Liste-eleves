<?php

$students = $_GET['name'];
foreach ($students as $student) {
    echo $student['name'] . $student['firstName'];
}