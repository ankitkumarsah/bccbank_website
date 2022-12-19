<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include_once '../includes/dbcon.php';

    $filename = $_FILES['d_file']['name'];
    $tmp_name = $_FILES['d_file']['tmp_name'];
    $path = "uploads/download1/" . $filename;
    move_uploaded_file($tmp_name, $path);
    $sql = "INSERT INTO downloads (name, file, status) VALUES (:name, :file, :status)";
    $result = $conn->prepare($sql);

    $result->bindParam(':name', $name, PDO::PARAM_STR);
    $result->bindParam(':file', $slider_file, PDO::PARAM_STR);
    $result->bindParam(':status', $status, PDO::PARAM_STR);

    $name = $_POST['download_name'];
    $status = $_POST['status'];
    $slider_file = $filename;


    $result->execute();

    if ($result->rowCount() > 0) {
        echo "<script>alert('Downloads Added Successfully!'); location.href='../downloads.php'; </script>";
    } else {
        echo "<script>alert('Oops! Something Wrong'); location.href='../downloads.php'; </script>";
    }

    $conn = null;

}
?>