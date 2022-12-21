<?php require_once '../../includes/header.php';
ob_end_flush();

$sql = "SELECT * FROM `messages` WHERE `msgfor`='chairman'";
$result = $conn->prepare($sql);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);

?>

<div class="main-panel">
    <div class="content-wrapper">

        <div class="card">
            <div class="card-body">


                <form class="forms-sample" action="#" method="post">

                    <div class="form-group">
                        <label>Chairman Massage</label>
                        <textarea rows="5" class="form-control" name="message"><?php echo $row['msg']; ?></textarea>
                    </div>

                    <input type="submit" name="submit" class="btn btn-primary btn-block" value="submit" />

                </form>
            </div>
        </div>


    </div>
    <?php 
    if (isset($_POST['submit']))
    {
       
        
        $sql = "UPDATE messages SET msg=:message WHERE msgfor=:msgfor";
        $result = $conn->prepare($sql);
        $result->bindParam(':message', $message, PDO::PARAM_STR);
        $result->bindParam(':msgfor', $msgfor, PDO::PARAM_STR);
       
        
        $msgfor = 'chairman';
        $message = $_POST['message'];
    
        $result->execute();
    
        if ($result->rowCount() > 0) {
            echo("<meta http-equiv='refresh' content='1'>");
            echo "<script>alert('Data Submitted Successfully!');  </script>";
           
         
           
        } else {
            echo "<script>alert('Oops! Something Wrong'); </script>";
        }
    
        $conn = null;

    }
    
    
    
    require_once '../../includes/footer.php'; ?>