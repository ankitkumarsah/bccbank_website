<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    include_once '../includes/dbcon.php';

    $sql = "SELECT * FROM slider WHERE slider_id= :sliderid";
    $res = $conn->prepare($sql);
    $res->bindParam(':sliderid', $id1, PDO::PARAM_STR);
    $id1 = $_GET['id'];
    $res->execute();

    $row = $res->fetch(PDO::FETCH_ASSOC);
    $imagename = $row['image'];
    $path = 'uploads/sliders/';
    $finalpath = $path . $imagename;
    if (file_exists($finalpath)) {
        unlink($finalpath);
    } else {
        echo "<script>alert('Oops! Something Wrong'); location.href='../sliders.php'; </script>";
    }

    $sql = "DELETE FROM slider WHERE slider_id= :id";
    $result = $conn->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_STR);
    $id = $_GET['id'];
    $result->execute();
    if ($result->rowCount()) {
        echo "<script>alert('Slider Delete Successfully!'); location.href='../sliders.php'; </script>";
    } else {
        echo "<script>alert('Oops! Something Wrong'); location.href='../sliders.php'; </script>";
    }
    $conn = null;
}
