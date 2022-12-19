<?php 
include('dbcon.php');
session_start();
if(!$_SESSION['email']){
    echo "<script>alert('Unauthorized access'); location.href='./index.php'; </script>";
}

//for fetching admin details from database


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap.min.css"> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <!-- <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap.min.js"></script> -->

  <style>
    /* .navbar-menu-wrapper{
      background-color: #808B90 !important;
    }
   */
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

    .modal {
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      display: none;
      overflow: auto;
      background-color: #000000;
      background-color: rgba(0, 0, 0, 0.7);
      z-index: 9999;
    }

    .modal-window {
      position: relative;
      background-color: #FFFFFF;
      width: 50%;
      margin: 2% auto;
      padding: 20px;
    }

    .modal-window.small {
      width: 30%;
    }

    .modal-window.large {
      width: 75%;
    }

    .close {
      position: absolute;
      top: 0;
      right: 0;
      color: rgba(0, 0, 0, 0.3);
      height: 30px;
      width: 30px;
      font-size: 30px;
      line-height: 30px;
      text-align: center;
    }

    .close:hover,
    .close:focus {
      color: #000000;
      cursor: pointer;
    }

    .open {
      display: block;
    }

    input,select,textarea{
       border:1px solid #2768FF !important;
    }

    
  </style>
</head>

<body>
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <a class="navbar-brand brand-logo" href="dashboard.php">
            <img src="assets/images/logo.jpg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="dashboard.php">
            BCCBANK
            <!-- <img src="../../assets/img/logo.jpg" alt="logo"/> -->
          </a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="includes/logout.php"  id="profileDropdown">
             <span class="nav-profile-name">   <i class="mdi mdi-logout"></i>Logout</span>
            </a>
          </li>
        </ul>
       
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="./sliders.php" >
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">Sliders</span>
          
            </a>
         
          </li>

          <li class="nav-item">
            <a class="nav-link" href="./tenders.php">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Tenders</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="./downloads.php">
              <i class="mdi mdi-download menu-icon"></i>
              <span class="menu-title">Downloads</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="./notices.php">
              <i class="mdi mdi-flag menu-icon"></i>
              <span class="menu-title">News/Notices</span>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="./gallery_upload.php">
              <i class="mdi mdi-code-equal menu-icon"></i>
              <span class="menu-title">Gallery</span>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="./rate_of_intrest.php">
              <i class="mdi mdi-adjust menu-icon"></i>
              <span class="menu-title">Rate Of Intrest</span>
            </a>
          </li>

          

          <li class="nav-item">
            <a class="nav-link" href="./branches.php">
              <i class="mdi mdi-television menu-icon"></i>
              <span class="menu-title">Branches</span>
            </a>
          </li>
        </ul>
      </nav>