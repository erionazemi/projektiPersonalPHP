<?php

include_once("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM regjistrimi i pacientave WHERE id=:id";

$getPacientat = $conn->prepare($sql);

$getPacientat->bindParam(":id", $id);

$getPacientat->execute();

header("Location:dashboard.php");

?>