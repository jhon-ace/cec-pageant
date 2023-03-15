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

                  if (($judge == 'judge1') OR ($judge == 'judge2') OR ($judge == 'judge3') OR ($judge == 'judge4') OR ($judge == 'judge5') OR ($judge == 'judge6') OR ($judge == 'judge7'))
                  {


            ?>


<!------------------------------------PRODUCTION NUMBER--------------------------------------------------------------->

            <?php 
                  
                $link = mysqli_connect("localhost","root","","tabulation");

                  $sql_status1 = mysqli_query($link,"SELECT * from category where category_name = 'Production' and id = 2");
                    for($x = 0 ; $x < $num_rowsp1 = mysqli_fetch_array($sql_status1) ; $x++ )
                    {

                      $status = $num_rowsp1['status'];

                      if($status == 'ONGOING')
                      {
              ?>
            <div class="col-md-6 col-lg-4">
              <div class="card mb-4 shadow-sm p-5">
                <h2 class="text-center mt-5 mb-0"><text style="font-family:Pristina Regular;font-size: 40px;"><b>Production<br>Number</b></text></h2>
                <div class="card-body">
                  <div class="d-flex justify-content-center align-items-center ">
                     <!--<a href="production_male_1.php" class="btn btn-outline-warning" style="font-family: Arial">&nbsp;Male&nbsp;</a>&nbsp;
                     <a href="production_female_1.php"  class="btn btn-outline-warning" style="font-family: Arial">Female</a>-->
                      <a href="production_male_1.php" class="btn btn-outline-warning" style="font-family: Arial">View</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php  }
                    else 
                    {
              ?>
            <div class="col-md-6 col-lg-4">
                          <div class="card mb-4 shadow-sm p-5">
                            <h2 class="text-center mt-5 mb-0"><text style="font-family:Pristina Regular;font-size: 40px;"><b>Production<br>Number</b></text></h2>
                            <div class="card-body">
                              <div class="d-flex justify-content-center align-items-center ">
                                 <!--<a href="production_male_1.php" class="btn btn-outline-warning" style="font-family: Arial">&nbsp;Male&nbsp;</a>&nbsp;
                                 <a href="production_female_1.php"  class="btn btn-outline-warning" style="font-family: Arial">Female</a>-->
                                  <a href="#" class="btn btn-success" style="font-family: Arial">SUBMITTED (LOCKED)</a>
                                </div>
                              </div>
                            </div>
                          </div>

              <?php
                    }

                  } 

              ?>



<!------------------------------------SPORTS WEAR--------------------------------------------------------------->
            <?php 
                  
                $link = mysqli_connect("localhost","root","","tabulation");

                  $sql_status2 = mysqli_query($link,"SELECT * from category where category_name = 'Sports_Wear' and id = 3");
                    for($x = 0 ; $x < $num_rowsp2 = mysqli_fetch_array($sql_status2) ; $x++ )
                    {

                      $status = $num_rowsp2['status'];

                      if($status == 'ONGOING')
                      {
              ?>
            <div class="col-md-6 col-lg-4">
              <div class="card mb-4 shadow-sm p-5">
                <h2 class="text-center mt-5 mb-0"><text style="font-family:Pristina Regular;font-size: 40px;"><b>Sports<br>Wear</b></text></h2>
                <div class="card-body">
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="btn-group">
                      <a href="sports_wear_relevance.php" class="btn btn-outline-warning" style="font-family: Arial">View</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php }
                else 
                {
          ?>
            <div class="col-md-6 col-lg-4">
              <div class="card mb-4 shadow-sm p-5">
                <h2 class="text-center mt-5 mb-0"><text style="font-family:Pristina Regular;font-size: 40px;"><b>Sports<br>Wear</b></text></h2>
                <div class="card-body">
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="btn-group">
                      <a href="#" class="btn btn-success" style="font-family: Arial">SUBMITTED (LOCKED)</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php

                } 

              }
          ?>

 

<!------------------------------------FORMAL WEAR--------------------------------------------------------------->

<?php 
                  
                $link = mysqli_connect("localhost","root","","tabulation");

                  $sql_status7 = mysqli_query($link,"SELECT * from category where category_name = 'Formal_Wear' and id = 5");
                    for($xw = 0 ; $xw < $num_rowsp45 = mysqli_fetch_array($sql_status7) ; $xw++ )
                    {

                      $status = $num_rowsp45['status'];

                      if($status == 'ONGOING')
                      {
              ?>
            <div class="col-md-6 col-lg-4">
              <div class="card mb-4 shadow-sm p-5">
                <h2 class="text-center mt-5 mb-0"><text style="font-family:Pristina Regular;font-size: 40px;"><b>Formal Wear and Evening Gown</b></text></h2>
                <div class="card-body">
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="btn-group">
                    <a href="long_gown_and_formal_wear.php" class="btn btn-outline-warning" style="font-family: Arial">View</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php     }
          else
          {
?>
            <div class="col-md-6 col-lg-4">
              <div class="card mb-4 shadow-sm p-5">
                <h2 class="text-center mt-5 mb-0"><text style="font-family:Pristina Regular;font-size: 40px;"><b>Formal Wear and Evening Gown</b></text></h2>
                <div class="card-body">
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="btn-group">
                   <a href="#" class="btn btn-success" style="font-family: Arial">SUBMITTED (LOCKED)</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>


<?php   }  
      }
       ?>



<!------------------------------------ PRELIMINARY INTERVIEW --------------------------------------------------------->
<?php 
                  
                $link = mysqli_connect("localhost","root","","tabulation");

                  $sql_status3c = mysqli_query($link,"SELECT * from category where category_name = 'Preliminary_Interview' and id = 4");
                    for($xj = 0 ; $xj < $num_rowsp49 = mysqli_fetch_array($sql_status3c) ; $xj++ )
                    {

                      $status = $num_rowsp49['status'];

                      if($status == 'ONGOING')
                      {
              ?>
            <div class="col-md-6 col-lg-4">
              <div class="card mb-4 shadow-sm p-5">
                <h2 class="text-center mt-5 mb-0"><text style="font-family:Pristina Regular;font-size: 40px;"><b>Preliminary<br>Interviews</b></text></h2>
                <div class="card-body">
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="btn-group">
                    <a href="preliminary_interview.php" class="btn btn-outline-warning" style="font-family: Arial">View</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php }
                else 
                {
          ?>
            <div class="col-md-6 col-lg-4">
              <div class="card mb-4 shadow-sm p-5">
                <h2 class="text-center mt-5 mb-0"><text style="font-family:Pristina Regular;font-size: 40px;"><b>Preliminary<br>Interviews</b></text></h2>
                <div class="card-body">
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="btn-group">
                      <a href="#" class="btn btn-success" style="font-family: Arial">SUBMITTED (LOCKED)</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php

                } 

              }
          ?>

<!------------------------------------ FINAL INTERVIEW --------------------------------------------------------->

<?php 
                  
                $link = mysqli_connect("localhost","root","","tabulation");

                  $sql_status3t = mysqli_query($link,"SELECT * from category where category_name = 'Final_Interview' and id = 6");
                    for($xad = 0 ; $xad < $num_rowsp4be = mysqli_fetch_array($sql_status3t) ; $xad++ )
                    {

                      $status = $num_rowsp4be['status'];

                      if($status == 'ONGOING')
                      {
              ?>

            <div class="col-md-6 col-lg-4">
              <div class="card mb-4 shadow-sm p-5">
                <h2 class="text-center mt-5 mb-0"><text style="font-family:Pristina Regular;font-size: 40px;"><b>Final<br> Interviews</b></text><br></h2>
                <div class="card-body">
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="btn-group">
                    <a href="final_round.php" class="btn btn-outline-warning" style="font-family: Arial">View</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php 
                  }
                  else
                  {
?>
          <div class="col-md-6 col-lg-4">
              <div class="card mb-4 shadow-sm p-5">
                <h2 class="text-center mt-5 mb-0"><text style="font-family:Pristina Regular;font-size: 40px;"><b>Final<br> Interviews</b></text><br></h2>
                <div class="card-body">
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="btn-group">
                      <a href="#" class="btn btn-success" style="font-family: Arial">SUBMITTED (LOCKED)</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<?php


                  }
            }

?>


			    <?php  }    ?>

            <div class="col-md-6 col-lg-4">
              <div class="card mb-4 shadow-sm p-5">
                <h2 class="text-center mt-5 mb-0"><text style="font-family:Pristina Regular;font-size: 40px;"><b>Talent<br>Portion</b></text></h2>
                <div class="card-body">
                   <!--<div class="d-flex justify-content-center align-items-center ">
                     <a href="talent_male_1.php" class="btn btn-outline-warning" style="font-family: Arial">&nbsp;Male&nbsp;</a>&nbsp;
                     <a href="talent_female_1.php"  class="btn btn-outline-warning" style="font-family: Arial">Female</a>
                  </div>-->
                  <div class="d-flex justify-content-center align-items-center ">
                    <button  class="btn btn-success" style="font-family: Arial">SUBMITTED (LOCKED)</button>
                  </div>
                </div>
              </div>
            </div>
            
			  <div class="col-md-6 col-lg-4 " >
              <div class="card mb-4 shadow-sm p-5" style="background-color:">
                <h2 class="text-center mt-5 mb-0 text-dark"><text style="font-family:Pristina Regular;font-size: 40px;"><b>Your Score Card</b></text></h2>
                <div class="card-body "><br><br>
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="btn-group">
                    <a href="judge_score_card.php" class="btn btn-success" style="color:white;font-family: Arial">View</a>
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
			
				 <button class = "btn btn-success" name="logout">Logout</button>
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
    
<script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
   
 
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


      <div class="modal fade" id="selectGenderTalent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Information</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                
              </button>
            </div>
            <div class="modal-body">
              Please select: <br>
              <a href="talent_night_stagePresent.php"><button class="btn btn-secondary" type="button">Male</button></a>
            </div>
            <div class="modal-footer">
              <a href="categories.php"><button class="btn btn-success" type="button">Back to Categories</button></a>
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Okay</button>
            </div>
          </div>
        </div>
      </div>
