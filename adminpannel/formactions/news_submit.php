<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include_once '../includes/dbcon.php';

    $filename = $_FILES['news_file']['name'];
    $tmp_name = $_FILES['news_file']['tmp_name'];
    $path = "uploads/news/" . $filename;
    move_uploaded_file($tmp_name, $path);


    $sql = "INSERT INTO notices (name, decription, file, status) VALUES (:name, :decription, :file, :status)";
    $result = $conn->prepare($sql);

    $result->bindParam(':name', $notice_name, PDO::PARAM_STR);
    $result->bindParam(':decription', $desc, PDO::PARAM_STR);
    $result->bindParam(':file', $news_file, PDO::PARAM_STR);
    $result->bindParam(':status', $status, PDO::PARAM_STR);
    $notice_name= $_POST['notice_name'];
    $desc = $_POST['desc'];
    $status = $_POST['status'];
    $news_file = $filename;
    $result->execute();

    if ($result->rowCount() > 0) {
        echo "<script>alert('News/Notices Added Successfully!'); location.href='../notices.php'; </script>";
    } else {
        echo "<script>alert('Oops! Something Wrong'); location.href='../notices.php'; </script>";
    }

    $conn = null;

}
?>
                      