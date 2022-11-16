<?php
session_start();


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

  <title>Charts | Creative - Bootstrap 3 Responsive Admin Template</title>

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

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->

    <<header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.php" class="logo">CRÉATION <span class="lite">Examen</span></a>
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

          <!-- task notificatoin start -->
          
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
       
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
      
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src=".jpg">
                            </span>
                            <span class="username"><?php echo $_SESSION['nomeng'].' '.$_SESSION['pernomeng'];?></span>
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
            <li class="active">
              <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Accueil</span>
                      </a>
            </li>
          
            <li class="sub-menu">

            </li>
            <li>
              <a class="" href="widgets.php">
                          <i class="icon_genius"></i>
                          <span>Créer examen</span>
                      </a>
            </li>
            <li>
              <a class="" href="chart-chartjs.php">
                          <i class="icon_piechart"></i>
                          <span>Consulter</span>

                      </a>

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
              <h3 class="page-header"><i class="icon_piechart"></i> Consulter</h3>
              <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="index.php">Accueil</a></li>
                <li><i class="icon_piechart"></i>Consulter</li>

              </ol>
            </div>
          </div>
          <div class="row">
            <!-- chart morris start -->
            <div class="col-lg-12">
              <section class="panel">
              <header class="panel-heading">
                Consulter les examens
              </header>

              <?php//Connection avec la BDD.
        $reponse = mysql_query("SELECT * FROM reponse") or die('Error');
        ?>
              <table>
                <tr>
                    <td>idReponse</td>
                    <td>Contenu</td>
                    <td>idQuestion</td>
                    <td>CompteRendu</td>
                    <td>NumEtudiant</td>
              
                </tr>
            <?php//On affiche les lignes du tableau une à une à l'aide d'une boucle
            while($donnees = mysql_fetch_array($reponse))
            {
            ?>
                <tr>
                    <th><?php echo $donnees['idReponse'];?></th>
                    <th><?php echo $donnees['Contenu'];?></th>
                    <th><?php echo $donnees['idQuestion'];?></th>
                    <th><?php echo $donnees['CompteRendu'];?></th>
                    <th><?php echo $donnees['NumEtudiant'];?></th>

                </tr>
            
        </table>
                    </section>
              </div>
              <!-- chart morris start -->
            </div>
      </section>
      <!--main content end-->
      <div class="text-right">
            <div class="credits">
        
          
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
