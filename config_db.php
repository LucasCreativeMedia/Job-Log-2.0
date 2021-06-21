<?php
    //$servername = "localhost";
    $username = "tlucas44";
    $password = "Jesus2021";
    $dbname = "tl_job_log";

    $db = new PDO('mysql:host=localhost;dbname=' . $dbname . ';charset=utf8', $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
