<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include_once '../includes/dbcon.php';

    $filename = $_FILES['slider_file']['name'];
    $tmp_name = $_FILES['slider_file']['tmp_name'];
    $path = "uploads/sliders/" . $filename;
    move_uploaded_file($tmp_name, $path);
    $sql = "INSERT INTO slider (name, image, status) VALUES (:name, :image, :status)";
    $result = $conn->prepare($sql);

    $result->bindParam(':name', $slider_name, PDO::PARAM_STR);
    $result->bindParam(':image', $slider_file, PDO::PARAM_STR);
    $result->bindParam(':status', $status, PDO::PARAM_STR);

    $slider_name = $_POST['slider_name'];
    $status = $_POST['status'];
    $slider_file = $filename;


    $result->execute();

    if ($result->rowCount() > 0) {
        echo "<script>alert('Slider Added Successfully!'); location.href='../sliders.php'; </script>";
    } else {
        echo "<script>alert('Oops! Something Wrong'); location.href='../sliders.php'; </script>";
    }

    $conn = null;

}
?>