<?php
ob_start();
include_once 'adminpannel/includes/dbcon.php';


$sql = "SELECT * FROM `tenders` ORDER BY `tender_id` DESC";
$tenders = $conn->prepare($sql);
$tenders->execute();

$sql = "SELECT * FROM `slider` WHERE status='1'";
$slider = $conn->prepare($sql);
$slider->execute();
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BCC BANK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="Location" content="https://bccbank.in/">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style.css">



 
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  
  <script type="text/javascript"
    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({ pageLanguage: 'en', includedLanguages: 'xx,yy,hi,en' }, 'google_translate_element');
    }
  </script>

  <style>
    #dattableclass{
      margin: 10px;
    }

#tenders_filter {
      float: right;
    }

    #tenders_length {
      float: left;
    }

    #tenders_length label {
      display: flex;
    }

    #tenders_length select {
      height: 25px;
      padding: 2px;
    }

    .tablehead {
      background-color: #0985B8;
      color: #fff;
      height: 20px;
    }

    .dataTables_paginate {
      float: right;
    }

    .dataTables_info {
      float: left;
    }

    .tendorbutton {
      float: right;
    }

    .tendorlist {
      float: left;
    }
    .carousel-item img {
      height: 430px; width: 100%;
    }
</style>
</head>

<body style="background-color: #ECECEC;">
    <!-- Start top bar -->
    <!--<div class="main-top">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-6">-->
    <!--                <div class="left-top">-->
    <!--                    <a class="new-btn-d br-2" href="https://server333.iseencloud.com:2096/"><span>Email Login</span></a>-->
    <!--                    <div class="mail-b"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>-->
    <!--                            info@bccbank.in</a></div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-6">-->
    <!--                <div class="wel-nots">-->
    <!--                    <p>Welcome to BccBank!</p>-->
    <!--                </div>-->
    <!--       <div class="right-top">-->
				<!--		<ul>-->
				<!--			<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
				<!--			<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
				<!--			<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>-->
				<!--			<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>-->
				<!--		</ul>-->
				<!--	</div> -->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- End top bar -->
<style>
    .navbar-nav li a{
        color:#fff;
    }
</style>
    <!-- Start header -->
    <header class="top-header" style="background:#12557F !important;">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="assets/img/logo.jpg" alt="image"
                        style="height: 60px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd"
                    aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
             
                
                <script>
    $(function () {
        $('.navbar-nav li a').each(function () {
            if ($(this).prop('href') == window.location.href) {
                $('.nav-link').removeClass('active'); 
                $(this).addClass('active');
            }
        });
    });
</script>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav ">
                        <li><a class="nav-link active" href="index.php">Home</a></li>
                        <li><a class="nav-link" href="aboutus.php">About Us</a></li>
                        <li><a class="nav-link" href="gallery.php">Gallery</a></li>     
                        <li><a class="nav-link" href="branchcontact.php">Branches</a></li>
                        <li><a class="nav-link" href="tenders.php"> Tenders</a></li>
                        <li><a class="nav-link" href="rate_of_intrest.php">Interest Rates</a></li>
                        <!-- <li><a class="nav-link" target="_blank" href="https://bccbank.org/">Complaint</a></li> -->
<div style="float: left;" id="google_translate_element"></div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->
<main>