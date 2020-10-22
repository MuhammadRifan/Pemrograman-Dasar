<?php

    $data = [
        'nama' => "MUHAMMAD RIF'AN",
        'desc' => "A boy from a small family yet has a big dream. Even though I'm a lazy person, I always do something with full effort. I study computer science to learn how to make a game but after 3 years or something, I still didn't know to make a game. Poor me... but in those years I'm learning the other things like how to make websites and mobile apps. Learning how to code in java, js, PHP, Delphi, and C++.",
        'gmail' => "muhammadrifan153@gmail.com",
        'github' => "MuhammadRifan",
        'telegram' => "Rifaann",
        'facegram' => "mrifandz",
        'twitter' => "futuredeadsoul"
    ];

    $connect = new PDO("mysql:host=localhost;dbname=cv", "root", "");

    function select($db) {
        global $connect;
        
        $result = $connect -> prepare("SELECT * FROM $db");
        $result -> execute();

        return $result;
    }
?>
