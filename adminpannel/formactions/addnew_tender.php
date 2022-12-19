<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include_once '../includes/dbcon.php';

    $filename = $_FILES['tender_file']['name'];
    $tmp_name = $_FILES['tender_file']['tmp_name'];
    $path = "uploads/tenders/" . $filename;
    move_uploaded_file($tmp_name, $path);


    $sql = "INSERT INTO tenders (name, file, starting_date, end_date, status) VALUES (:name, :file, :starting_date, :end_date, :status)";
    $result = $conn->prepare($sql);

    $result->bindParam(':name', $tender_name, PDO::PARAM_STR);
    $result->bindParam(':file', $tender_file, PDO::PARAM_STR);
    $result->bindParam(':starting_date', $starting_date, PDO::PARAM_STR);
    $result->bindParam(':end_date', $end_date, PDO::PARAM_STR);
    $result->bindParam(':status', $status, PDO::PARAM_STR);

    $tender_name = $_POST['tender_name'];
    $starting_date = $_POST['starting_date'];
    $end_date = $_POST['end_date'];
    $status = $_POST['status'];
    $tender_file = $filename;


    $result->execute();

    if ($result->rowCount() > 0) {
        echo "<script>alert('Tender Added Successfully!'); location.href='../tenders.php'; </script>";
    } else {
        echo "<script>alert('Oops! Something Wrong'); location.href='../tenders.php'; </script>";
    }

    $conn = null;

}
?>
                      