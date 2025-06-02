<?php

include_once('config.php');

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $surname = $_POST['surname'];

        $sql = "insert into regjistrimi i pacientave (name, surname) values (:name, :surname)";
        $sqlQuery = $conn->prepare($sql);

        $sqlQuery->bindParam(":name", $name);
        $sqlQuery->bindParam(":surname", $surname);

        $sqlQuery->execute();

        echo "Data saved sucsesfully";
    }

?>