<?php require_once 'header.php';

$sql = "SELECT * FROM `branch` ORDER BY `id` DESC";
$result = $conn->prepare($sql);
$result->execute();

?>

  <div class="container">

    <div class="row">
      <div class="container">
        <div class="card" id="dattableclass">
          <div class="card-body">
            <p class="card-title tendorlist "  style="color: crimson;" >BRANCH CONTACT</p>
           
          
            


            <div class="table-responsive">
              <table class="table table-bordered" id="tenders" style="font-size: 13px; ">
                <thead class="tablehead">
                  <tr>
                    
                    <th>BRANCH NAME</th>
                    <th>MANAGER NAME</th>
                    <th>EMAIL</th>
                    <th>MOBILE</th>
                    <th>OTHER</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
if ($result->rowCount() > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
        echo "<td>" . $row['branchname'] . "</td>";
        echo "<td>" . $row['managername'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['mobile'] . "</td>";
        echo "<td>" . $row['othercontact'] . "</td>";
       
       
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