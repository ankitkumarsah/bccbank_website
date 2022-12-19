<?php require_once 'header.php';

$sql = "SELECT * FROM `rateofintrest` ORDER BY `id` DESC";
$result = $conn->prepare($sql);
$result->execute();

?>

  <div class="container">

    <div class="row">
      <div class="container">
        <div class="card" id="dattableclass">
          <div class="card-body">
            <p class="card-title tendorlist "  style="color: crimson;" >Interest Rates</p>
           
          
            


            <div class="table-responsive">
              <table class="table table-bordered" id="tenders" style="font-size: 13px; ">
                <thead class="tablehead">
                  <tr>
                    
                    <th style="width:200px;">DAYS</th>
                    <th style="width:200px;">For Deposit of less than Rs. 1 Cr</th>
                    <th style="width:200px;">For Deposit of above Rs. 1 Cr</th>
                    <th style="width:200px;">Senior Citizen less than Rs. 1 Cr</th>
                    <th style="width:200px;">Senior Citizen above Rs. 1 Cr</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
if ($result->rowCount() > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
        echo "<td>" . $row['days'] . "</td>";
        echo "<td style'text-align:center;'>" . $row['less1cr'] . "%</td>";
        echo "<td>" . $row['above1cr'] . "%</td>";
        echo "<td>" . $row['senior_less1cr'] . "</td>";
            echo "<td>" . $row['senior_above1cr'] . "</td>";
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