<?php
include "student2.php";
$id=$_GET["id"];
mysqli_query($link, "delete from students where ID=$id");

header('Location: student.php');
?>