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


	if($score <101)
	{
	
		$update = "UPDATE score_card SET sports_wear = '$score',sports_wear_vote = '1' WHERE name_contestant = '$name_contestant' AND name_judge = '$judge'";
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
					$sql_sports_wear_judge1 = "UPDATE sports_wear SET judge1 = '$score'WHERE name = '$name_contestant'";
					mysqli_query($link,$sql_sports_wear_judge1);
				}
				elseif($judge == 'judge2')
				{
					$sql_sports_wear_judge2 = "UPDATE sports_wear SET judge2 = '$score' WHERE name = '$name_contestant'";
					mysqli_query($link,$sql_sports_wear_judge2);
				}
				elseif($judge == 'judge3')
				{
					$sql_sports_wear_judge3 = "UPDATE sports_wear SET judge3 = '$score' WHERE name = '$name_contestant'";
					mysqli_query($link,$sql_sports_wear_judge3);
				}
				elseif($judge == 'judge4')
				{
					$sql_sports_wear_judge4 = "UPDATE sports_wear SET judge4 = '$score' WHERE name = '$name_contestant'";
					mysqli_query($link,$sql_sports_wear_judge4);
				}
				elseif($judge == 'judge5')
				{
					$sql_sports_wear_judge5 = "UPDATE sports_wear SET judge5 = '$score' WHERE name = '$name_contestant'";
					mysqli_query($link,$sql_sports_wear_judge5);
				}
	}else
	{
		$message = "Input is greater than 100!";
      echo "<script type='text/javascript'>alert('$message'); window.location.assign('sports_wear.php')</script>";
	}
}

			if(isset($_POST['submit_edit_score']))
			{
				$edit_scoreInput = $_POST['edit_scoreInput'];
				$edit_judge = $_POST['edit_judge'];
				$edit_name_contestant = $_POST['edit_name_contestant'];
				$sports_edit_relevance = $_POST['sports_edit_relevance'];

					if($sports_edit_relevance == 0)
					{
						$updateScoreCard = "UPDATE score_card SET sports_wear = '$edit_scoreInput',sports_wear_vote = '1', sports_wear_edit = 1 WHERE name_contestant = '$edit_name_contestant' AND name_judge = '$edit_judge'";
								mysqli_query($link,$updateScoreCard);
		
						if($edit_judge == 'judge1')
						{
							$sql_sports_wear_judge1 = "UPDATE sports_wear SET judge1 = '$edit_scoreInput' WHERE name = '$edit_name_contestant'";
							mysqli_query($link,$sql_sports_wear_judge1);
						}
						elseif($edit_judge == 'judge2')
						{
							$sql_sports_wear_judge2 = "UPDATE sports_wear SET judge2 = '$edit_scoreInput' WHERE name = '$edit_name_contestant'";
							mysqli_query($link,$sql_sports_wear_judge2);
						}
						elseif($edit_judge == 'judge3')
						{
							$sql_sports_wear_judge3 = "UPDATE sports_wear SET judge3 = '$edit_scoreInput' WHERE name = '$edit_name_contestant'";
							mysqli_query($link,$sql_sports_wear_judge3);
						}
						elseif($edit_judge == 'judge4')
						{
							$sql_sports_wear_judge4 = "UPDATE sports_wear SET judge4 = '$edit_scoreInput' WHERE name = '$edit_name_contestant'";
							mysqli_query($link,$sql_sports_wear_judge4);
						}
						elseif($edit_judge == 'judge5')
						{
							$sql_sports_wear_judge5 = "UPDATE sports_wear SET judge5 = '$edit_scoreInput' WHERE name = '$edit_name_contestant'";
							mysqli_query($link,$sql_sports_wear_judge5);
						}

					}
					else
					{

						echo '<script>alert("You can\'t update twice");window.location.assign("sports_wear_relevance.php")</script>';
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
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <title>Sports Wear</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/app.css" rel="stylesheet">
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
				input.re{
					 border-color: none;
            color:green;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-bottom: 1px solid black !important;
            border: 0;
            border-radius: 0;
            text-decoration: none;
            background: transparent;
            text-align: center;
				}
				input.red{
					 border-color: none;
            color:red;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-bottom: 1px solid black !important;
            border: 0;
            border-radius: 0;
            text-decoration: none;
            background: transparent;
            width: 100px;
				}
				input:focus {
 					border: none;
 					outline: none;
				}


    </style>
    
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
															$sports_wear_vote = $num_rowst['sports_wear_vote'];

																if($sports_wear_vote == 0)
																	{
																		echo "<a href='#'><span class='navbar-brand' href='#''><button class = 'btn btn-outline-info' type='button' data-toggle='modal' data-target='#backtocatergories'>Back to Categories</button></span></a>";
																	}
																	else
																	{
																		echo "<a href='Categories.php'><span class='navbar-brand' href='#''><button class = 'btn btn-outline-info'>Back to Categories</button></span></a>";
																	}
															}
														}
								?>

	        	<span class="navbar-brand" href="#">Logged in as 
	        		<strong style="color: yellow">
				  		<?php $judge = $_SESSION['login_judge'];  echo "<span style='text-transform: uppercase'>$judge</span>" ?></strong>
						</span>
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
    <button onclick ="topFunction()" id="myBtn"><b><i class="fa fa-arrow-up fa-lg"></i></b></button>
    <main role="main">
      <section class="jumbotron jumbotron-fluid text-left py-4">
        <div class="container">
		      <h3 class="jumbotron-heading">Sports Wear (100%)</h3>
		        <p>CRITERIA:
							<ul>
								<li class="active"><a href="sports_wear_relevance.php">Relevance to Sports (30)</a></li>
								<li><a href="" style="color: black;" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'">Beauty and Appeal (25)</a></li>
								<li><a href="" style="color: black;" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'">Suitability to the Wearer (20)</a></li>
								<li><a href="" style="color: black;" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'">Stage Presence (15)</a></li>
								<li><a href="" style="color: black;" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'">Audience Impact (10)</a></li>
							</ul>
						</p>
        </div>
      </section>

      <div class="album py-5">
        <div class="container">
	        <center>
	          <div class="row">
				  		<?php
						
							$link = mysqli_connect("localhost","root","","tabulation");
					  		
							$sql = mysqli_query($link,"SELECT *FROM contestant ORDER BY candidate_no ASC,gender ASC");
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
										  <img class='align-self-start mr-3' src='img/candidates/$picture' height='300px' alt='Generic placeholder image'>
										</div>
											<div class='media col-md-12 my-4'>
												<div class='media-body'>
													<h5 class='mt-0' style='font-family:OCR A'>Candidate #$candidate_no - $team</h5>
													<p><b style='font-family: Pristina Regular;font-size: 30px'>$status $full_name </b></p>";
							
													$sql1 = mysqli_query($link,"SELECT *FROM score_card WHERE name_contestant = '$full_name' AND name_judge = '$judge'");
													
													for($b = 0 ; $b < $num_rows1 = mysqli_fetch_array($sql1) ; $b++ )
													{
														$id_contestant1 = $num_rows1['id_contestant'];
														$name_judge = $num_rows1['name_judge'];
														$sports_wear = $num_rows1['sports_wear'];
														
														if($name_judge == $judge)
														{
															$sports_wear_editt = $num_rows1['sports_wear_edit'];
															$sports_wear_vote = $num_rows1['sports_wear_vote'];
															if($sports_wear_vote == 0)
															{
													echo "

													<div class = 'col-md-6 col-lg-4 my-7'>
														<form method = 'post'>
															<div class='input-group mb-3'>
															  <input type='number' min='1' max = '30' class='form-control' placeholder='Score' aria-label='Recipient's username' aria-describedby='button-addon2' name = 'score' required maxlength='3' pattern='[0-9]{1,}'>
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
																<button class='close' type='button' data-dismiss='modal' aria-label='Close'></button>
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
											<div class='col-md-6 col-lg-7 my-1'>
												<table>
													<tr>
														<td style='display:none'>$full_name</td>
														<td style='display:none'>$sports_wear</td>
														<td style='display:none'>$judge</td>
														<td style='display:none'>$full_name</td>
														<td style='display:none'>$candidate_no</td>
														<td style='display:none'>$team</td>
														<td style='display:none'>$sports_wear_editt</td>
														<td><center>
																<span style = 'color:red;font-family:Calibri'>Your vote has already been recorded for this contestant!</span><br>
														  <a href='' class='editScore' data-toggle='modal' data-target='#editScoreModal' style='text-decoration:none;color: black'><span class='btn my-2 btn-outline-secondary'><i class='fa fa-pencil-square-o'> <text style='font-family:Century Gothic'>Edit Score</text></i></span></a>
														</center></td>
													</tr>
												</table>
											</div>
													</div>
												  </div>
												
												
														
														

														
													 ";
													
										}
									}
									
									
									
								}
										
												
											
										
									}
					?>

			      </div>
			    </center>
      	</div>
    </main>

    <div class="container text-center pt-3" >
        <p style="font-family:'Livvic', sans-serif;font-size: 14px;margin-top: -35px">&copy; This system was made by Jhon Ace Casabuena and Computer Studies Department</p>
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
          </div>
        </div>
      </div>
    </div>



   		<div class="modal fade" id="backtocatergories" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   			<div class="modal-dialog" role="document">
   				<div class="modal-content">
   					<div class="modal-header">
   						<h5 class="modal-title" id="exampleModalLabel">Information</h5>
   						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
   							
   						</button>
   					</div>
   					<div class="modal-body">
   						All fields of candidates must be filled up completely!<br>
   					</div>
   					<div class="modal-footer">
   						<a href="categories.php"><button class="btn btn-danger" type="button">Back to Categories</button></a>
   						<button class="btn btn-secondary" type="button" data-dismiss="modal">Okay</button>
   					</div>
   				</div>
   			</div>
   		</div>
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

    <script type="text/javascript">
    	let mybutton = document.getElementById("myBtn");
    	window.onscroll = function() 
    	{scrollFunction()};

    	function scrollFunction() {
    		if(document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
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
<form method="post">
						<div class='modal fade' id='editScoreModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'           aria-hidden='true'>
							<div class='modal-dialog' role='document'>
								<div class='modal-content'>
									<div class='modal-header'>
										<h5 class='modal-title' id='exampleModalLabel'>Edit Score</h5><br>
										<button class='close' type='button' data-dismiss='modal' aria-label='Close'></button>
									</div>
									<div class='modal-body'>
										<h6>Relevance to Sports (30pts)</h6><p></p>
										<p style="color:red;">Note: You can only update once.</p>
										
										  Contestant Number: <input type="text" id = "id_contestant" class="re"readonly disabled /><br>
										  Contestant Team: <input type="text" id = "team" class="re"readonly disabled/><br>
											Contestant Name: <input type="text" id = "name_contestant" name="edit_name_contestant" class="re"readonly style="cursor:auto;" /><br><br>
											<input type="text" id="sports_edit_relevance" name="sports_edit_relevance" class="re"readonly hidden />
											Submitted Score: <input type="number" id = "initial_score" class="re"readonly disabled/><br>
											<input type="text" id = "judge" name="edit_judge" class="re"readonly hidden /><br>
											New Score: <input type="number" min="1" max="30" name="edit_scoreInput" class="red" required aria-describedby='button-addon3'/>
									</div>
									<div class='modal-footer'>

																		<button class='btn btn-secondary' type='button' data-dismiss='modal'>Cancel</button>
																		<button class = 'btn btn-danger' type='submit' name ='submit_edit_score' id='button-addon3'>Update</button>
										
									</div>
								</div>
							</div>
						</div>
</form>

		<script type="text/javascript">
			      $(document).ready(function () {
                $('.editScore').on('click', function () {

                    //$('#editModal').modal('show');

                        $tr = $(this).closest('tr');
                    var data = $tr.children("td").map(function () {
                        return $(this).text();
                    }).get();

                    console.log(data);
                    $('#initial_score').val(data[1]);
                    $('#judge').val(data[2]);
                    $('#name_contestant').val(data[3]);
                    $('#id_contestant').val(data[4]);
                    $('#team').val(data[5]);
                    $('#sports_edit_relevance').val(data[6]);
                   
                });
            });
		</script>