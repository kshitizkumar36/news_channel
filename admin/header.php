<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/687353f40b.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>admin panel</title>
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
      font-size: 2vw;
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
  </style>
  <link rel="stylesheet" type="text/css" href="style.css">
  <body>
    <!-- header starts here -->

  <header style="background-color: #00877a;" class="p-3 header shadow">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 col-4">
          <h2>Admin Logo</h2>
        </div>
        <div class="col-sm-3 col-4 text-right">
          <span style="padding:8px; border-radius: 50px; background-color: #0ea1d2;"> <i class="fa-regular fa-user"></i>&emsp; kshitiz</span>
        </div>
        <div class="col-sm-1 col-2  text-right">
          <p><a href="notification.php"><i class="fa-solid fa-bell"></i></a></p>
        </div>
        <div class="col-sm-2 col-2 text-center ">
          <a href=""><i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
      </div>
    </div>
  </header>
<section style="background-color: #027c70; padding: 20px;">
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
  
</section>

    <!-- header ends here -->