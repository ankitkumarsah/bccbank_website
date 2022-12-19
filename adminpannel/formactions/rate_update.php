<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../includes/dbcon.php';
    $sql = "UPDATE rateofintrest SET days=:days, less1cr:less1cr, above1cr:above1cr, status:status WHERE id=:id";
    $result = $conn->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_INT);
    $result->bindParam(':days', $days, PDO::PARAM_STR);
    $result->bindParam(':less1cr', $less1cr, PDO::PARAM_STR);
    $result->bindParam(':above1cr', $above1cr, PDO::PARAM_STR);
    $result->bindParam(':status', $status, PDO::PARAM_STR);
    
    $id= $_POST['id'];
    $days= $_POST['days'];
    $less1cr = $_POST['less1cr'];
    $above1cr = $_POST['above1cr'];
    $status = $_POST['status'];

    $result->execute();

    if ($result->rowCount() > 0) {
        echo "<script>alert('Content Updated Successfully!'); location.href='../rate_of_intrest.php'; </script>";
    } else {
        echo "<script>alert('Oops! Something Wrong'); location.href='../rate_of_intrest.php'; </script>";
    }

    $conn = null;

}
?>
                      