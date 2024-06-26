<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true)
{
    header("location :login.php");
    exit;
}


?>


<?php

  $showerror = false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  
include 'partials/_dbconnect.php';
$username= $_SESSION["username"];
$text = $_POST["text"];



    $sql="INSERT INTO `feedback` ( `username`, `text`, `dt`) VALUES ( '$username', '$text', current_timestamp());";
    $result = mysqli_query($conn , $sql);
    $result = mysqli_query($conn , $sql);
    if($result)
    {
        $showAlert = true;
        header("location:index.php");

    }
}


else{
    $showerror = "Something Went wrong try later!!";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E_learning</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="Owl Carousal/css/owl.carousel.min.css">
    <link rel="stylesheet" href="Owl Carousal/css/owl.theme.default.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Tenor+Sans" /> -->
  <script src="Owl Carousal/js/jquery.min.js"></script>
  <script src="Owl Carousal/js/owl.carousel.min.js"></script>
</head>
<body>
    <div id="navbar">
    <div class="logo">
            <h2 class="logoTxt">E-lea<span style="color: rgb(15, 237, 237);">rn</span>-ing</h2>
        </div>
            <ul class="h-nav-resp">
                 <li class="item"><a href="#">
                         <div class="item_li">
                            <img src="images/house-solid.svg" alt="">
                            <h3> Home</h3>
                        </div> 
                </a></li>
                   
                    <?php
                $login=false;
                if( $_SESSION['loggedin'] =true)
                {
                    $login = true;
                }
                else
                {
                   echo "<li class='item'><a href='login.php'>
                   <div class='item_li'>
                       <img src='images/right-from-bracket-solid.svg' alt=''>
                       <h3> Login</h3>
                   </div> 
               </a></li>";
                   echo "<li class='item'><a href='signup.php'>
                   <div class='item_li'>
                       <img src='images/clipboard-list-solid.svg' alt=''>
                       <h3>Signup</h3>
                   </div> 
                   

               </a></li>";
                }
                

                ?>
                   
                    
                    <li class="item" ><a href="online_class.php">
                    <div class="item_li">
                            <img src="images/school-solid.svg" alt="">
                            <h3>Classes</h3>
                        </div> 
                    </a></li>
                    <li class="item" ><a href="#materials">
                    <div class="item_li">
                            <img src="images/readme.svg" alt="">
                            <h3>Materials</h3>
                        </div> 
                    </a></li>
                    <li class="item"><?php echo $_SESSION ['username']?></li>
                    <li class="item"><a href="logout.php"><div class="item_li">
                            <img src="images/unlock-solid.svg" alt="">
                            <h3>Logout</h3>
                        </div> </a></li>
                 </ul>
    </div>
  <!-- home section start -->


<!-- show sucess message for insertion of  -->


   <!-- home section start -->

   <div class="homebanner">
        <div class="leftside_container">
            <h3>Learn at home</h3>
            <h1>E-Learning</h1><br>
            <span>Online classes</span>
            <p>Online classes, also known as online courses or e-learning, refer to educational programs that are
                delivered over the internet rather than in a traditional physical classroom. </p>
            <span style="color: rgb(90, 16, 158);">Subscribe Now</span>
            <p>AND GET 20% OFF</p>
            <button class="Subscribebtn">SUBCRIBE</button>

        </div>
        <div class="rightside_container">
            <div class="banner_animate">
                <img src="homebanner.png" width="500" height="400">
            </div>

        </div>
    </div>
    <div class="highlightSection">
        <div class="card_box">
            <div class="box" class="slide-top">
                <img class="card-box-img" src="images/video1.jpg" width="100" height="100">
                <h5>Video</h6>
                    <p class="box-txt">We are provide 100% quality recorded video with highly qualified Mentor</p>
                    <button class="card-btn">Read More</button>
            </div>
            <div class="box" class="slide-top">

                <img class="card-box-img" src="images/doubt2.png" width="100" height="100">
                <h5>Doubt clearing</h6>
                    <p class="box-txt">We are provide 100% quality recorded video with highly qualified Mentor</p>
                    <button class="card-btn">Read More</button>
            </div>

            <div class="box" class="slide-top">
                <img class="card-box-img" src="images/liveWebinar.avif" width="100" height="100">
                <h5>Live classes</h6>
                    <p class="box-txt">We are provide 100% quality recorded video with highly qualified Mentor</p>
                    <button class="card-btn">Read More</button>
            </div>

            <div class="box" class="slide-top">
                <img class="card-box-img" src="images/1.jpg" width="100" height="100">
                <h5>Notes</h6>
                    <p class="box-txt">We are provide 100% quality recorded video with highly qualified Mentor</p>
                    <button class="card-btn"> Read More</button>
            </div>

        </div>
    </div>
    <br><br><br>
    <div class="about-section">

        <img src="aboutsection.png" class="aboutImg" alt="">
        <div class="about-content">
            <h4 class="about_heading1">Learn With Us</h4>
            <h2 class="about_heading2">Where Students Meet The Best Tutors </h2>
            <p class="about_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque neque harum
                ratione aliquid ullam eos eum. Sed, praesentium?
                Fugiat nemo mollitia itaque reiciendis odit beatae asperiores cum vel eius debitis.</p>
            <button class="aboutBtn">view All courses</button>
        </div>
    </div>
    <!-- //project section // -->
    <a href="#" name="materials" style="list-style: none; text-decoration: none;"> <div class="project_section">  </a>
        <h5 class="project_heading1"> Our Course</h5>
        <h2 class="project_heading2">Discover Our Popular Courses</h2>
        <p class="project_heading3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis culpa fugiat,
            placeat nostrum quibusdam poss<br>imus nam, repellendus repellat doloribus labore laborum disti.</p>
        <br><br>
        <div class="project_container">
           
            <div class="project_box">
                <img src="DSA-course-min.jpeg" alt="" class="project_imgbanner">
                <div class="text-box">
                    <h5 class="course_heading1">Monday - Friday | 10 AM - 12 AM</h5>
                    <h4 class="course_heading2">DSA</h4>
                    <p class="course_heading3">$17 / Month</p>
                    <span class="course_heading4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                        tellus.</span>
                    <br> <a href="DSA.html"> <button class="view-Course">View Course</button></a>
                </div>
            </div>
            <div class="project_box">
                <img src="webdevelopemt.jpeg" alt="" class="project_imgbanner">
                <div class="text-box">
                    <h5 class="course_heading1">Monday - Friday | 10 AM - 12 AM</h5>
                    <h4 class="course_heading2">Web development</h4>
                    <p class="course_heading3">$17 / Month</p>
                    <span class="course_heading4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                        tellus.</span>
                    <br>  <a href="#"> <button class="view-Course">View Course</button></a>  
                </div>
            </div>
            <div class="project_box">
                <img src="java-training.png" alt="" class="project_imgbanner">
                <div class="text-box">
                    <h5 class="course_heading1">Monday - Friday | 10 AM - 12 AM</h5>
                    <h4 class="course_heading2">Java</h4>
                    <p class="course_heading3">$17 / Month</p>
                    <span class="course_heading4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                        tellus.</span>
                    <br> <button class="view-Course">View Course</button>
                </div>
            </div>
        </div>
        <div class="project_container">
            <div class="project_box">
                <img src="Cloud-Computing-mob.jpeg" alt="" class="project_imgbanner">
                <div class="text-box">
                    <h5 class="course_heading1">Monday - Friday | 10 AM - 12 AM</h5>
                    <h4 class="course_heading2">Cloud Computing</h4>
                    <p class="course_heading3">$17 / Month</p>
                    <span class="course_heading4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                        tellus.</span>
                    <br> <button class="view-Course">View Course</button>
                </div>
            </div>
         
             <div class="project_box">
                <img src="cpp.png" alt="" class="project_imgbanner">
                <div class="text-box">
                    <h5 class="course_heading1">Monday - Friday | 10 AM - 12 AM</h5>
                    <h4 class="course_heading2">C++</h4>
                    <p class="course_heading3">$17 / Month</p>
                    <span class="course_heading4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                        tellus.</span>
                    <br>  <a href="c++.html"> <button class="view-Course">View Course</button></a>
                </div>
            </div>

            <div class="project_box">
                <img src="phpbanner.jpeg" alt="" class="project_imgbanner">
                <div class="text-box">
                    <h5 class="course_heading1">Monday - Friday | 10 AM - 12 AM</h5>
                    <h4 class="course_heading2">PHP</h4>
                    <p class="course_heading3">$17 / Month</p>
                    <span class="course_heading4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                        tellus.</span>
                    <br> <a href="c.html"> <button class="view-Course">View Course</button></a>
                </div>
            </div>
        </div>

    </div>
          
    <!-- home section ends -->
    <!-- description section start -->


    <!-- <a href="Read_more.html" ><h3 class="h-primary">Read More...</h3></a> -->

    <!-- <section class="about" id="about">
    <h1 class="h-primary">Populer Localities We Deliver To Around Kolkata </h1>
<div class="area">
    <div class="coll1">
    <p class="coll1_p">Rajarhat</p>
    <p class="coll1_p">New Town</p>
    <p class="coll1_p">Hlatu</p>
    <p class="coll1_p">Garia</p>
    <p class="coll1_p">Salt Lake City</p>
    <p class="coll1_p">BT Road</p>
    <p class="coll1_p" >Behala</p>
    <p class="coll1_p">Dum Dum</p>
    <p class="coll1_p">Tollygunge</p>
    </div>
     <div class="coll2">
    <p class="coll1_p">Ballygunge</p>
    <p class="coll1_p">Kasba</p>
    <p class="coll1_p">Joka</p>
    <p class="coll1_p">Nrendrapur</p>
    <p class="coll1_p">Mukundapur</p>
    <p class="coll1_p">Jadavpur</p>
    <p class="coll1_p">New alipore</p>
    <p class="coll1_p">Sodepur</p>
    <p class="coll1_p">Baguihati</p>
    </div>
     <div class="coll3">
    <p class="coll1_p">Lake Town</p>
    <p class="coll1_p">Rajpur</p>
    <p class="coll1_p">Sonarpur</p>
    <p class="coll1_p">Patuli</p>
    <p class="coll1_p">Basdroni</p>
    <p class="coll1_p">Bhabanipur</p>
    <p class="coll1_p">Baghajatin</p>
    <p class="coll1_p">Thakur Pukur</p>
    <p class="coll1_p">Dhakuria</p>
    </div>
    </div>
</section> -->


    <!-- <h1 class="h-primary">Inspiration for your first step</h1>
<div class="images">
        
    <div class="box">
       <a href="mycart/myindex(sweet).php"> <img src="images/code-solid.svg"></a>
        <h3 class="h2-primary">DSA</h3>
    </div>
    
    <div class="box">
        <a href="mycart/myindex(desert).php"> <img src="images/file-code-regular.svg"></a>
        <h3 class="h2-primary">C++</h3>
    </div>
    <div class="box">
        <a href="mycart/myindex(Briyani).php">   <img src="images/c-solid.svg"></a>
        <h3 class="h2-primary">C</h3>
    </div>
    
    <div class="box">
        <a href="mycart/myindex(Niramish).php"> <img src="images/php.svg"></a>
        <h3 class="h2-primary">PHP</h3>
    </div>
  
    <div class="box">
        <a href="mycart/myindex(Street_food).php"> <img src="images/database-solid.svg"></a>
        <h3 class="h2-primary">MYSQL</h3>
    </div>
    <div class="box">
        <a href="mycart/myindex(Dal).php">  <img src="images/html5.svg"></a>
        <h3 class="h2-primary">HTML</h3>
    </div>
    <div class="box">
        <a href="mycart/myindex(Fish).php"> <img src="images/css3.svg"></a>
        <h3 class="h2-primary">CSS</h3>
    </div>
  
    
    <div class="box">
        <a href="mycart/myindex(Chaat).php"> <img src="images/js.svg"></a> 
        <h3 class="h2-primary">JAVASCRIPT</h3>
    </div>

    <div class="box">
        <a href="mycart/myindex(SoftDrinks).php"> <img src="images/java.svg"></a> 
        <h3 class="h2-primary">JAVA</h3>
    </div>
   
  

</div> -->
    <!-- about restaurant-->
    <section class="card_section">
        <p class="card_heading">Our Student Feedback </p>
        <div class="wrapper">
            <div class="owl-carousel owl-theme">
                <div class="item"> <img src="cart\img\img1.png"></div>
                <div class="item"> <img src="cart\img\img2.png"></div>
                <div class="item"> <img src="cart\img\img3.png"></div>
                <div class="item"> <img src="cart\img\img2.png"></div>

            </div>
    </section>

    <!-- about restaurant end->
<!- locations -->

    <div class="overview">
        <div class="overview_txt">
            <h5>Fun Course From Home</h5>
            <h3>Interesting Way To Learn And Stay Safe</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis ut est neque excepturi
                a fugit sunt quasi ab, totam eaque consectetur ipsa consequatur, delectus ipsam doloremque. Officiis
                provident aliquam perferendis?</p>
            <button class="student">2.5K<br>Active Student</button>
            <button class="student">50<br>Certified Teacher</button>

        </div>
        <img src="overview.png" class="overview_img" alt="">
    </div>

   
    <div class="newletter_section">
        <div class="newsletterBox">
            <img src="signupLogo.png" alt="">
            <form action="index.php" class="search_box" method="POST">
                    <h2>Stay Updated</h2>
                    <h1> Send Your Feedback</h1>
                    <input type="text" name="text"><button class="newletterBtn">Send</button>
             </form>
        </div>
    </div>
<div class="end_section">
    <div class="footer">
        <div class="footerbox1">
            <h2 class="footer_h2">OPENING HOURS</h2><br><br>
            <span class="footer_span">Morning: 9 am - 3:00 pm</span><br><br>
            <span class="footer_span">Evening : 6:30 pm - 10 pm</span><br><br>
        </div>
        <div class="footerbox2">
            <h2 class="footer_h2">Service</h2><br><br>
        <span class="footer_span">Learning</span><br><br>
        <span class="footer_span">Doubt Clearning </span><br><br>
        <span class="footer_span">Classes</span>

        
        </div>
        <div class="footerbox3">
            <h2 class="footer_h2">Contact Us</h2><br><br>
        <span class="footer_span">E-learning house , Ground Floor , 135/10 Diamond Harbour Road . Thakurpukur .. On Tarapada Santra Sarani & Vivekpukur College Road Opposite Thakurpukur Police Station . Kolkata 700063</span><br><br>
        <span class="footer_span"><br>Phone No:<a href="tel:+91 6128121921">6128121921<a> </span><br>
        </div>
        
    </div>
    <h5>Copyright © 2024 E-learning | Powered by E-learning</h5>
</div>
   
    

    <!-- footer -->
    <!-- <hr>
<footer>
    <div class="div-1">
<h>E-learning</h>
<br><br>
<h3>Share Us</h3>

<div class="social-media">
    <img src="images\email icon.png">
    <img src="images\facebook icon.png">
    <img src="images\whatsapp icon.png">
</div>
<br><br><br><br><br><br>
<h2><u>USEFUL LINKS</u></h2>
<div class="div-a">
<a href="#"> Home </a></li><br><hr>
<a href="login.php">Login</a></li><br><hr>
<a href="register.php">Register</a></li><br><hr>
<a href="logout.php">Logout</a></li><br><hr>
</div>
</div>
<div class="div-2">
    <h2><u>OPENING HOURS</u></h2><br><br>
    <p>Morning: 9 am - 3:00 pm</p><br>
    <p>Evening : 6:30 pm - 10 pm</p><br><br>
<h2>CONTACT US</h2><br>
<p>E-learning house , Ground Floor , 135/10 Diamond Harbour Road . Thakurpukur .. On Tarapada Santra Sarani & Vivekpukur College Road .Opposite Thakurpukur Police Station . Kolkata 700063 </p><br><hr>
<br>Phone No:<a href="tel:+91 6128121921">6128121921<a><br> <br><hr>

</div>
</footer> -->

    <!-- footer -->
    <!-- javascript -->
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 4000); // Change image every 4 seconds
        }
    </script>

    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true
        });
        $('.play').on('click', function () {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function () {
            owl.trigger('stop.owl.autoplay')
        })
    </script>
</body>
</html>