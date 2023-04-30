<?php

    if (!isset($_SERVER['HTTP_REFERER'])) {
        header("Location: http://localhost/foodOrdering/index.php");
        exit();
    }

    try {
        define("HOST", 'localhost');
        define("DBNAME", 'freshcery');
        define("USER", 'root');
        define("PASS", ''); // 

        $conn = new PDO("mysql:dbname=".DBNAME.";host=".HOST.";", USER, PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (Exception $exception) {
        echo $exception->getMessage();
    }
