<?php include 'config.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title?></title>
       <meta charset="utf-8" />
       <meta http-equiv="X-UA-Compatible" content="IE=edge" />
       <meta name="viewport" content="width=device-width, initial-scale" />
           <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
           <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js" type="text/javascript"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
                <script src="js/lg-map.js" type="text/javascript"></script>
                <script src="js/script.js"></script>
                <script src="js/raphael.js" type="text/javascript"></script>
                <script src="js/scale.raphael.js" type="text/javascript"></script>
                    <link rel="stylesheet" href="css/wp.css" />
                    <link rel="stylesheet" href="css/nav.css" />
                    <link rel="stylesheet" href="css/map.css" />
                    <link rel="stylesheet" href="css/social.css" />
</head>
<body>
<header> 
    <h1><a href="index.php">Winding Path</a></h1>
            <div class="cta"> <a href="https://www.gofundme.com/gwt453zk">
               DONATE</a>
            </div>
        <nav id="cssmenu">
      <ul>
         <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i>Home</span></a></li>
         <li><a href="services.php"><span><i class="fa fa-fw fa-chevron-down"></i>Services</span></a>
            <ul>
               <li><a href="education.php"><span>Education</span></a></li>
               <li><a href="training.php"><span>Training</span></a></li>
               <li><a href="employment.php"><span>Employment</span></a></li>
            </ul>
         </li>
         <li><a href="resources.php"><span><i class="fa fa-fw fa-chevron-down"></i>Resources</span></a>
            <ul>
                <li><a href="housing.php"><span>Housing</span></a></li>
                <li><a href="meals.php"><span>Meals</span></a></li>
                <li><a href="health.php"><span>Health Care</span></a></li>    
                <li><a href="rehab.php"><span>Rehab / Behavioral</span></a></li>
                <li><a href="legal.php"><span>Legal Services</span></a></li>
                <li><a href="transportation.php"><span>Transportation</span></a></li>
                <li><a href="custody.php"><span>In Custody Services</span></a></li>
                <li><a href="misc.php"><span>Other Resources</span></a></li>
            </ul>
         </li>
         <li><a href="newevent.php"><span>News &amp; Events</span></a></li>
         <li><a href="landing.php"><span>Search Map</span></a></li>
         <li><a href="contact.php"><span>Contact Us</span></a></li>
      </ul>
    </nav>
</header>