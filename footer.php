
        <footer class="footer-section">
            <div class="container">
                <!-- <div class="footer-cta pt-5 pb-5">
                    <div class="row">
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="cta-text">
                                    <h4>Find us</h4>
                                    <span>1010 Avenue, sw 54321, chandigarh</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="fas fa-phone"></i>
                                <div class="cta-text">
                                    <h4>Call us</h4>
                                    <span>9876543210 0</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="far fa-envelope-open"></i>
                                <div class="cta-text">
                                    <h4>Mail us</h4>
                                    <span>mail@info.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="footer-content pt-5 pb-5">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 mb-50">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="index.php"><img src="assets/img/logo.jpg" class="img-fluid"
                                            alt="logo"></a>
                                </div>
                                <div class="footer-text">
                               
                                </div>
                                <div class="footer-social-icon">
                                    <span>Follow us</span>
                                    <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                    <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                 
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3>Useful Links</h3>
                                </div>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a  href="gallery.php">Gallery</a></li>     
                        <li><a  href="branchcontact.php">Branches</a></li>
                        <li><a  href="tenders.php"> Tenders</a></li>
                        <li><a  href="rate_of_intrest.php">Interest Rates</a></li>
                                  
                                    
                                 
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3>Useful Links</h3>
                                </div>
                                <ul>
                        
                                     
                        <li><a href="https://www.nafscob.org/" target="_blank"> NAFSCOB</a></li>
                        <li><a  href="http://www.mp.nic.in/ecooperatives/(S(oec4n1kdvbo1ifgidx1iskss))/Default1.aspx">E-cooperative </a></li>    
                                  
                                      <li><a href="BCC Bank  Privacy Policy.pdf" target="_blank"> Privacy & Policy</a></li>
                        <li><a  href="#">Terms & Conditions</a></li> 
                                   
                                </ul>
                               
                            </div>
                            <style>
                                .count{
                                    display: inline;  width: 100px;
  height: 100px;
  padding: 5px; color:#fff;background-color: #00CB86;
                                }
                            </style>
                             <div>
                                 <?php
                            if(!isset($_COOKIE['visit'])) {
                                     setcookie('visit', 'yes', time() + (86400 * 30));

                                    
                                        $sq = "update visitor_counter set counter=counter+1";
                                  $stmte = $conn->prepare($sq);
                                 $stmte->execute();
                            }
                                
                                 
                                 $counter_sql = "select counter from visitor_counter";
                                 $stmt = $conn->prepare($counter_sql);
                                 $stmt->execute();
                                 $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                 $counter = $arr[0]['counter'];
                                 $countlength = strlen($counter);
                                 
                                 
                                 ?>
                                <span > Visitor Counter :       </span>
                                <?php for($i=0;$i<$countlength;$i++){?>
                                     <div class="count"><?php echo $counter[$i]; ?></div> 
                                 <?php } ?>
                                 
                                
                       
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 text-center text-lg">
                            <div class="copyright-text">
                                <p>Copyright &copy; 2021, All Right Reserved <a href="index.php">BccBank</a></p>
                            </div>
                        </div>
                        
                         
                                </div>
                     
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <script>
        function openTab(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        document.getElementById("defaultOpen").click();
        
        
        

    </script>


</body>

</html>