<?php require_once 'header.php';

$sql = "SELECT * FROM `gallery` ORDER BY `id` DESC";
$result = $conn->prepare($sql);
$result->execute();

?>
<div class="container">
    <div class="card" id="dattableclass">
        <div class="card-body">
            <p  style="color: crimson;">GALLERY</p>
            <div class="row">
            <?php
if ($result->rowCount() > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
   
    ?>

                <div class="col-md-3 DD">
                    <div class="card">
                        	<a class="image-popup-vertical-fit" target="_blank" href="adminpannel/formactions/uploads/gallery/<?php echo $row['image']; ?>" >
                        <img src="adminpannel/formactions/uploads/gallery/<?php echo $row['image']; ?>"
                            alt="" class="yy"/>
                            </a>
                    </div>
                </div>

                <?php
    }
}
?>
            </div>
        </div>
    </div>
</div>
<style>
    .yy{
        height: 200px;
        width: 100%;
    
    }
    .DD{
        margin-bottom: 15px;
    }
</style>

<?php require_once 'footer.php';?>