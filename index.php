<?php include_once 'header.php';?>
<main>


    <div class="sl-content">
        <div class="container-fluid">


            <div class="row" style="margin-top: 13px;">


                <div class="col-md-9">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">


                            <?php
$i = 1;
while ($sliderdata = $slider->fetch(PDO::FETCH_ASSOC)) {
    ?>
                            <div class="carousel-<?php echo $item_class = ($i == 1) ? 'item active' : 'item'; ?>">
                                <img
                                    src="adminpannel/formactions/uploads/sliders/<?php echo $sliderdata['image']; ?>" />
                            </div>
                            <?php
$i++;
}

?>




                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>

                <div class="col-md-3">
                    <a href="tenders.php">
                        <div class="card1">
                            <div class="nsec">
                                <span><i class="fa fa-globe"></i></span>
                                <p class="ter">Tenders</p>
                            </div>

                        </div>
                    </a>
                    <a href="downloads.php">
                        <div class="card1">
                            <div class="nsec">
                                <span><i class="fa fa-arrow-alt-down"></i></span>
                                <p class="ter">Downloads</p>
                            </div>
                        </div>
                    </a>
                    <a href="notices.php">
                        <div class="card1">
                            <div class="nsec">
                                <span><i class="fa fa-book"></i></span>
                                <p class="ter">Notices/News</p>
                            </div>
                        </div>
                    </a>
                    <a href="https://server333.iseencloud.com:2096/" target="_blank">
                        <div class="card1">
                            <div class="nsec">
                                <span><i class="fa fa-envelope"></i></span>
                                <p class="ter">Check Mail</p>
                            </div>
                        </div>
                    </a>
                </div>


            </div>

        </div>
    </div>





    <!-- Start Services -->
    <div id="services" class="boxbg">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Our Services</h2>
                        <p style="color: #fff;">Our bank job is to provide
                            customers with financial services that help people better manage their lives. </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4  col-sm-6">
                    <div class="serviceBox ">
                        <div class="service-icon">
                            <span><i class="fa fa-bolt"></i></span>
                        </div>
                        <h3 class="title">POSITIVE PAY</h3>

                        <a href="https://www.cedgepps.in/BCCBANK/#/auth/login"
                            style="background:#00CB86; width:170px;height:40px; padding:8px; border-radius:5px;color:#fff;">Click
                            Here</a>
                    </div>
                </div>


                <div class="col-md-4  col-sm-6">
                    <div class="serviceBox magenta">
                        <div class="service-icon">
                            <span><i class="fa fa-bar-chart"></i></span>
                        </div>
                        <h3 class="title">ATM/Locker Facility</h3>
                        <p>ATM Card Helpline: <a href="tel:18001236230">1800 123 6230</a></p>
                        <a href="locker _information.pdf"
                            style="background:#FF415A; width:170px;height:40px; padding:8px; border-radius:5px;color:#fff;">Click
                            Here</a>
                        <!--<p class="description">Bank Lockers to keep your jewelry & documents safe.</p>-->
                    </div>
                </div>
                <div class="col-md-4  col-sm-6">
                    <div class="serviceBox">
                        <div class="service-icon">
                            <span><i class="fa fa-globe"></i></span>
                        </div>
                        <h3 class="title">BBPS (Bill Pay System) </h3>
                        <a href="https://www.ostaapp.com/user/login"
                            style="background:#00CB86; width:170px;height:40px; padding:8px; border-radius:5px;color:#fff;">Click
                            Here</a>
                    </div>
                </div>





            </div>
        </div>
    </div>
    <!-- Chairman’s Massage Section Start -->
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="content-column col-md-7  order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">About Css3transition</span>
                            <h2 style="color: #12557F;">Chairman’s Massage</h2>
                        </div>
                        <div class="text">I am Rahul Yaduvanshi works at Css3 Transition since last 3 years. We are here
                            to provide touch notch solution for your website or web application that helps you to make
                            your website look attractive & efficient in handling by creating usefull plugins thats you
                            need.</div>
                        <div class="text">
                            We are here to serve you next level tutorial that currently in trend to match you with your
                            expertise. Css3 transition is a learning website. where you can find many good quality
                            content related to web development and tutorials about plugins. here we are using html,
                            html5, css, css3, jquery & javascript along with inspirational UI design layout by
                            professionals by using Photoshop and adobe allustrator.
                        </div>

                    </div>
                </div>

                <div class="image-column col-md-5 col-sm-12">

                    <figure class="image-1"><a href="#"><img
                                src="https://img.freepik.com/free-vector/customer-support-flat-illustration_23-2148892786.jpg?w=900&t=st=1671516254~exp=1671516854~hmac=4904a5eb1de56761f65809858ea142d5d5a8e338d895d47b72f9dccaeb58285a"
                                alt="" style="height: 400px; border-radius: 10px; width: 100%;"></a></figure>


                </div>

            </div>


        </div>
    </section>
    <!-- Chairman’s Massage Section end -->


        <!-- Director Massage Section Start -->
        <section class="about-section">
            <div class="container">
                <div class="row">
                    <div class="content-column col-md-7 ">
                        <div class="inner-column">
                            <div class="sec-title">
                                
                                <h2 style="color: #12557F;">Director's Message</h2>
                                <span class="title">Dear Aspirant,</span>
                            </div>
                            <div class="text">I am Rahul Yaduvanshi works at Css3 Transition since last 3 years. We are here
                                to provide touch notch solution for your website or web application that helps you to make
                                your website look attractive & efficient in handling by creating usefull plugins thats you
                                need.</div>
                            <div class="text">
                                We are here to serve you next level tutorial that currently in trend to match you with your
                                expertise. Css3 transition is a learning website. where you can find many good quality
                                content related to web development and tutorials about plugins. here we are using html,
                                html5, css, css3, jquery & javascript along with inspirational UI design layout by
                                professionals by using Photoshop and adobe allustrator.
                            </div>
    
                        </div>
                    </div>
    
                    <div class="image-column col-md-5 col-sm-12">
    
                        <figure class="image-1"><a href="#"><img
                                    src="https://img.freepik.com/free-vector/recruit-agent-analyzing-candidates_74855-4565.jpg?w=996&t=st=1671516749~exp=1671517349~hmac=04fa6eff82e7f8e23515e9f50b2b3ef4ce0d7034d1cb2ea09609e3eec58cbd39"
                                    alt="" style="height: 400px; border-radius: 10px; width: 100%;"></a></figure>
    
    
                    </div>
    
                </div>
    
    
            </div>
        </section>
        <!-- Director Massage Section end -->
    <style>

    </style>

    <style>
        .sec-title .title {
            position: relative;
            display: block;
            font-size: 18px;
            line-height: 24px;
            color: #00aeef;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .sec-title h2 {
            position: relative;
            display: block;
            font-size: 30px;
            line-height: 1.28em;
            color: #222222;
            font-weight: 600;
            padding-bottom: 18px;
        }

        .sec-title h2:before {
            position: absolute;
            content: '';
            left: 0px;
            bottom: 0px;
            width: 50px;
            height: 3px;
            background-color: #d1d2d6;
        }



        .about-section {
            position: relative;
          margin-top: 30px;
        }

        .about-section .sec-title {
            margin-bottom: 15px;
        }

        .about-section .content-column {
            position: relative;
            margin-bottom: 50px;
        }

        .about-section .content-column .inner-column {
            position: relative;
            padding-left: 30px;
        }

        .about-section .text {
            margin-bottom: 20px;
            font-size: 16px;
            line-height: 26px;
            color: #848484;
            font-weight: 400;
            text-align: justify;
        }





        .nsec {
            display: flex;
            padding: 24px 40px;
        }

        .nsec i {
            font-size: 39px;
            color: #12557F;
        }





        .nsec p {
            font-size: 24px;
            margin-left: 8px;
            margin-top: -5px;
            font-weight: 700;
            color: coral;
        }

        .boxbg {
            background-color: #f2f3f5;
            padding: 70px 0px;
            background-image: url('assets/img/bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .title-box>h2 {
            color: #fff;
        }

        .abt {

            margin-top: 3em;

        }

        .tab {
            float: left;
            border: 1px solid #ccc;
            background-color: #fff;
            width: 20%;
            height: 230px;
            border-radius: 10px 0 0 10px;

        }

        .tab button {
            display: block;
            background-color: inherit;
            color: black;
            padding: 8px 18px;
            width: 90%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
            margin: 1%;
            border-radius: 4px;
        }

        .tab button:hover {
            background-color: #12557F;
            color: #fff;
        }

        .tab button.active {
            color: #fff;
            background-color: #12557F;

        }

        .tabcontent {
            background-color: #fff;
            float: left;
            padding: 0px 12px;
            border: 1px solid #ccc;
            width: 80%;
            border-left: none;
            height: 230px;
            border-radius: 0 10px 10px 0;
            margin-bottom: 2em;
        }

        .tabcontent {
            padding: 15px;
        }


        .showcase-02 {
            margin-top: 15px;
        }

        .showcase-02 .moduule-title {
            color: #424242;
            padding-bottom: 3px;
            border-bottom: 2px solid #ececec;
            margin-bottom: 0px;
            font-size: 20px;
            margin-top: 0px;
        }

        .moduule-title span,
        .facility .moduule-title span {
            border-bottom: 2px solid #2ACBDB;
        }

        .panel {
            margin-bottom: 20px;
            background-color: #fff;
            border: 1px solid transparent;
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
            box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
        }

        .panel-body {
            padding: 15px;
        }

        .media-body>a {
            margin-left: 4px;
        }

        .showcase-02 .panel-footer {
            background-color: #fbfbfb;
            font-size: 12px;
            color: #FFFFFF;
            box-shadow: 0 2px 1px rgb(140 140 140 / 20%);
            padding: 4px 10px;
            border-top: 1px solid #ececec;
        }
    </style>


    <div class="abt">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box1">
                        <h3>About Us</h3>

                    </div>
                </div>
            </div>
            <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'firstTab')" id="defaultOpen">Mission</button>
                <button class="tablinks" onclick="openTab(event, 'secondTab')">Vision</button>
                <!--<button class="tablinks" onclick="openTab(event, 'thirdTab')">Bank Profile</button>-->
                <!--<button class="tablinks" onclick="openTab(event, 'fourthTab')">Financial Reports</button>-->
            </div>

            <div id="firstTab" class="tabcontent">
                <h3>Mission</h3>
                <p>The main object of theBCC Bank is to ensure the economical and social upliftment of the people at
                    large and to promote the tendency of the saving on co-operative base and to reach the facility of
                    loans to the various sections of the society with the mean of co-operative institutions and to
                    ensure to make available the reasonable price of the agricultural products and facilities of
                    storage, seeds, fertilizers, farming equipment’s to the farmers below the market price through PACS.

                    To ensure the quality services to the customers as well as farmers for the beneficiaries.</p>
            </div>

            <div id="secondTab" class="tabcontent">
                <h3>Vision</h3>
                <p>We have presently 24 branches in Bhopal providing services to the citizens with saving habits and
                    helping hands through various kinds of loans.

                    Making administration transparent and people oriented with mean of administrative reforms.
                    Pacification in administration with the mean of Information technology
                    Making the services available to the grass-root level
                    Modernization in administration and providing satisfactory services </p>
            </div>

            <!--<div id="thirdTab" class="tabcontent">-->
            <!--    <h3>Bank Profile</h3>-->
            <!--    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered-->
            <!--        alteration in some form, by injected humour, or randomised words which don't look even slightly-->
            <!--        believable.</p>-->
            <!--</div>-->
            <!--<div id="fourthTab" class="tabcontent">-->
            <!--    <h3>Financial Reports</h3>-->
            <!--    <p>There are many variations of passages of BCC Bank available, but the majority have suffered-->
            <!--        alteration in some form, by injected humour, or randomised words which don't look even slightly-->
            <!--        believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't-->
            <!--        anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet-->
            <!--        tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.-->
            <!--        It uses a dictionary of over 200 Latin words</p>-->
            <!--</div>-->
        </div>
    </div>

    <br>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><b style="margin-left:20px;">Important Links</b></div>
                    <div class="panel-body">
                        <p>1.National Cyber Crime Reporting Portal <a href="https://cybercrime.gov.in/">Click Here</a>
                        </p>
                        <p>2.Jan Samarth <a href="https://www.jansamarth.in/home">Click Here</a></p>
                        <p>3.Unclaimed Accounts as on 31.10.2022<a href="documents/DEAF-1.pdf" target="_blank"> Click
                                Here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="abt">
        <div class="container">


            <div class="row">
                <div class="col-md-5">


                    <div class="showcase-02">
                        <h4 class="moduule-title">
                            <span><i class="fa fa-file-text fa-pad"></i></span><span>&nbsp;Tenders</span>
                        </h4>
                        <div class="panel panel-primary">

                            <div class="panel-body">
                                <div id="UcImpNotice1_UpdatePanel1">



                                    <div class="home-events">
                                        <ul class="media-list notice-list list-unstyled"
                                            style="margin: 0px; padding: 0px; height: 138px; overflow-y: hidden;">
                                            <li class="media" news-item="">

                                                <div class="media-body">
                                                    <marquee behavior="scroll" direction="up" scrolldelay="200"
                                                        height="250" onmouseover="this.stop()"
                                                        onmouseout="this.start()">

                                                        <ul>
                                                            <?php

