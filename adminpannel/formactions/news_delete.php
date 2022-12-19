<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    include_once '../includes/dbcon.php';

    $sql = "SELECT * FROM notices WHERE id= :newsid";
    $res = $conn->prepare($sql);
    $res->bindParam(':newsid', $id1, PDO::PARAM_STR);
    $id1 = $_GET['id'];
    $res->execute();

    $row = $res->fetch(PDO::FETCH_ASSOC);
    $filename = $row['file'];
    $path = 'uploads/news/';
    $finalpath = $path . $filename;
    if (file_exists($finalpath)) {
        unlink($finalpath);
    } else {
        echo "<script>alert('Oops! Something Wrong'); location.href='../notices.php'; </script>";
    }

    $sql = "DELETE FROM notices WHERE id= :id";
    $result = $conn->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_STR);
    $id = $_GET['id'];
    $result->execute();
    if ($result->rowCount()) {
        echo "<script>alert('News/Notices Delete Successfully!'); location.href='../notices.php'; </script>";
    } else {
        echo "<script>alert('Oops! Something Wrong'); location.href='../notices.php'; </script>";
    }
    $conn = null;
}
