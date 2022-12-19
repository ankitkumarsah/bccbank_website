<?php include_once('header.php'); 

?>
<div class="container">


<div class="row" >
    <div class="container">
    
        <div class="card"  id="dattableclass">
            <div class="card-body">
                <p class="card-title tendorlist " style="color: crimson;">TENDER LIST</p>
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php
if ($tenders->rowCount() > 0) {
    while ($row = $tenders->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
           $date_now = date("Y-m-d"); 
        echo "<td>" . $row['tender_id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>";   
      if ($date_now < $row['end_date'] ) {
    ?><a target="_blank" href="adminpannel/formactions/uploads/tenders/<?php echo $row['file']; ?>">View File</a><?php
}else{
            echo "<p class='text-danger'>Expired</p>";
}
        echo "</td>";   
        echo "<td>" . $row['starting_date'] . "</td>";
        echo "<td>" . $row['end_date'] . "</td>";
        
    
        
        echo "<td>";
     
     
 
if ($date_now < $row['end_date'] ) {
    echo "<button class='btn btn-success btn-sm'>Active</button>";
}else{
            echo "<button class='btn btn-danger btn-sm'>De-Active</button>";
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
        "order": [[ 2, "desc" ]],
    });
</script>
<?php include_once('footer.php'); ?>