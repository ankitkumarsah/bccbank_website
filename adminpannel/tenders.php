<?php require_once 'includes/header.php';

$sql = "SELECT * FROM `tenders` ORDER BY `tender_id` DESC";
$result = $conn->prepare($sql);
$result->execute();

date_default_timezone_set('Asia/Kolkata');
$stop_date = date('Y-m-d');
?>

<div class="main-panel">
  <div class="content-wrapper">

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title tendorlist "  style="color: crimson;" >TENDER LIST</p>
            <button class="btn btn-success btn-sm tendorbutton"   data-target="simpleModal_6" data-toggle="modal">ADD NEW TENDER</button>

          
            <div id="simpleModal_6" class="modal">
              <div class="modal-window">
                  <span class="close " data-dismiss="modal" style="color: red;">&times;</span>
                 

                  <div class="card">
                    <div class="card-body">
                  
                     
                      <form class="forms-sample" action="formactions/addnew_tender.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                          <label>TENDER NAME</label>
                          <input type="text" class="form-control" name="tender_name" required>
                        </div>
                         
                        <div class="form-group">
                          <label>UPLOAD FILE</label>
                          <input type="file" class="form-control" name="tender_file" required>
                        </div>
                  
                        <div style="display: flex;">
                          <div class="form-group">
                            <label>STARTING DATE</label>
                            <input type="date" class="form-control" name="starting_date" required >
                          </div>
                      
                          <div class="form-group" style="margin-left: 20px;">
                            <label>END DATE</label>
                            <input type="date" class="form-control" name="end_date" required>
                          </div>
                         
                          <div class="form-group" style="margin-left: 20px;">
                            <label>STATUS</label>
                            <select class="form-control" name="status">
                              <option value="1">ACTIVE</option>
                              <option value="0">PENDING</option>
                            </select>
                          </div>
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
                    <th>TENDER ID</th>
                    <th>TENDER NAME</th>
                    <th>FILE</th>
                    <th>STARTING DATE</th>
                    <th>END DATE</th>
                    <th>STATUS</th>
                    <th>ACTIONS</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
if ($result->rowCount() > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
        echo "<td>" . $row['tender_id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        ?>
<td> <a href="formactions/uploads/tenders/<?php echo $row['file']; ?>">View File</a></td>
        <?php
        
        echo "<td>" . $row['starting_date'] . "</td>";
        echo "<td>" . $row['end_date'] . "</td>";
        echo "<td>";
          if ($row['status'] == 1) {
            echo "<button class='btn btn-success btn-sm'>Active</button>";
  
          } else {
            echo "<button class='btn btn-warning btn-sm'>De-Active</button>";
           
  }
          echo "</td>";

          ?>

       
          <td><a href="formactions/tender_delete.php?id=<?php echo $row['tender_id']; ?>" class="btn btn-danger">Delete</a></td>
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