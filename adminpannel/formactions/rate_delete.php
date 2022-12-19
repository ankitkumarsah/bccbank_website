<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    include_once '../includes/dbcon.php';
    $sql = "DELETE FROM rateofintrest WHERE id= :id";
    $result = $conn->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_STR);
    $id = $_GET['id'];
    $result->execute();
    if ($result->rowCount()) {
        echo "<script>alert('Content Delete Successfully!'); location.href='../rate_of_intrest.php'; </script>";
    } else {
        echo "<script>alert('Oops! Something Wrong'); location.href='../rate_of_intrest.php'; </script>";
    }
    $conn = null;
}
