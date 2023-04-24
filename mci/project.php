<?php
session_start();
include ("connection.php");

if(isset($_POST['submitstudent']))
{
   $projectname = $_POST['projectname'];
   $prcodetype = $_POST['prcodetype'];
   $stucode1 = $_POST['stucode1'];
   $stuname1 = $_POST['stuname1'];
   $stucode2 = $_POST['stucode2'];
   $stuname2 = $_POST['stuname2'];
   $stucode3 = $_POST['stucode3'];
   $stuname3 = $_POST['stuname3'];
   $stucode4 = $_POST['stucode4'];
   $stuname4 = $_POST['stuname4'];
   $stucode5 = $_POST['stucode5'];
   $stuname5 = $_POST['stuname5'];
   $division = $_POST['division'];
   $description = $_POST['description'];
   $problems = $_POST['problems'];
   $beneficiary = $_POST['beneficiary'];

  //  $sql = "INSERT INTO t_projectsstu (projectname) VALUES ('"$projectname"')";

   $sql = "INSERT INTO t_projectsstu (projectname, prcodetype, description, problems, beneficiary, stucode1, stuname1, stucode2, stuname2, stucode3, stuname3, stucode4, stuname4, stucode5, stuname5, division) 
   VALUES ('$projectname', '$prcodetype', '$description', '$problems', '$beneficiary', '$stucode1', '$stuname1', '$stucode2', '$stuname2', '$stucode3', '$stuname3', '$stucode4', '$stuname4', '$stucode5', '$stuname5', '$division')";

$sql_run = mysqli_query($conn, $sql);
if($sql_run)
{
  header("Location: project.php");
  exit(0);
}
else
{
  header("Location: project.php");
  exit(0);
}

}

?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> تسجيل الطلاب لمشروع التخرج </title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid ">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +02 22465253
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : MCI.ACADMEY@gmail.com
              </span>
            </a>
            <a href="https://goo.gl/maps/ELo37GmNTsGDzzJA7">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.php">
              <span>
                MCI ACADMEY
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Homepage </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.php">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="contact.php">Contact Us <span class="sr-only">(current)</span> </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
                </li>
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>
  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-5 offset-md-1">
          <div class="heading_container">
            <h2>
                Project Registration
            </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-5 offset-md-1">
          <div class="form_container">
          <form method="post" action="project.php">
                <div>
                    <input type="text" name="stucode1" placeholder="Student-ID(1)" required/>
                  </div>
              <div>
                <input type="text" name="stuname1" placeholder=" stu_Name(1)" required/>
              </div>
              <div>
                <input type="text" name="stucode2" placeholder="Student-ID(2)" required/>
              </div><div>
                <input type="text" name="stuname2" placeholder="stu_Name(2)" required/>
              </div><div>
                <input type="text" name="stucode3" placeholder="Student-ID(3)" required/>
              </div><div>
                <input type="text" name="stuname3" placeholder="stu_Name(3)" required/>
              </div>
              <div>
                <input type="text" name="stucode4" placeholder="Student-ID(4) " required />
              </div>
              <div>
                <input type="text" name="stuname4" placeholder="stu_Name(4) " required />
              </div>
              <div>
                <input type="text" name="stucode5" placeholder="Student-ID(5) " required />
              </div>
              <div>
                <input type="text" name="stuname5" placeholder="stu_Name(5) " required />
              </div>
              <div>
                <input type="text" name="projectname" placeholder="Project Name " required />
              </div>
              <div>
                <input type="text" name="prcodetype" placeholder="Type Project" required />
              </div>
           <div>
           <input type="text" name="division" placeholder="Division " required />
           </div>
             
              <div>
                <input type="text" name="beneficiary" placeholder="The beneficlary" required />
              </div>
              <div>
                <input type="text" name="problems" placeholder="Problems" />
              </div>
              <div>
                <input type="text" name="description" placeholder="Description" />
              </div>
              <div class="three">
                <input type="submit" value="Send" name="submitstudent"> 
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h4>
              Institute vision

            </h4>
            <p>That the institute be a distinguished institution for higher education
               in the fields of marketing, commerce and information systems at the local and regional levels.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="index.php">
                Homepage
              </a>
              <a class="" href="service.php">
                Services
              </a>
              <a class="" href="about.php">
                About
              </a>
              <a class="" href="contact.php">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
              Get In Touch
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +02 22465253
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  MCI.ACADMEY@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col ">
          <h4>
            Subscribe
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>