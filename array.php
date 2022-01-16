<?php
$students = [
   0 => [
        'name' => "Coquelet",
        'firstName' => "Samuel",
        'age' => "31",
        'city' => "Fourmies",
        'hobbys' => [
            "Pokémon",
            "Eat",
            "Movies",
        ]
],

   1 => [
        'name' => "Bataille",
        'firstName' => "Sylvie",
        'age' => "44",
        'city' => "Fourmies",
        'hobbys' => [
            "Netflix",
            "Music",
            "Programming",
        ]
],

    2 => [
        'name' => "Nectoux",
        'firstName' => "Vanessa",
        'age' => "30",
        'city' => "Fourmies",
        'hobbys' => [
            "Netflix",
            "Music",
            "Programming",
        ]
    ]
];

foreach ($students as $student) {
    echo $student['name']. $student['firstName'] . "<br>";
}








