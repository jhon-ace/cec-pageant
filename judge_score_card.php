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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="app.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">



    <!--  Material Dashboard CSS    -->

    <!--  CSS for Demo Purpose, don't include it in your project     -->

    <!--     Fonts and icons     -->

    <style type="text/css">
    	    html{
    		   scroll-behavior: smooth;
    		}
    		#myBtn{
			    display: none;
			    position: fixed;
			    bottom: 20px;
			    right: 30px;
			    z-index: 18px;
			    font-size: 18px;
			    border: none;
			    outline: none;
			    background-color: red;
			    color: white;
			    cursor: pointer;
			    padding: 15px;
			    border-radius: 4px;

				}
				#myBtn:hover{
				    background-color: green;
				}
				.header-text{
					font-family: Maiandra GD;
					text-align: Left;
				}
				td{
            	font-family: 'Livvic', sans-serif;
				}
    </style>
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
            <form class="form-inline my-2 my-lg-0" method="post">
				
              <a href="index.php"><button class="btn btn-outline-light my-2 my-sm-0 flo"  type='submit' name="logout">Log out</button></a>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <main role="main">
      <div class="album py-5 bg-light">
        <div class="container">
<!--         <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <center><div class="card-header align-items-center" style="background-color:#62B866;width:97%;margin-top:-18px;border-radius: 4px;">
                                    <h2 class="title text-white"><b>TALENT PORTION SCORE CARD</b></h2>
                                   
                                </div>
                            </center>
                                <div class="card-content table-responsive">
                                    
                                    <table class="table" id="dataTable1">
                                        <thead style="font-weight: bold;color: black;font-size: 80%">
                                        	<p class="text-center header-text"><b>Male Category</b></p>
                                            <th class="header-text">Candidate No.</th>
                                            <th class="header-text">Candidate Team</th>
                                            <th class="header-text">Contestant Name</th>
                                            <th class="header-text">Stage Present<br>(20pts)</th>
                                            <th class="header-text">Mastery<br>(40pts)<br></th>
                                            <th class="header-text">Uniqueness<br>(30pts)</th>
                                            <th class="header-text">Audience Impact<br>(10pts)</th>
                                        </thead>
                                        <tbody>
			<?php
						$link = mysqli_connect("localhost","root","","tabulation");
				  		
						
						$judge_session = $_SESSION['login_judge'];
			  			
						$sql_talent_portion = mysqli_query($link,"SELECT * FROM talent_portion where gender = 'Male' and name_judge = '$judge_session' order by gender DESC, talent_portion_sequence ASC");
						for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql_talent_portion) ; $a++ )
						{
							$candidate_no = $num_rows['talent_portion_sequence'];
							$candidate_team = $num_rows['team'];
							$name = $num_rows['name'];
							$judge = $num_rows['name_judge'];
							$stage_present = $num_rows['stage_present'];
							$mastery = $num_rows['mastery'];
							$uniqueness = $num_rows['uniqueness'];
							$audience_impact = $num_rows['audience_impact'];
							

								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$candidate_team</td>
									<td>$name</td>
									<td>$stage_present</td>
									<td>$mastery</td>
									<td>$uniqueness</td>
									<td>$audience_impact</td>
								</tr>
								
								";
							
							
						}
	
			?>
				
                                            
                                        </tbody>
                                    </table>
                                    <table class="table" id="dataTable2">
                                        <thead style="font-weight: bold;color: black;font-size: 80%">
											<p class="text-center header-text"><b>Female Category</b></p>
                                            <th class="header-text">Candidate No.</th>
                                            <th class="header-text">Candidate Team</th>
                                            <th class="header-text">Contestant Name</th>
                                            <th class="header-text">Stage Present<br>(20pts)</th>
                                            <th class="header-text">Mastery<br>(40pts)<br></th>
                                            <th class="header-text">Uniqueness<br>(30pts)</th>
                                            <th class="header-text">Audience Impact<br>(10pts)</th>
                                            
                                        </thead>
                                        <tbody>
			<?php
						$link = mysqli_connect("localhost","root","","tabulation");
				  		
						
						$judge_session = $_SESSION['login_judge'];
			  			
						$sql_talent_portion = mysqli_query($link,"SELECT * FROM talent_portion where gender = 'Female' and name_judge = '$judge_session' order by gender DESC, talent_portion_sequence ASC");
						for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql_talent_portion) ; $a++ )
						{
							$candidate_no = $num_rows['talent_portion_sequence'];
							$candidate_team = $num_rows['team'];
							$name = $num_rows['name'];
							$judge = $num_rows['name_judge'];
							$stage_present = $num_rows['stage_present'];
							$mastery = $num_rows['mastery'];
							$uniqueness = $num_rows['uniqueness'];
							$audience_impact = $num_rows['audience_impact'];
							

								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$candidate_team</td>
									<td>$name</td>
									<td>$stage_present</td>
									<td>$mastery</td>
									<td>$uniqueness</td>
									<td>$audience_impact</td>
								</tr>
								
								";
							
							
						}
	
			?>
				
                                            
                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <br><br>
