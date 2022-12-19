<?php require_once 'header.php';

$sql = "SELECT * FROM `downloads` ORDER BY `id` DESC";
$result = $conn->prepare($sql);
$result->execute();

?>

<div class="conatiner">


    <div class="row">
        <div class="container">
            
   
                <div class="card" id="dattableclass">
          <div class="card-body">
            <p class="card-title tendorlist "  style="color: crimson;" >DOWNLOADS LIST</p>
       


            <div class="table-responsive">
              <table class="table table-bordered" id="tenders" style="font-size: 13px; ">
                <thead class="tablehead">
                  <tr>
                    <th>DOWNLOAD ID</th>
                    <th>NAME</th>
                    <th>FILE</th>
                    <th>STATUS</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
if ($result->rowCount() > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        ?>
        <td> <a href="adminpannel/formactions/uploads/download1/<?php echo $row['file']; ?>">View File</a></td>
                <?php
        echo "<td>";
        if ($row['status'] == 1) {
          echo "<button class='btn btn-success btn-sm'>Active</button>";

        } else {
          echo "<button class='btn btn-warning btn-sm'>De-Active</button>";
         
}
        echo "</td>";
      
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
      autoFill: true, "order": [[ 2, "desc" ]]
    });
</script>





  <?php require_once 'footer.php';?>