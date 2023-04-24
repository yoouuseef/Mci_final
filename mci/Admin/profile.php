<?php
session_start();
include("../connection.php");
if(isset($_POST['submitproject']))
{
  $projname = $_POST['projname'];
  $protype = $_POST['protype'];

  $sql = "INSERT INTO project_tb (projname, protype) VALUES ('".$projname."', '".$protype."')";
  $sql_run = mysqli_query($conn, $sql);
  if($sql_run)
  {
    header("Location: profile.php");
    exit(0);
  }
  else
  {
    header("Location: profile.php");
    exit(0);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/framework.css" />
    <link rel="stylesheet" href="css/master.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
  </head>
  <body>
    <div class="page d-flex">
      <div class="sidebar bg-white p-20 p-relative">
        <h3 class="p-relative txt-c mt-0">Admin</h3>
        <ul>
          <li>
            <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="index.html">
              <i class="fa-regular fa-chart-bar fa-fw"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="settings.html">
              <i class="fa-solid fa-diagram-project fa-fw"></i>
              <span>Projects</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="profile.html">
              <i class="fa-solid fa-wand-magic-sparkles"></i>
              <span>Suggest Projects</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="projects.php">
              <i class="fa-solid fa-people-group"></i>
              <span>Groups</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="courses.html">
              <i class="fa-solid fa-graduation-cap fa-fw"></i>
              <span>Type of Projects</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="friends.html">
              <i class="fa-solid fa-person-chalkboard"></i>
              <span>Supervisor</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="files.html">
              <i class="fa-solid fa-right-from-bracket"></i>
              <span>log out</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="content w-full">
                  <!-- Start Quick Draft Widget -->
                  <div class="quick-draft p-20 bg-white rad-10">
                    <h2 class="mt-0 mb-10">Suggest Projects</h2>
                    <p class="mt-0 mb-20 c-grey fs-15">Write A Draft For Your Ideas</p>
                    <form action="profile.php" method="POST">
                      <!-- <input class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" type="text" name="" placeholder="Projects Code"> -->
                      <input class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" type="text" name="projname" placeholder="Projects Name">
                      <input class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" type="text" name="protype" placeholder="Type Projects">
                      <input class="save d-block fs-14 bg-blue c-white b-none w-fit btn-shape" name="submitproject" type="submit" value="Save">
                    </form>
                  </div>
                  <!-- End Quick Draft Widget -->
        </div>
      </div>
    </div>
  </body>
</html>
