<?php require_once 'includes/header.php';

$sql = "SELECT * FROM `slider` ORDER BY `slider_id` DESC";
$result = $conn->prepare($sql);
$result->execute();
?>
<style>
  #slider{
    height: 50px;
    width: 50px;
  }
</style>


<div class="main-panel">
  <div class="content-wrapper">

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title tendorlist "  style="color: crimson;" >slider LIST</p>
            <button class="btn btn-warning btn-sm tendorbutton"   data-target="simpleModal_6" data-toggle="modal">ADD NEW SLIDER</button>

          
            <div id="simpleModal_6" class="modal">
              <div class="modal-window">
                  <span class="close " data-dismiss="modal" style="color: red;">&times;</span>
                 

                  <div class="card">
                    <div class="card-body">
                  
                     
                      <form class="forms-sample" action="formactions/slider_submit.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                          <label>SLIDER NAME</label>
                          <input type="text" class="form-control" name="slider_name" required>
                        </div>
                         
                        <div class="form-group">
                          <label>UPLOAD FILE</label>
                          <input type="file" class="form-control" name="slider_file" required>
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
                <thead style="background-color:#556CAB; color:#fff;">
                  <tr>
                    <th>SLIDER ID</th>
                    <th>SLIDER NAME</th>
                    <th>SLIDER</th>
                    <th>STATUS</th>                
                    <th>ACTIONS</th>
                  </tr>
                </thead>
                <tbody>
                <?php
if ($result->rowCount() > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
        echo "<td>" . $row['slider_id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        ?>
       <td> <img src="formactions/uploads/sliders/<?php echo $row['image']; ?>" alt="" id="slider"/></td>

        <?php
        echo "<td>";
        if ($row['status'] == 1) {
          echo "<button class='btn btn-success btn-sm'>Active</button>";

        } else {
          echo "<button class='btn btn-warning btn-sm'>De-Active</button>";
         
}
        echo "</td>";
        ?>

       
       <td><a href="formactions/slider_delete.php?id=<?php echo $row['slider_id']; ?>" class="btn btn-danger">Delete</a></td>
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

   
    
    $(document).ready(function() {
    $('#tenders').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );

  </script>

  <?php require_once 'includes/footer.php';?>