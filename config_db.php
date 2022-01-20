<?php
    //$servername = "localhost:3306";
    $username = "lucascre_talucas";
    $password = "Jesus2021";
    $dbname = "lucascre_projecttrack";

    $db = new PDO('mysql:host=localhost:3306;dbname=' . $dbname . ';charset=utf8', $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
