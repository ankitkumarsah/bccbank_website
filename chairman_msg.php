<?php require_once 'header.php';

$sql = "SELECT * FROM `notices` ORDER BY `id` DESC";
$result = $conn->prepare($sql);
$result->execute();

?>


<?php include_once('footer.php'); ?>