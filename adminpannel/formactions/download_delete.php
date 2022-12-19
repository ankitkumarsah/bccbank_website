<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    include_once '../includes/dbcon.php';

    $sql = "SELECT * FROM downloads WHERE id= :downloadid";
    $res = $conn->prepare($sql);
    $res->bindParam(':downloadid', $id1, PDO::PARAM_STR);
    $id1 = $_GET['id'];
    $res->execute();

    $row = $res->fetch(PDO::FETCH_ASSOC);
    $filename = $row['file'];
    $path = 'uploads/download1/';
    $finalpath = $path . $filename;
    if (file_exists($finalpath)) {
        unlink($finalpath);
    } else {
        echo "<script>alert('Oops! Something Wrong'); location.href='../downloads.php'; </script>";
    }

    $sql = "DELETE FROM downloads WHERE id= :id";
    $result = $conn->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_STR);
    $id = $_GET['id'];
    $result->execute();
    if ($result->rowCount()) {
        echo "<script>alert('Downloads Delete Successfully!'); location.href='../downloads.php'; </script>";
    } else {
        echo "<script>alert('Oops! Something Wrong'); location.href='../downloads.php'; </script>";
    }
    $conn = null;
}
