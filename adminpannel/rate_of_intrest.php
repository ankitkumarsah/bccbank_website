<?php require_once 'includes/header.php';

$sql = "SELECT * FROM `rateofintrest` ORDER BY `id` DESC";
$result = $conn->prepare($sql);
$result->execute();

?>

<div class="main-panel">
  <div class="content-wrapper">

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title tendorlist "  style="color: crimson;" >RATE OF INTREST</p>
            <button class="btn btn-primary btn-sm tendorbutton"   data-target="simpleModal_6" data-toggle="modal">ADD NEW INTREST PLAN</button>

          
            <div id="simpleModal_6" class="modal">
              <div class="modal-window">
                  <span class="close " data-dismiss="modal" style="color: red;">&times;</span>
                  <div class="card">
                    <div class="card-body">
                      <form class="forms-sample" action="formactions/rate_submit.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                          <label>DAYS</label>
                          <input type="text" class="form-control" name="days" required>
                        </div>
                        <div class="form-group">
                          <label>BELOW 1CR.</label>
                          <input type="text" class="form-control" name="less1cr" required>
                        </div>
                        <div class="form-group">
                          <label>ABOVE 1CR</label>
                          <input type="text" class="form-control" name="above1cr" required>
                        </div>
                        
                        <div class="form-group">
                          <label>SENIOR CITIZEN LESS THAN 1CR</label>
                          <input type="text" class="form-control" name="senior_less1cr" required>
                        </div>
                        
                          <div class="form-group">
                          <label>SENIOR CITIZEN ABOVE 1CR</label>
                          <input type="text" class="form-control" name="senior_above1cr" required>
                        </div>
                        <div class="form-group" >
                          <label>STATUS</label>
                          <select class="form-control" name="status">
                            <option value="1">ACTIVE</option>
                            <option value="0">PENDING</option>
                          </select>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2 btn-block">Submit</button>
                      </form>
                    </div>
                  </div>
              </div>
          </div>          


            <div class="table-responsive">
              <table class="table table-bordered" id="tenders" style="font-size: 13px; ">
                <thead class="tablehead">
                  <tr>
                    <th>ID</th>
                    <th>DAYS</th>
                    <th>BELOW 1 CR.</th>
                    <th>ABOVE 1 CR.</th>
                    <th>SENIOR BELOW 1 CR.</th>
                    <th>SENIOR ABOVE 1 CR.</th>
                    <th>STATUS</th>
                              <th>EDIT</th>
                    <th>ACTIONS</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
if ($result->rowCount() > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['days'] . "</td>";
        echo "<td>" . $row['less1cr'] . "</td>";
        echo "<td>" . $row['above1cr'] . "</td>";
          echo "<td>" . $row['senior_less1cr'] . "</td>";
            echo "<td>" . $row['senior_above1cr'] . "</td>";
        ?>
       
                <?php
        echo "<td>";
        if ($row['status'] == 1) {
          echo "<button class='btn btn-success btn-sm'>Active</button>";

        } else {
          echo "<button class='btn btn-warning btn-sm'>De-Active</button>";
         
}
        echo "</td>";
        ?>
        <td><a href="rate_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a></td>
       <td><a href="formactions/rate_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
        <?php
        echo "</tr>";
    }
}
?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>


<script>
  
  $('#tenders').DataTable({
    "order": [[ 2, "desc" ]],
      autoFill: true
    });
</script>





  <?php require_once 'includes/footer.php';?>