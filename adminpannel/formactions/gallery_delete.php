<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    include_once '../includes/dbcon.php';

    $sql = "SELECT * FROM gallery WHERE id= :id";
    $res = $conn->prepare($sql);
    $res->bindParam(':id', $id1, PDO::PARAM_STR);
    $id1 = $_GET['id'];
    $res->execute();

    $row = $res->fetch(PDO::FETCH_ASSOC);
    $filename = $row['image'];
    $path = 'uploads/gallery/';
    $finalpath = $path . $filename;
    if (file_exists($finalpath)) {
        unlink($finalpath);
    } else {
        echo "<script>alert('Oops! Something Wrong!'); location.href='../gallery_upload.php'; </script>";
    }

    $sql = "DELETE FROM gallery WHERE id= :id";
    $result = $conn->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_STR);
    $id = $_GET['id'];
    $result->execute();
    if ($result->rowCount()) {
        echo "<script>alert('Image Delete Successfully!'); location.href='../gallery_upload.php'; </script>";
    } else {
        echo "<script>alert('Oops! Something Wrong'); location.href='../gallery_upload.php'; </script>";
    }
    $conn = null;
}
