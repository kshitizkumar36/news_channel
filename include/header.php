<!-- <?php error_reporting(0) ?> -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/687353f40b.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Kshitiz News</title>
  </head>
  
  <style >
    .header h2{
      font-size: 3vw;
      color:white;

    }
    .header span{
      font-size: 2vw;
      color:white;
    }
    .header p{
      font-size: 2vw;
      color:white;
    }
     .header a{
      font-size: 1.2vw;
      color:white;
    }
    .dashboard {

      background-color:<?php if($page=="dashboard")
      {
        echo"#006f63";
      } 
      else
      {
        echo"#027c70";
       
      }?>;
      padding: 15px;

    }
    .dashboard a{
     color:white;
      font-size: 1.2vw;
      
    }
     .dashboard i{
     color:white;
      font-size: 2vw;
      
    }


    .category {
         background-color:<?php if($page=="category")
      {
        echo"#006f63";
      } 
      else
      {
        echo"#027c70";
       
      }?>;
      padding: 15px;

    }
    .category a{
     color:white;
      font-size: 1.2vw;
      
    }
     .category i{
     color:white;
      font-size: 2vw;
      
    }





    .stories {
         background-color:<?php if($page=="stories")
      {
        echo"#006f63";
      } 
      else
      {
        echo"#027c70";
       
      }?>;
      padding: 15px;

    }
    .stories a{
     color:white;
      font-size: 1.2vw;
      
    }
     .stories i{
     color:white;
      font-size: 2vw;
      
    }


    .Filters {
         background-color:<?php if($page=="Filters")
      {
        echo"#006f63";
      } 
      else
      {
        echo"#027c70";
       
      }?>;
      padding: 15px;

    }
    .Filters a{
     color:white;
      font-size: 1.2vw;
      
    }
     .Filters i{
     color:white;
      font-size: 2vw;
      
    }


     .Location {
         background-color:<?php if($page=="Location")
      {
        echo"#006f63";
      } 
      else
      {
        echo"#027c70";
       
      }?>;
      padding: 15px;

    }
    .Location a{
     color:white;
      font-size: 1.2vw;
      
    }
     .Location i{
     color:white;
      font-size: 2vw;
      
    }

  .Event {
         background-color:<?php if($page=="Event")
      {
        echo"#006f63";
      } 
      else
      {
        echo"#027c70";
       
      }?>;
      padding: 15px;

    }
    .Event a{
     color:white;
      font-size: 1.2vw;
      
    }
     .Event i{
     color:white;
      font-size: 2vw;
      
    }





    .pageid span{
      font-size: 1.8vw;
      color:white;

    }
    .header h5{
      font-size: 1.2vw;
      color:white;
      padding-top: 25px;
    }
    
  </style>
  <link rel="stylesheet" type="text/css" href="frontstyle.css">
  <body>
    <!-- header starts here -->

  <header style="background-color: #00877a; position: fixed; z-index: 100; margin-top: -2vw; " class="p-3 header shadow container-fluid ">
       <!-- bootstrap menus -->

<nav style="background-color: ;" class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#"><h2>Kshitiz News</h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i  style="border-color: white;" class="navbar-toggler-icon "></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <h5> <i style="font-size: 1.8vw;" class="fa-sharp fa-solid fa-clock"></i> Wednesday, 09 November 2022 12:17 pm</h5>
</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><h5><i style="font-size: 1.4vw;" class="fa-solid fa-cloud"></i>&emsp;Ranchi, Jharkhand 28°C</h5></a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
     <!--  <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item">df</li> -->
      <li class="nav-item"><h3><a href=""> <span style="padding:25px; border-radius: 50px; background-color: red;font-size: 1.2vw;"> <i class="fa-solid fa-calendar-days"></i> Upcoming_Event</span></a></h3></li>
    
  </div>
</nav>
<hr class="bg-white">
<!-- //bootstrap menu -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2 col-2 ">
           <div class="text-center">
             <a href="index.php"><i class="fa-solid fa-house-user"></i><br>
              Home</a>
           </div>
        </div>

         <div class="col-sm-2 col-2 ">
             <div class="text-center">
             <a href="trending.php"><i class="fa-solid fa-arrow-trend-up"></i><br>
              Trending</a>
           </div>
        </div>
        <div class="col-sm-2 col-2 ">
            <div class="text-center">
             <a href="weather.php"><i class="fa-regular fa-sun"></i><br>
              Weather</a>
           </div>
        </div>
        <div class="col-sm-2 col-2 header ">
             <div class="text-center">
             <a href="events.php"><i class="fa-solid fa-calendar-days"></i><br>
              Events</a>
           </div>
        </div>
         <div class="col-sm-2 col-2 header ">
             <div class="text-center">
             <a href="livesession.php"><i class="fa-solid fa-life-ring"></i><br>
              Live Session</a>
           </div>
        </div>
           <div class="col-sm-2 col-2 header ">
             <div class="text-center">
              <?php

              if($id>0)
              {
                ?>
                <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i><br>
              Logout</a>

                <?php
              }
              else
              {
                ?>
                <a href="login.php"><i class="fa-solid fa-user"></i><br>
              User Login</a>
                <?php
              }
              ?>
             
           </div>
        </div>
         
      
       
      </div>
    </div>
  </header><!-- 
<section style="background-color: #027c70; padding: px;">
  <br>
  <div class="container">
    <div class="row">
      <div class="col-sm-2 col-2 dashboard">
        <div class="text-center">
         <a href="dashboard.php"> <i class="fa-sharp fa-solid fa-gauge"></i><br>
        Dashboard</a>
        </div>
      </div>
        <div class="col-sm-2 col-2 category">
        <div class="text-center">
       <a href="category.php"><i class="fa-solid fa-industry"></i><br>
        category</a>
        </div>
      </div>
       <div class="col-sm-2 col-2 stories">
        <div class="text-center">
       <a href="stories.php"><i class="fa-solid fa-face-smile"></i><br>
        Stories</a>
        </div>
      </div>
      <div class="col-sm-2 col-2 Filters">
        <div class="text-center">
       <a href=""><i class="fa-solid fa-filter"></i><br>
        Filters</a>
        </div>
      </div>
      <div class="col-sm-2 col-2 Location">
        <div class="text-center">
       <a href="location.php"><i class="fa-solid fa-location-pin"></i><br>
        Location</a>
        </div>
      </div>
       <div class="col-sm-2 col-2 Event">
        <div class="text-center">
       <a href="event.php"><i class="fa-solid fa-calendar-days"></i><br>
        Event</a>
        </div>
      </div>
    </div>
  </div>
  
</section> -->

    <!-- header ends here -->


 







</ul></div></nav></header>

<hr>

<div style="margin-bottom: 14vw;"></div>