$tendrs = $tenders->fetchAll(PDO::FETCH_ASSOC);

foreach ($tendrs as $tnd) {

    ?>

                                                            <li> <a href="tenders.php"
                                                                    style="text-decoration: none;color:#DF5C06;"> <i
                                                                        class="fa fa-file"></i>
                                                                    <?php echo $tnd['name']; ?>
                                                                </a></li>


                                                            <?php

}

?>
                                                        </ul>
                                                    </marquee>
                                                </div>

                                            </li>





                                        </ul>
                                    </div>





                                </div>

                            </div>
                            <div class="panel-footer">
                                <a href="tenders.php" class="pull-left"><i class="fa  fa-arrow-circle-right fa-pad ">
                                    </i>View More</a>
                                <ul class="pagination pull-right" style="margin: 0px;">
                                    <li><a href="#" class="prev"><span class="fa fa-chevron-down"></span></a></li>
                                    <li><a href="#" class="next"><span class="fa fa-chevron-up"></span></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="showcase-02">
                        <h4 class="moduule-title">
                            <span><i class="fa fa-file-text fa-pad"></i></span><span>&nbsp;News & Notices</span>
                        </h4>
                        <div class="panel panel-primary">

                            <div class="panel-body">
                                <div id="UcImpNotice1_UpdatePanel1">




                                    <div class="home-events">
                                        <ul class="media-list notice-list list-unstyled"
                                            style="margin: 0px; padding: 0px; height: 138px; overflow-y: hidden;">

                                            <?php
