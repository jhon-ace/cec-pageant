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
    <link rel="shortcut icon" href="img/final_logo.png" type="image/x-icon">
    <link rel="icon" href="img/final_logo.png" type="image/x-icon">

    <title>Score Card</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="app.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
		 <a href="categories.php"><span class="navbar-brand" href="#"><button class = 'btn btn-outline-info'>Back to Categories</button></span></a>
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
        	<?php
        		$link = mysqli_connect("localhost","root","","tabulation");
				  		
						
				$judge = $_SESSION['login_judge'];
				$judge_hide = mysqli_query($link,"SELECT * FROM talent_portion");

				if($judge === "judge1"){
					//none
				}

				else if($judge === "judge2"){
				}

				else if($judge === "judge3"){
				}

				else if($judge === "judge4"){
				}

				else if($judge === "judge5"){
				}
					else{

				
        	?>
          <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h2 class="title"><b>TALENT PORTION</b></h2>
                                   
                                </div>
                                <div class="card-content table-responsive">
                                    
                                    <table class="table" id="dataTable">
                                        <thead style="font-weight: bold;color: black;font-size: 80%">
                                            <th>Candidate Number</th>
                                            <th>Contestant Name</th>
                                            <th>Score</th>
                                            
                                        </thead>
                                        <tbody>
			<?php
						$link = mysqli_connect("localhost","root","","tabulation");
				  		
						
						$judge = $_SESSION['login_judge'];
			  			
						$sql_talent_portion = mysqli_query($link,"SELECT *FROM talent_portion");
						for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql_talent_portion) ; $a++ )
						{
							$candidate_no = $num_rows['candidate_no'];
							$name = $num_rows['name'];
							$judge1 = $num_rows['judge1'];
							$judge2 = $num_rows['judge2'];
							$judge3 = $num_rows['judge3'];
							
							if($judge == "judge1")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge1</td>
								</tr>
								
								";
							}
							elseif($judge == "judge2")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge2</td>
								</tr>
								
								";
							}
							
							elseif($judge == "judge3")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge3</td>
								</tr>
								
								";
							}
							
						}
	
			?>
				
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                            
                    </div>

				<div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h2 class="title"><b>ADVOCACY</b></h2>
                                   
                                </div>
                                <div class="card-content table-responsive">
                                    
                                    <table class="table" id="dataTable">
                                        <thead style="font-weight: bold;color: black;font-size: 80%">
                                            <th>Candidate Number</th>
                                            <th>Contestant Name</th>
                                            <th>Score</th>
                                            
                                        </thead>
                                        <tbody>
			<?php
						$link = mysqli_connect("localhost","root","","tabulation");
				  		
						
						$judge = $_SESSION['login_judge'];
			  			
						$sql_advocacy = mysqli_query($link,"SELECT *FROM advocacy");
						for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql_advocacy) ; $a++ )
						{
							$candidate_no = $num_rows['candidate_no'];
							$name = $num_rows['name'];
							$judge1 = $num_rows['judge1'];
							$judge2 = $num_rows['judge2'];
							$judge3 = $num_rows['judge3'];
							$judge4 = $num_rows['judge4'];
							$judge5 = $num_rows['judge5'];
							
							if($judge == "judge1")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge1</td>
								</tr>
								
								";
							}
							elseif($judge == "judge2")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge2</td>
								</tr>
								
								";
							}
							
							elseif($judge == "judge3")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge3</td>
								</tr>
								
								";
							}

							elseif($judge == "judge4")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge4</td>
								</tr>
								
								";
							}

							elseif($judge == "judge5")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge5</td>
								</tr>
								
								";
							}
							
						}
	
			?>
				
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> 
                </div>





                <?php } ?>




			<div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h2 class="title"><b>SPORTS WEAR</b></h2>
                                   
                                </div>
                                <div class="card-content table-responsive">
                                    
                                    <table class="table" id="dataTable">
                                        <thead style="font-weight: bold;color: black;font-size: 80%">
                                            <th>Candidate Number</th>
                                            <th>Contestant Name</th>
                                            <th>Score</th>
                                            
                                        </thead>
                                        <tbody>
			<?php
						$link = mysqli_connect("localhost","root","","tabulation");
				  		
						
						$judge = $_SESSION['login_judge'];
			  			
						$sql_sports_wear = mysqli_query($link,"SELECT *FROM sports_wear");
						for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql_sports_wear) ; $a++ )
						{
							$candidate_no = $num_rows['candidate_no'];
							$name = $num_rows['name'];
							$judge1 = $num_rows['judge1'];
							$judge2 = $num_rows['judge2'];
							$judge3 = $num_rows['judge3'];
							$judge4 = $num_rows['judge4'];
							$judge5 = $num_rows['judge5'];
							
							if($judge == "judge1")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge1</td>
								</tr>
								
								";
							}
							elseif($judge == "judge2")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge2</td>
								</tr>
								
								";
							}
							
							elseif($judge == "judge3")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge3</td>
								</tr>
								
								";
							}
							elseif($judge == "judge4")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge4</td>
								</tr>
								
								";
							}
							elseif($judge == "judge5")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge5</td>
								</tr>
								
								";
							}
							
						}
	
			?>
				
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                            
                    </div>
			
			<div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h2 class="title"><b>PRELIMINARY INTERVIEW</b></h2>
                                   
                                </div>
                                <div class="card-content table-responsive">
                                    
                                    <table class="table" id="dataTable">
                                        <thead style="font-weight: bold;color: black;font-size: 80%">
                                            <th>Candidate Number</th>
                                            <th>Contestant Name</th>
                                            <th>Score</th>
                                            
                                        </thead>
                                        <tbody>
			<?php
						$link = mysqli_connect("localhost","root","","tabulation");
				  		
						
						$judge = $_SESSION['login_judge'];
			  			
						$sql_preliminary_interview = mysqli_query($link,"SELECT *FROM preliminary_interview");
						for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql_preliminary_interview) ; $a++ )
						{
							$candidate_no = $num_rows['candidate_no'];
							$name = $num_rows['name'];
							$judge1 = $num_rows['judge1'];
							$judge2 = $num_rows['judge2'];
							$judge3 = $num_rows['judge3'];
							$judge4 = $num_rows['judge4'];
							$judge5 = $num_rows['judge5'];
							
							if($judge == "judge1")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge1</td>
								</tr>
								
								";
							}
							elseif($judge == "judge2")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge2</td>
								</tr>
								
								";
							}
							
							elseif($judge == "judge3")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge3</td>
								</tr>
								
								";
							}

							elseif($judge == "judge4")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge4</td>
								</tr>
								
								";
							}

							elseif($judge == "judge5")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge5</td>
								</tr>
								
								";
							}
							
						}
	
			?>
				
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                            
                    </div>
			
			<div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h2 class="title"><b>LONG GOWN AND FORMAL WEAR</b></h2>
                                   
                                </div>
                                <div class="card-content table-responsive">
                                    
                                    <table class="table" id="dataTable">
                                        <thead style="font-weight: bold;color: black;font-size: 80%">
                                            <th>Candidate Number</th>
                                            <th>Contestant Name</th>
                                            <th>Score</th>
                                            
                                        </thead>
                                        <tbody>
			<?php
						$link = mysqli_connect("localhost","root","","tabulation");
				  		
						
						$judge = $_SESSION['login_judge'];
			  			
						$sql_long_gown = mysqli_query($link,"SELECT *FROM long_gown_formal_wear");
						for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql_long_gown) ; $a++ )
						{
							$candidate_no = $num_rows['candidate_no'];
							$name = $num_rows['name'];
							$judge1 = $num_rows['judge1'];
							$judge2 = $num_rows['judge2'];
							$judge3 = $num_rows['judge3'];
							$judge4 = $num_rows['judge4'];
							$judge5 = $num_rows['judge5'];
							
							if($judge == "judge1")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge1</td>
								</tr>
								
								";
							}
							elseif($judge == "judge2")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge2</td>
								</tr>
								
								";
							}
							
							elseif($judge == "judge3")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge3</td>
								</tr>
								
								";
							}

							elseif($judge == "judge4")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge4</td>
								</tr>
								
								";
							}

							elseif($judge == "judge5")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge5</td>
								</tr>
								
								";
							}
							
						}
	
			?>
				
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                            
                    </div>
			
			<div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h2 class="title"><b>FINAL ROUND</b></h2>
                                   
                                </div>
                                <div class="card-content table-responsive">
                                    
                                    <table class="table" id="dataTable">
                                        <thead style="font-weight: bold;color: black;font-size: 80%">
                                            <th>Candidate Number</th>
                                            <th>Contestant Name</th>
                                            <th>Score</th>
                                            
                                        </thead>
                                        <tbody>
			<?php
						$link = mysqli_connect("localhost","root","","tabulation");
				  		
						
						$judge = $_SESSION['login_judge'];
			  			
						$sql_final_round = mysqli_query($link,"SELECT *FROM final_round");
						for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql_final_round) ; $a++ )
						{
							$candidate_no = $num_rows['candidate_no'];
							$name = $num_rows['name'];
							$judge1 = $num_rows['judge1'];
							$judge2 = $num_rows['judge2'];
							$judge3 = $num_rows['judge3'];
							$judge4 = $num_rows['judge4'];
							$judge5 = $num_rows['judge5'];
							
							if($judge == "judge1")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge1</td>
								</tr>
								
								";
							}

							elseif($judge == "judge2")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge2</td>
								</tr>
								
								";
							}
							
							elseif($judge == "judge3")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge3</td>
								</tr>
								
								";
							}

							elseif($judge == "judge4")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge4</td>
								</tr>
								
								";
							}
							
							elseif($judge == "judge5")
							{
								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$name</td>
									<td>$judge5</td>
								</tr>
								
								";
							}
							
						}
	
			?>
				
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                            
                    </div>

          
			
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container py-4 text-center">
        <p>&copy; This system was made by Jhon Ace Casabuena and CAPG Students</p>
      </div>
    </footer>

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
    
   
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
