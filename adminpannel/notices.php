<?php require_once 'includes/header.php';

$sql = "SELECT * FROM `notices` ORDER BY `id` DESC";
$result = $conn->prepare($sql);
$result->execute();

?>

<div class="main-panel">
  <div class="content-wrapper">

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title tendorlist "  style="color: crimson;" >NEWS/NOTICES LIST</p>
            <button class="btn btn-info btn-sm tendorbutton"   data-target="simpleModal_6" data-toggle="modal">ADD NEW NEWS/NOTICES</button>

          
            <div id="simpleModal_6" class="modal">
              <div class="modal-window">
                  <span class="close " data-dismiss="modal" style="color: red;">&times;</span>
                 

                  <div class="card">
                    <div class="card-body">
                  
                     
                      <form class="forms-sample" action="formactions/news_submit.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                          <label>NEWS/NOTICES NAME</label>
                          <input type="text" class="form-control" name="notice_name" required>
                        </div>
                         
                        <div class="form-group">
                          <label>DESCRIPTION</label>
                          <textarea class="form-control" rows="5" name="desc" required></textarea>
                        </div>
                        <div class="form-group">
                          <label>UPLOAD FILE</label>
                          <input type="file" class="form-control" name="news_file" required>
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
                    <th>NOTICE ID</th>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>FILE</th>
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
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['decription'] . "</td>";
        ?>
        <td> <a href="formactions/uploads/news/<?php echo $row['file']; ?>">View File</a></td>
                <?php
                
        echo "<td>";
        if ($row['status'] == 1) {
          echo "<button class='btn btn-success btn-sm'>Active</button>";

        } else {
          echo "<button class='btn btn-warning btn-sm'>De-Active</button>";
         
}
        echo "</td>";
        ?>
       <td><a href="formactions/news_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
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
      autoFill: true,
      "order": [[ 2, "desc" ]]
    });
</script>





  <?php require_once 'includes/footer.php';?>