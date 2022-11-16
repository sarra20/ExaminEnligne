<?php
session_start();
$IDExamen=$_SESSION["IDExamen"];
$nomexam=$_SESSION["nomexamen"];
$codeexam=$_SESSION["codeexamen"];
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

  <title> </title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet"> <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Examen en ligne </title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/daterangepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-colorpicker.css" rel="stylesheet" />
  <!-- date picker -->

  <!-- color picker -->

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
      <a href="index.html" class="logo">CRÉATION <span class="lite">EXAMEN</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
             
            </form>
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
                            <span class="username">admin nom</span>
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
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Accueil</span>
                      </a>
          </li>
         
         
          <li>
            <a class="" href="examen.html">
                          <i class="icon_genius"></i>
                          <span>Créer examen</span>
                      </a>
          </li>
          <li>
            <a class="" href="chart-chartjs.html">
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
            
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Accueil</a></li>
              
              <li><i class="fa fa-file-text-o"></i> Ajout Des Questions</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Informations relatives à l'examen
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="POST" action="ajoutexamen.php">
				 <div class="form-group">
				  
                    <label class="col-sm-2 control-label">ID Examen</label>
                    <div class="col-sm-10">
					
                      <input type="text" value="<?php echo $IDExamen;  ?>" name="codeexamen" class="form-control round-input" required >
                    </div>
                  </div>
                  <div class="form-group">
				  
                    <label class="col-sm-2 control-label">Code Examen</label>
                    <div class="col-sm-10">
                      <input type="text" name="codeexamen" value="<?php echo $codeexam;  ?>"  class="form-control round-input" required >
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nom Examen</label>
					
                    <div class="col-sm-10">
                      <input type="text" name="nomexamen" value="<?php echo $nomexam;  ?>"  class="form-control round-input" required>
                      
                    </div>
                  </div>
                  
                 
				  
              
                  </div>
                  
                  </div>
                  
                </form>
              </div>
            </section>
           
           
          <div class="col-lg-9">
          
            <section class="panel">

              <div class="panel-body">
                <a href="#myModal" data-toggle="modal" class="btn btn-primary">
                                  Text
                              </a>
                <a href="#myModal-1" data-toggle="modal" class="btn  btn-warning">
                                  Choix Multiple 
                              </a>
                <a href="#myModal-2" data-toggle="modal" class="btn  btn-danger">
                                  Vrai/faux
                              </a>
							    <a href="#myModal-3" data-toggle="modal" class="btn  btn-danger">
                                  Chargement
                              </a>

                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">text</h4>
                      </div>
                      <div class="modal-body">

                        <form  method="POST" action="questiontext.php">
                          <div class="form-group">
						  
						  <input name="idexamenQ" value="<?php echo $IDExamen;?>" />
						  </br>
                            <label for="exampleInputEmail1">Question: </label>
                           </br>
                         <textarea class="form-control" placeholder="DescrptionsQ" name="DescrptionsQ" rows="4" cols="50">
</textarea>
						 </div>
						  
                         
                           
						 </div>
						 
                         
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                      </div>
						 
                         
                        
                       
                      </div>
                    </div>
                  </div>
                
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-1" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title"> Choix Multiple </h4>
                      </div>
                      <div class="modal-body">

                         <div class="modal-body">

                        <form  method="POST" action="multiple.php">
                          <div class="form-group">
						  
						  <input name="idexamen" value="<?php echo $IDExamen;  ?>" />
						  </br>
                            <label for="exampleInputEmail1">Question: </label>
                           </br>
                         <textarea class="form-control" placeholder="Descrptions1" name="Descrptions1" rows="4" cols="50">
</textarea>
						 </div>
						  
                         <div class="form-group">
						 
						  <input type="text" placeholder="choix1" name="choix1" />
						  <input type="text" placeholder="choix2" name="choix2" />
                           <input type="text" placeholder="choix3" name="choix3" />
                          </div>
                           
						
						 
                         
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                      </div>

                      </div>

                    </div>
                  </div>
                </div>
				<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-2" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Vrai/faux</h4>
                      </div>
					  
                     <div class="modal-body">

                        <form  method="POST" action="questinqcm.php">
                          <div class="form-group">
						  
						  <input name="idexamen3" value="<?php echo $IDExamen;  ?>" />
						  </br>
                            <label for="exampleInputEmail1">Question: </label>
                           </br>
                         <textarea class="form-control" placeholder="Descrptions3" name="Descrptions3" rows="4" cols="50">
</textarea>
						 </div>
						  
                         
                           
						 </div>
						 
                         
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                      </div>
					   </div>
                    </div>

                </div>
				
				
					  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-3" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Chargement</h4>
                      </div>
					  
                     <div class="modal-body">

                       <form  method="POST" action="chargement.php">
                          <div class="form-group">
						  
						  <input name="idexamen4" value="<?php echo $IDExamen;  ?>" />
						  </br>
                            <label for="exampleInputEmail1">Question: </label>
                           </br>
                         <textarea class="form-control" placeholder="Descrptions4" name="Descrptions4" rows="4" cols="50">
</textarea>
						 </div>
						  
                         
                           
						 </div>
						 
                         
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                      </div>
                    </div>
                </div>
                
              </div>
            </section>
          </div>
       
            
        <!-- Basic Forms & Horizontal Forms-->

       
          
            

        <!-- Inline form-->
        

        

                          
              

                

           
    <!--main content end-->

  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

  <!-- jquery ui -->
  <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>
  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>

  <!-- colorpicker -->

  <!-- bootstrap-wysiwyg -->
  <script src="js/jquery.hotkeys.js"></script>
  <script src="js/bootstrap-wysiwyg.js"></script>
  <script src="js/bootstrap-wysiwyg-custom.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/bootstrap-colorpicker.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
  <!-- custom form component script for this page-->
  <script src="js/form-component.js"></script>
  <!-- custome script for all page -->
  <script src="js/scripts.js"></script>


</body>

</html>

  