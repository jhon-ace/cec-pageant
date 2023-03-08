<?php
include ('config.php');
if(isset($_POST['logout']))
{
	session_destroy();
	header('location:index.php');
	
}
if(empty($_SESSION['login_judge']))
{
	header('location:index.php');
}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Categories</title>
    <link rel="shortcut icon" href="img/final_logo.png" type="image/x-icon">
    <link rel="icon" href="img/final_logo.png" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="app.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container">
          <span class="navbar-brand" href="#">Logged in as <strong style="color: yellow">
			  <?php $judge = $_SESSION['login_judge'];  echo "<span style='text-transform: uppercase'>$judge</span>" ?></strong></span>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0">
				
              <button class="btn btn-outline-light my-2 my-sm-0 flo"  type='button' data-toggle="modal" data-target="#exampleModal20000">Log out</button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <main role="main">
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
           <?php
                  
                $judge = $_SESSION['login_judge'];

                  if (($judge == 'judge1') OR ($judge == 'judge2') OR ($judge == 'judge3') OR ($judge == 'judge4') OR ($judge == 'judge5'))
                  {


            ?>

            <div class="col-md-6 col-lg-4">
              <div class="card mb-4 shadow-sm p-5">
                <h2 class="text-center mt-5 mb-0"><text style="font-family:Pristina Regular;font-size: 40px;"><b>Talent<br>Portion</b></text></h2>
                <div class="card-body">
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="btn-group">
                   <a href="talent_night_stagePresent.php" class="btn btn-outline-warning" style="font-family: OCR A">View</a>
                    <!--<a href="#" class="btn btn-danger">View</a>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="card mb-4 shadow-sm p-5">
                <h2 class="text-center mt-5 mb-0"><text style="font-family:Pristina Regular;font-size: 40px;"><b>Production<br>Number</b></text></h2>
                <div class="card-body">
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="btn-group">
                   <a href="sports_wear_relevance.php" class="btn btn-outline-warning" style="font-family: OCR A">View</a>
                    <!--<a href="#" class="btn btn-danger">View</a>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="card mb-4 shadow-sm p-5">
                <h2 class="text-center mt-5 mb-0"><text style="font-family:Pristina Regular;font-size: 40px;"><b>Sports<br>Wear</b></text></h2>
                <div class="card-body">
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="btn-group">
                   <a href="sports_wear_relevance.php" class="btn btn-outline-warning" style="font-family: OCR A">View</a>
                    <!--<a href="#" class="btn btn-danger">View</a>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="card mb-4 shadow-sm p-5">
                <h2 class="text-center mt-5 mb-0"><text style="font-family:Pristina Regular;font-size: 40px;"><b>Preliminary<br>Interviews</b></text></h2>
                <div class="card-body">
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="btn-group">
                    <a href="preliminary_interview.php" class="btn btn-outline-warning" style="font-family: OCR A">View</a>
                    <!--<a href="#" class="btn btn-danger">View</a>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card mb-4 shadow-sm p-5">
                <h2 class="text-center mt-5 mb-0"><text style="font-family:Pristina Regular;font-size: 40px;"><b>Formal Wear and Evening Gown</b></text></h2>
                <div class="card-body">
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="btn-group">
                    <a href="long_gown_and_formal_wear.php" class="btn btn-outline-warning" style="font-family: OCR A">View</a>
                    <!--<a href="#" class="btn btn-danger">View</a>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
<!-- advocacy ani unta -->
            <div class="col-md-6 col-lg-4">
              <div class="card mb-4 shadow-sm p-5">
                <h2 class="text-center mt-5 mb-0"><text style="font-family:Pristina Regular;font-size: 40px;"><b>Final<br> Interviews</b></text><br></h2>
                <div class="card-body">
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="btn-group">
                    <a href="final_round.php" class="btn btn-outline-warning" style="font-family: OCR A">View</a>
                    <!--<a href="#" class="btn btn-danger">View</a>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
			    <?php  }    ?>
                      <!--<?php
                  
                $judge = $_SESSION['login_judge'];

                  if ($judge == 'judge1')
                  {

                     echo " <div class='col-md-6 col-lg-4'>
                              <div class='card mb-4 shadow-sm p-5'>
                                <h2 class='text-center mt-5 mb-0'><text style='font-family:Pristina Regular;font-size: 40px;''><b>Talent Portion</b></text></h2>
                                <div class='card-body'>
                                  <div class='d-flex justify-content-center align-items-center'>
                                    <div class='btn-group'>
                                      <a href='#' class='btn btn-danger'>Done</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>";
                  }

                  else if ($judge == 'judge2')
                  {

                     echo " <div class='col-md-6 col-lg-4'>
                              <div class='card mb-4 shadow-sm p-5'>
                                <h2 class='text-center mt-5 mb-0'><text style='font-family:Forte'>Talent<br>Portion</text></h2>
                                <div class='card-body'>
                                  <div class='d-flex justify-content-center align-items-center'>
                                    <div class='btn-group'>
                                      <a href='#' class='btn btn-danger'>Done</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>";
                  } 


                  else if ($judge == 'judge3')
                  {

                     echo " <div class='col-md-6 col-lg-4'>
                              <div class='card mb-4 shadow-sm p-5'>
                                <h2 class='text-center mt-5 mb-0'><text style='font-family:Forte'>Talent<br>Portion</text></h2>
                                <div class='card-body'>
                                  <div class='d-flex justify-content-center align-items-center'>
                                    <div class='btn-group'>
                                      <a href='#' class='btn btn-danger'>Done</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>";
                  }

                  else if ($judge == 'judge4')
                  {

                     echo " <div class='col-md-6 col-lg-4'>
                              <div class='card mb-4 shadow-sm p-5'>
                                <h2 class='text-center mt-5 mb-0'><text style='font-family:Forte'>Talent<br>Portion</text></h2>
                                <div class='card-body'>
                                  <div class='d-flex justify-content-center align-items-center'>
                                    <div class='btn-group'>
                                      <a href='#' class='btn btn-danger'>Done</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>";
                  }

                  else if ($judge == 'judge5')
                  {

                     echo " <div class='col-md-6 col-lg-4'>
                              <div class='card mb-4 shadow-sm p-5'>
                                <h2 class='text-center mt-5 mb-0'><text style='font-family:Forte'>Talent<br>Portion</text></h2>
                                <div class='card-body'>
                                  <div class='d-flex justify-content-center align-items-center'>
                                    <div class='btn-group'>
                                      <a href='#' class='btn btn-danger'>Done</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>";
                  }
                  else
                  {

                    echo " <div class='col-md-6 col-lg-4'>
                              <div class='card mb-4 shadow-sm p-5'>
                                <h2 class='text-center mt-5 mb-0'><text style='font-family:Forte'>Talent<br>Portion</text></h2>
                                <div class='card-body'>
                                  <div class='d-flex justify-content-center align-items-center'>
                                    <div class='btn-group'>
                                      <a href='#' class='btn btn-outline-warning'>View</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>";
                  }

            ?>-->

            <!--<div class="col-md-6 col-lg-4">
              <div class="card mb-4 shadow-sm p-5">
                <h2 class="text-center mt-5 mb-0"><text style="font-family:Forte">Advocacy</text><br><br></h2>
                <div class="card-body">
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="btn-group">-->
                    <!--<a href="advocacy.php" class="btn btn-outline-warning">View</a>-->
                    <!--<a href="#" class="btn btn-danger" style="font-family: OCR A">View</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>-->
            
			  <div class="col-md-6 col-lg-4 " >
              <div class="card mb-4 shadow-sm p-5" style="background-color:">
                <h2 class="text-center mt-5 mb-0 text-dark"><text style="font-family:Pristina Regular;font-size: 40px;"><b>Your Score Card</b></text></h2>
                <div class="card-body ">
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="btn-group">
                    <a href="judge_score_card.php" class="btn btn-success" style="color:white;font-family: OCR A">View</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>

    <div class="container text-center pt-3">
        <p style="font-family:'Livvic', sans-serif;font-size: 14px">&copy; This system was made by Jhon Ace Casabuena and Computer Studies Department</p>
      </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	  <form method="post">
	  <div class="modal fade" id="exampleModal20000" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
			
				 <button class = "btn btn-danger" name="logout">Logout</button>
			  </form>
           
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
    
<script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
   
  
    
    <script src="js/sb-admin.min.js"></script>
    
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
