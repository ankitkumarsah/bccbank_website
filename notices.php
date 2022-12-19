<?php require_once 'header.php';

$sql = "SELECT * FROM `notices` ORDER BY `id` DESC";
$result = $conn->prepare($sql);
$result->execute();

?>

  <div class="container">

    <div class="row">
      <div class="container">
        <div class="card" id="dattableclass">
          <div class="card-body">
            <p class="card-title tendorlist "  style="color: crimson;" >NEWS/NOTICES LIST</p>
           
          
            


            <div class="table-responsive">
              <table class="table table-bordered" id="tenders" style="font-size: 13px; ">
                <thead class="tablehead">
                  <tr>
                    <th>NOTICE ID</th>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
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
        echo "<td>" . $row['decription'] . "</td>";
        ?>
        <td> <a target="_blank" href="adminpannel/formactions/uploads/news/<?php echo $row['file']; ?>">View File</a></td>
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
      autoFill: true,
      "order": [[ 1, "desc" ]],
    });
</script>





  <?php require_once 'footer.php';?>