$sqli = "SELECT * FROM `notices` ORDER BY `id` DESC";
$notices = $conn->prepare($sqli);
$notices->execute();
?>
                                            <marquee behavior="scroll" direction="up" scrolldelay="200" height="250"
                                                onmouseover="this.stop()" onmouseout="this.start()">

                                                <ul>
                                                    <?php

$notices = $notices->fetchAll(PDO::FETCH_ASSOC);

foreach ($notices as $notice) {

    ?>

                                                    <li> <a href="notices.php" style="text-decoration: none"> <i
                                                                class="fa fa-file"></i>
                                                            <?php echo $notice['name']; ?>
                                                        </a></li>


                                                    <?php

}

?>
                                                </ul>
                                            </marquee>




                                        </ul>
                                    </div>





                                </div>

                            </div>
                            <div class="panel-footer">
                                <a href="notices.php" class="pull-left"><i class="fa  fa-arrow-circle-right fa-pad ">
                                    </i>View More</a>
                                <ul class="pagination pull-right" style="margin: 0px;">
                                    <li><a href="#" class="prev"><span class="fa fa-chevron-down"></span></a></li>
                                    <li><a href="#" class="next"><span class="fa fa-chevron-up"></span></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    .btn {
                        width: 260px !important;
                    }
                </style>




                <div class="col-md-3">

                    <div class="showcase-02">
                        <h4 class="moduule-title">
                            <span><i class="fa fa-file-text fa-pad"></i></span><span>Important Links</span>
                        </h4>
                        <div class="btn-group-vertical">
                            <a href="https://rbi.org.in" class="btn btn-primary btn-block">Reserve Bank of India</a>
                            <a href="https://www.nabard.org/" class="btn btn-danger btn-block">Nabard</a>
                            <a href="http://cooperatives.mp.gov.in/" class="btn btn-success btn-block">M P State
                                Cooperative Department</a>
                            <a href="https://www.npci.org.in/" class="btn btn-warning btn-block">National Payment
                                Corporation of India </a>


                        </div>
                    </div>



                </div>


            </div>

        </div>
    </div>
    <?php include_once 'footer.php';?>