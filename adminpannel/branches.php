<?php require_once 'includes/header.php';

$sql = "SELECT * FROM `branch` ORDER BY `id` DESC";
$result = $conn->prepare($sql);
$result->execute();

?>

<div class="main-panel">
  <div class="content-wrapper">

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title tendorlist "  style="color: crimson;" >BRANCH LIST</p>
            <button class="btn btn-primary btn-sm tendorbutton"   data-target="simpleModal_6" data-toggle="modal">ADD NEW BRANCH</button>

          
            <div id="simpleModal_6" class="modal">
              <div class="modal-window">
                  <span class="close " data-dismiss="modal" style="color: red;">&times;</span>
                 

                  <div class="card">
                    <div class="card-body">
                  
                     
                      <form class="forms-sample" action="formactions/branch_submit.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                          <label>BRANCH NAME</label>
                          <input type="text" class="form-control" name="branch_name" required>
                        </div>
                         
                        <div class="form-group">
                          <label>BRANCH MANAGER NAME</label>
                          <input type="text" class="form-control" name="branch_manager_name" required>
                        </div>
                         
                        <div class="form-group">
                          <label>EMAIL</label>
                          <input type="email" class="form-control" name="email" required>
                        </div>
                         
                        <div class="form-group">
                          <label>MOBILE</label>
                          <input type="number" class="form-control" name="mobile" required>
                        </div>
                         
                        <div class="form-group">
                          <label>OTHER CONTACT</label>
                          <input type="text" class="form-control" name="other_contact" required>
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
                    <th>BRANCH NAME</th>
                    <th>MANAGER</th>
                    <th>EMAIL</th>
                    <th>MOBILE NO</th>
                    <th>OTHER CONTACT</th>
                    <th>STATUS</th>
                    <th>ACTIONS</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
if ($result->rowCount() > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['branchname'] . "</td>";
        echo "<td>" . $row['managername'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['mobile'] . "</td>";
        echo "<td>" . $row['othercontact'] . "</td>";
 
        echo "<td>";
        if ($row['status'] == 1) {
          echo "<button class='btn btn-success btn-sm'>Active</button>";

        } else {
          echo "<button class='btn btn-warning btn-sm'>De-Active</button>";
         
}
        echo "</td>";
        ?>
       <td><a href="formactions/branch_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
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
    "order": [[ 3, "desc" ]],
      autoFill: true
    });
</script>





  <?php require_once 'includes/footer.php';?>