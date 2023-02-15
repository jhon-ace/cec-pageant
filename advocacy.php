<?php
include('config.php');

if(isset($_POST['logout']))
{
	session_destroy();
	header('location:index.php');
	
}
if(empty($_SESSION['login_judge']))
{
	header('location:index.php');
}
if(isset($_POST['submit_score']))
{
	$score = $_POST['score'];
	$judge = $_POST['judge'];
	$name_contestant = $_POST['name_contestant'];
	$id_contestant = $_POST['submit_score'];
	if($score <11){
	$update = "UPDATE score_card SET advocacy = '$score',advocacy_vote = '1' WHERE name_contestant = '$name_contestant' AND name_judge = '$judge'";
	mysqli_query($link,$update);
	
	$sql_grand_total = mysqli_query($link,"SELECT *FROM score_card WHERE id_contestant = '$id_contestant' AND name_judge = '$judge'");
				  		
		for($d = 0 ; $d < $num_rows2 = mysqli_fetch_array($sql_grand_total) ; $d++ )
		{
			$talent_portion = $num_rows2['talent_portion'];
			$sports_wear = $num_rows2['sports_wear'];
			$preliminary_interview= $num_rows2['preliminary_interview'];
			$long_gown_formal_wear = $num_rows2['long_gown_formal_wear'];
			$advocacy = $num_rows2['advocacy'];
			
			$grand_total = ($talent_portion * .20) + ($sports_wear* .15) + ($preliminary_interview * .30) + ($long_gown_formal_wear * .25) + $advocacy;
			
			$update_grand_total = "UPDATE score_card SET grand_total = '$grand_total' WHERE id_contestant = '$id_contestant' AND name_judge = '$judge'";
			mysqli_query($link,$update_grand_total);
		}
	
	if($judge == 'judge1')
	{
		$sql_talent_night_judge1 = "UPDATE advocacy SET judge1 = '$score' WHERE name = '$name_contestant'";
		mysqli_query($link,$sql_talent_night_judge1);
	}
	elseif($judge == 'judge2')
	{
		$sql_talent_night_judge2 = "UPDATE advocacy SET judge2 = '$score' WHERE name = '$name_contestant'";
		mysqli_query($link,$sql_talent_night_judge2);
	}
	elseif($judge == 'judge3')
	{
		$sql_talent_night_judge3 = "UPDATE advocacy SET judge3 = '$score' WHERE name = '$name_contestant'";
		mysqli_query($link,$sql_talent_night_judge3);
	}
	}else{
		$message = "Input must not greater than 10!";
      echo "<script type='text/javascript'>alert('$message'); window.location.assign('advocacy.php')</script>";
	}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->
    <link rel="shortcut icon" href="img/final_logo.png" type="image/x-icon">
    <link rel="icon" href="img/final_logo.png" type="image/x-icon">

    <title>Advocacy</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/app.css" rel="stylesheet">
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
			
<?php
		$link = mysqli_connect("localhost","root","","tabulation");
						
						$sql = mysqli_query($link,"SELECT *FROM contestant ORDER BY id_contestant ASC");
						$temp;
						$num2 = 0;
						$modal = 0;
						$judge = $_SESSION['login_judge'];
						for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
						{
							$id_contestant = $num_rows['id_contestant'];
							$gender = $num_rows['gender'];
							$team = $num_rows['team'];
							$full_name = $num_rows['full_name'];
							$candidate_no = $num_rows['candidate_no'];
							$picture = $num_rows['picture'];
							$modal++;
						}
		$judge = $_SESSION['login_judge'];
		$sql5 = mysqli_query($link,"SELECT *FROM score_card WHERE name_contestant = '$full_name' AND name_judge = '$judge'");
							
			for($b = 0 ; $b < $num_rowst = mysqli_fetch_array($sql5) ; $b++ )
				{
					$id_contestant1 = $num_rowst['id_contestant'];
					$name_judge = $num_rowst['name_judge'];

				if($name_judge == $judge)
				{
					$advocacy = $num_rowst['advocacy_vote'];
						if($advocacy == 0)
							{
								echo "<a href='#'><span class='navbar-brand' href='#''><button class = 'btn btn-outline-info' type='button' data-toggle='modal' data-target='#exampleModal200001'>Back to Categories</button></span></a>";

							}
							else{
								echo "<a href='Categories.php'><span class='navbar-brand' href='#''><button class = 'btn btn-outline-info'>Back to Categories</button></span></a>";


								
							}
						}
					}
				?>
			
		<span class="navbar-brand" href="#">Logged in as <strong style="color:yellow">
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
      <section class="jumbotron jumbotron-fluid text-left py-5">
        <div class="container">
          <h2 class="jumbotron-heading">Advocacy (10%)</h2>
          
        </div>
      </section>
      <div class="album py-5">
        <div class="container">
        	<center>
          <div class="row">
			  <?php
					
						$link = mysqli_connect("localhost","root","","tabulation");
				  		
						$sql = mysqli_query($link,"SELECT *FROM contestant ORDER BY id_contestant ASC");
				  		$temp;
						$num2 = 0;
						$modal = 0;
						$judge = $_SESSION['login_judge'];
						for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
								{
									$id_contestant = $num_rows['id_contestant'];
									$gender = $num_rows['gender'];
									$team = $num_rows['team'];
									$full_name = $num_rows['full_name'];
									$candidate_no = $num_rows['candidate_no'];
									$picture = $num_rows['picture'];
									$modal++;
									if($gender == "Male")
									{
										$status = "Mr.";
									}
									else
									{
										$status = "Ms.";
									}
									
										echo "
										<div class='media-body'>
										<img class='align-self-start mr-3' src='img/candidates/$picture' height='200px' alt='Generic placeholder image'></div>
											<div class='media col-md-12 my-4'>
												  
												  <div class='media-body'>
													<h4 class='mt-0'>Candidate #$candidate_no - $team</h4>
													<p><b>$status $full_name </b></p>
													
										
											";
							
						$sql1 = mysqli_query($link,"SELECT *FROM score_card WHERE name_contestant = '$full_name' AND name_judge = '$judge'");
						
						for($b = 0 ; $b < $num_rows1 = mysqli_fetch_array($sql1) ; $b++ )
								{
									$id_contestant1 = $num_rows1['id_contestant'];
									$name_judge = $num_rows1['name_judge'];
									
									
									
									if($name_judge == $judge)
									{
										$advocacy_vote = $num_rows1['advocacy_vote'];
										if($advocacy_vote == 0)
										{
											echo "
											<div class = 'row'>
											<form method = 'post'>
											<div class='input-group mb-3'>
													  <input type='text' max = '100' class='form-control' placeholder='Score' aria-label='Recipient's username' aria-describedby='button-addon2' name = 'score' required maxlength='3' pattern='[0-9]{1,}'>
													  <input type = 'hidden' name ='judge' value='$judge'>
													  <input type = 'hidden' name ='name_contestant' value='$full_name'>
													  <div class='input-group-append'>
														&nbsp<button class='btn btn-primary'  type='button' data-toggle='modal' data-target='#exampleModal$modal' >Submit Score</button>
													  </div>
													</div>
												  </div>
												</div>
												</div>	
											
											
	  <div class='modal fade' id='exampleModal$modal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
      <div class='modal-dialog' role='document'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h5 class='modal-title' id='exampleModalLabel'>Are you sure?</h5>
            <button class='close' type='button' data-dismiss='modal' aria-label='Close'>
          
            </button>
          </div>
          <div class='modal-body'>Select 'Submit' below if you are sure with your score.</div>
          <div class='modal-footer'>
            <button class='btn btn-secondary' type='button' data-dismiss='modal'>Cancel</button>
			
				 <button class = 'btn btn-danger' name = 'submit_score' id='button-addon2'
														value = '$id_contestant'>Submit</button>
			 
           
          </div>
        </div>
      </div>
    </div>
	 </form>
													 ";
											break;
										}
										else
										{
											echo "
											<div class='input-group mb-3' >
													  
													  <span style = 'color:red'>You already voted this contestant!</span>
													  </div>
													</div>
												  </div>
												
												
														
														

														
													 ";
										}
									}
									
									
									
								}
										
												
											
										
								}
					?>
            <!-- LOOP HERE -->
            
            <!-- ... -->
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
			 
           
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal200001" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   			<div class="modal-dialog" role="document">
   				<div class="modal-content">
   					<div class="modal-header">
   						<h5 class="modal-title" id="exampleModalLabel">Information</h5>
   						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
   							
   						</button>
   					</div>
   					<div class="modal-body">All fields of candidates must be filled up completely!</div>
   					<div class="modal-footer">
   						<button class="btn btn-secondary" type="button" data-dismiss="modal">Ok</button>
	
   					</div>
   				</div>
   			</div>
   		</div>
	 </form>
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
