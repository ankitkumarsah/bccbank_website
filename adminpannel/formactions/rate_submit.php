<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../includes/dbcon.php';
    $sql = "INSERT INTO rateofintrest (days, less1cr, above1cr,senior_less1cr,senior_above1cr, status) VALUES (:days, :less1cr, :above1cr,:seniorless1cr, :seniorabove1cr,:status)";
    $result = $conn->prepare($sql);

    $result->bindParam(':days', $days, PDO::PARAM_STR);
    $result->bindParam(':less1cr', $less1cr, PDO::PARAM_STR);
    $result->bindParam(':above1cr', $above1cr, PDO::PARAM_STR);
   
  $result->bindParam(':seniorless1cr', $senior_less1cr, PDO::PARAM_STR);
    $result->bindParam(':seniorabove1cr', $senior_above1cr, PDO::PARAM_STR);
 $result->bindParam(':status', $status, PDO::PARAM_STR);
 
    $days= $_POST['days'];
    $less1cr = $_POST['less1cr'];
    $above1cr = $_POST['above1cr'];
      $senior_less1cr = $_POST['senior_less1cr'];
        $senior_above1cr = $_POST['senior_above1cr'];
    $status = $_POST['status'];


    $result->execute();

    if ($result->rowCount() > 0) {
        echo "<script>alert('Content Added Successfully!'); location.href='../rate_of_intrest.php'; </script>";
    } else {
        echo "<script>alert('Oops! Something Wrong'); location.href='../rate_of_intrest.php'; </script>";
    }

    $conn = null;

}
?>
                      