-->
				<div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <center><div class="card-header align-items-center" style="background-color:#62B866;width:97%;margin-top:-18px;border-radius: 4px;">
                                    <h2 class="title text-white"><b>PRODUCTION SCORE CARD</b></h2>
                                   
                                </div>
                            </center>
                                <div class="card-content table-responsive">
                                    
                                    <table class="table" id="dataTable2">
                                        <thead style="font-weight: bold;color: black;font-size: 80%">
											<p class="text-center header-text"><b>Male Category</b></p>
                                            <th class="header-text">Candidate No.</th>
                                            <th class="header-text">Candidate Team</th>
                                            <th class="header-text">Contestant Name</th>
                                            <th class="header-text">Poise and Bearing<br>(30pts)</th>
                                            <th class="header-text">Mastery<br>(30pts)<br></th>
                                            <th class="header-text">Self Introduction<br>(30pts)</th>
                                            <th class="header-text">Audience Impact<br>(10pts)</th>
                                            
                                        </thead>
                                        <tbody>
<?php
						$link = mysqli_connect("localhost","root","","tabulation");
				  		
						
						$judge_session = $_SESSION['login_judge'];
			  			
						$sql_production_PoiseandBearing = mysqli_query($link,"SELECT * FROM production where gender = 'Male' and name_judge = '$judge_session' ORDER BY candidate_no ASC");
						for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql_production_PoiseandBearing) ; $a++ )
						{
							$candidate_no = $num_rows['candidate_no'];
							$candidate_team = $num_rows['team'];
							$name = $num_rows['name'];
							$judge = $num_rows['name_judge'];
							$poiseandbearing = $num_rows['poiseandbearing'];
							$mastery = $num_rows['mastery'];
							$self_introduction = $num_rows['self_introduction'];
							$audience_impact = $num_rows['audience_impact'];
							

								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$candidate_team</td>
									<td>$name</td>
									<td>$poiseandbearing</td>
									<td>$mastery</td>
									<td>$self_introduction</td>
									<td>$audience_impact</td>
								</tr>
								
								";
							
							
						}
	
			?>
				
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-content table-responsive">
                                    
                                    <table class="table" id="dataTable2">
                                        <thead style="font-weight: bold;color: black;font-size: 80%">
											<p class="text-center header-text"><b><br>Female Category</b></p>
                                            <th class="header-text">Candidate No.</th>
                                            <th class="header-text">Candidate Team</th>
                                            <th class="header-text">Contestant Name</th>
                                            <th class="header-text">Poise and Bearing<br>(30pts)</th>
                                            <th class="header-text">Mastery<br>(30pts)<br></th>
                                            <th class="header-text">Self Introduction<br>(30pts)</th>
                                            <th class="header-text">Audience Impact<br>(10pts)</th>
                                            
                                        </thead>
                                        <tbody>
