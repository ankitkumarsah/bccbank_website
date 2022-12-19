<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    include_once '../includes/dbcon.php';

  

    $sql = "DELETE FROM branch WHERE id= :id";
    $result = $conn->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_STR);
    $id = $_GET['id'];
    $result->execute();
    if ($result->rowCount()) {
        echo "<script>alert('Branch Delete Successfully!'); location.href='../branches.php'; </script>";
    } else {
        echo "<script>alert('Oops! Something Wrong'); location.href='../branches.php'; </script>";
    }
    $conn = null;
}
