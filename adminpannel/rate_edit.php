<?php
require_once 'includes/header.php';
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    include_once 'includes/dbcon.php';
    $sql = "SELECT * FROM rateofintrest WHERE id= :id";
    $result = $conn->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_STR);
    $id = $_GET['id'];
    $result->execute();

    
    if ($result->rowCount() > 0) {
   $row = $result->fetch(PDO::FETCH_ASSOC);
   
     ?>
     <div class="main-panel">
  <div class="content-wrapper">

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
          
         <div class="card">
                    <div class="card-body">
                      <form class="forms-sample" action="formactions/rate_update.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" value="<?php echo $row['id']; ?>"  name="id" required>
                          <label>DAYS</label>
                          <input type="text" value="<?php echo $row['days']; ?>" class="form-control" name="days" required>
                        </div>
                        <div class="form-group">
                          <label>BELOW 1CR.</label>
                          <input type="text" class="form-control"  value="<?php echo $row['less1cr']; ?>" name="less1cr" required>
                        </div>
                        <div class="form-group">
                          <label>ABOVE 1CR</label>
                          <input type="text" class="form-control" name="above1cr" value="<?php echo $row['above1cr']; ?>" required>
                        </div>
                        <div class="form-group" >
                          <label>STATUS</label>
                          <select class="form-control" name="status">
                            <option value="1">ACTIVE</option>
                            <option value="0">PENDING</option>
                          </select>
                        </div>
                        <button type="submit" class="btn btn-warning mr-2 btn-block">Update</button>
                      </form>
                    </div>
                  </div>   </div>
                  </div>   </div>
                  </div>
     <?php
         
}
    $conn = null;
}
