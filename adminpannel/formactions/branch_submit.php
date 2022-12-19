<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../includes/dbcon.php';
    $sql = "INSERT INTO branch (branchname, managername, email, mobile, othercontact, status) VALUES (:branchname, :managername, :email, :mobile, :othercontact, :status)";
    $result = $conn->prepare($sql);

    $result->bindParam(':branchname', $branchname, PDO::PARAM_STR);
    $result->bindParam(':managername', $managername, PDO::PARAM_STR);
    $result->bindParam(':email', $email, PDO::PARAM_STR);
    $result->bindParam(':mobile', $mobile, PDO::PARAM_STR);
    $result->bindParam(':othercontact', $othercontact, PDO::PARAM_STR);
    $result->bindParam(':status', $status, PDO::PARAM_STR);

    $branchname= $_POST['branch_name'];
    $managername = $_POST['branch_manager_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $othercontact = $_POST['other_contact'];
    $status = $_POST['status'];

    $result->execute();

    if ($result->rowCount() > 0) {
        echo "<script>alert('Branch Added Successfully!'); location.href='../branches.php'; </script>";
    } else {
        echo "<script>alert('Oops! Something Wrong'); location.href='../branches.php'; </script>";
    }

    $conn = null;

}
?>
                      