<?php
						$link = mysqli_connect("localhost","root","","tabulation");
				  		
						
						$judge_session = $_SESSION['login_judge'];
			  			
						$sql_production_PoiseandBearing = mysqli_query($link,"SELECT * FROM production where gender = 'Female' and name_judge = '$judge_session' ORDER BY candidate_no ASC");
						for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql_production_PoiseandBearing) ; $a++ )
						{
							$candidate_no = $num_rows['candidate_no'];
							$candidate_team = $num_rows['team'];
							$name = $num_rows['name'];
							$judge = $num_rows['name_judge'];
							$poiseandbearing = $num_rows['poiseandbearing'];
							$mastery = $num_rows['mastery'];
							$self_introduction = $num_rows['self_introduction'];
							$audience_impact = $num_rows['audience_impact'];
							

								echo "
								<tr>
									<td>$candidate_no</td>
									<td>$candidate_team</td>
									<td>$name</td>
									<td>$poiseandbearing</td>
									<td>$mastery</td>
									<td>$self_introduction</td>
									<td>$audience_impact</td>
								</tr>
								
								";
							
							
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
                                    <h2 class="title"><text style="font-family: Arial Rounded MT"><b>SPORTS WEAR ATTIRE</b></text></h2>
                                   
                                </div>
                                <div class="card-content table-responsive">
                                    
                                    <table class="table" id="dataTable">
                                        <thead style="font-weight: bold;color: black;font-size: 80%">
                                            <th class="header-text">Candidate Number</th>
                                            <th class="header-text">Contestant Name</th>
                                            <th class="header-text">Score</th>
                                            
                                        </thead>
                                        <tbody>
			<?php
						$link = mysqli_connect("localhost","root","","tabulation");
				  		
						
						$judge = $_SESSION['login_judge'];
			  			
						$sql_sports_wear = mysqli_query($link,"SELECT *FROM sports_wear ORDER BY candidate_no ASC,gender ASC");
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
                                    <h2 class="title"><b>PRELIMINARY INTERVIEWS</b></h2>
                                   
                                </div>
                                <div class="card-content table-responsive">
                                    
                                    <table class="table" id="dataTable">
                                        <thead style="font-weight: bold;color: black;font-size: 80%">
                                            <th class="header-text">Candidate Number</th>
                                            <th class="header-text">Contestant Name</th>
                                            <th class="header-text">Score</th>
                                            
                                        </thead>
                                        <tbody>
			<?php
						$link = mysqli_connect("localhost","root","","tabulation");
				  		
						
						$judge = $_SESSION['login_judge'];
			  			
						$sql_preliminary_interview = mysqli_query($link,"SELECT *FROM preliminary_interview ORDER BY candidate_no ASC,gender ASC");
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
                                    <h2 class="title"><b>FORMAL WEAR AND EVENING GOWN</b></h2>
                                   
                                </div>
                                <div class="card-content table-responsive">
                                    
                                    <table class="table" id="dataTable">
                                        <thead style="font-weight: bold;color: black;font-size: 80%">
                                            <th class="header-text">Candidate Number</th>
                                            <th class="header-text">Contestant Name</th>
                                            <th class="header-text">Score</th>
                                            
                                        </thead>
                                        <tbody>
			<?php
						$link = mysqli_connect("localhost","root","","tabulation");
				  		
						
						$judge = $_SESSION['login_judge'];
			  			
						$sql_long_gown = mysqli_query($link,"SELECT *FROM long_gown_formal_wear ORDER BY candidate_no ASC,gender ASC");
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
                                    <h2 class="title"><b>FINAL INTERVIEWS</b></h2>
                                   
                                </div>
                                <div class="card-content table-responsive">
                                    
                                    <table class="table" id="dataTable">
                                        <thead style="font-weight: bold;color: black;font-size: 80%">
                                            <th class="header-text">Candidate Number</th>
                                            <th class="header-text">Contestant Name</th>
                                            <th class="header-text">Score</th>
                                            
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
                -->

          
			
        </div>
      </div>
<button onclick ="topFunction()" id="myBtn"><b><i class="fa fa-arrow-up fa-lg"></i></b></button>
    </main>
    <footer class="text-muted">
      <div class="container py-4 text-center">
        <p>&copy; The system was developed by Jhon Ace Casabuena and Computer Studies Department</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	  <form method="post">
	  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    <script type="text/javascript">
        $(document).ready(function () {
    $('#dataTable1').DataTable();
});
    </script>
        <script type="text/javascript">
        $(document).ready(function () {
    $('#dataTable2').DataTable();
});
    </script>
       <script type="text/javascript">
    	let mybutton = document.getElementById("myBtn");
    	window.onscroll = function() 
    	{scrollFunction()};

    	function scrollFunction() {
    		if(document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    			mybutton.style.display = "block";
    		}
    		else
    		{
    			mybutton.style.display = "none";
    		}
    	}

    	function topFunction() {
    		document.body.scrollTop = 0;
    		document.documentElement.scrollTop = 0;
    	}
    </script>

 
  </body>
</html>
