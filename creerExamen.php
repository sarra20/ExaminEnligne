<?php
require("connexion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

 

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

   
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->

    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">CRÉATION <span class="lite">Examen</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src=".jpg">
                            </span>
                            <span class="username">Nom Etudiant</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
         
             
              
             
             
              <li>
                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              
              
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
      </header>
      <!--header end-->

      <!--sidebar start-->
      <aside>
        <div id="sidebar" class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu">
            
          
            <li class="sub-menu">

            </li>
            <li>
              <a class="" href="creerExamen.php">
                          <i class="icon_genius"></i>
                          <span>Examen</span>
                      </a>
            </li>
            <li>
              

            </li>

            

         

          </ul>
          <!-- sidebar menu end-->
        </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h3 class="page-header"><i ></i> </h3>
              <ol class="breadcrumb">
              
                <li><i class="icon_piechart"></i>Examen</li>

              </ol>
            </div>
          </div>
          <div class="row">
            <!-- chart morris start -->
            <div class="col-lg-12">
             
              </div>
              <!-- chart morris start -->
            </div>
      </section>
      <!--main content end-->
      <div class="text-right">
            <div class="credits">
        
                        <section class="panel">
              <div class="panel-body">
                <form class="form-horizontal " >
			 
		
			 <?php 
					
							 
require("connexion.php");

$date = date('y-m-d');
$result = mysql_query("SELECT * FROM examen ") or die('Error');
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1"/>
<tr><td><b>Numero Examen</b></td><td><b>Titre </b></td><td><b>Duree</b></td><td><b>Date</b></td><td><b></b></td></tr>';
while($row = mysql_fetch_array($result)) {
	$name = $row['NumExamen'];
	$mob = $row['NumExamen'];
	$gender = $row['Titre'];
    $email = $row['Duree'];
	$college = $row['DateExamen'];

	echo '<tr><td>'.$name.'</td><td>'.$gender.'</td><td>'.$college.'</td><td>'.$email.'</td>
	<td><a href="creerExamen.php" >commencer</a></td></tr>';
}
						


			 
			 ?>
			 
			 </section>
        </div>
    </section>
    <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- chartjs -->
    <script src="assets/chart-master/Chart.js"></script>
    <!-- custom chart script for this page only-->
    <script src="js/chartjs-custom.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>

  </body>
</html>
