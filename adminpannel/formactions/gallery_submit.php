<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include_once '../includes/dbcon.php';

    $filename = $_FILES['gallery_image']['name'];
    $tmp_name = $_FILES['gallery_image']['tmp_name'];
     $path = "uploads/gallery/" . $filename;
    move_uploaded_file($tmp_name, $path);
    $sql = "INSERT INTO gallery (name, image, status) VALUES (:name, :file, :status)";
    $result = $conn->prepare($sql);

    $result->bindParam(':name', $name, PDO::PARAM_STR);
    $result->bindParam(':file', $slider_file, PDO::PARAM_STR);
    $result->bindParam(':status', $status, PDO::PARAM_STR);

    $name = $_POST['name'];
    $status = $_POST['status'];
    $slider_file = $filename;


    $result->execute();

    if ($result->rowCount() > 0) {
        echo "<script>alert('Gallery Image Uploaded Successfully!'); location.href='../gallery_upload.php'; </script>";
    } else {
        echo "<script>alert('Oops! Something Wrong'); location.href='../gallery_upload.php'; </script>";
    }

    $conn = null;

}
?>