<?php
include('config.php');

//ddddd
///aces
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

	$judge_session = $_SESSION['login_judge'];
	$score = $_POST['score'];
	$judge = $_POST['judge'];
	$name_contestant = $_POST['name_contestant'];
	$id_contestant = $_POST['submit_score'];


	if($score <101)
	{
	
		$update = "UPDATE score_card SET talent_portion_audience_impact = '$score',talent_portion_audience_impact_vote = '1' WHERE name_contestant = '$name_contestant' AND name_judge = '$judge'";
		mysqli_query($link,$update);
		
		$sql_grand_total = mysqli_query($link,"SELECT  id_contestant, name_judge, 
			SUM(talent_portion_stagePresent)/3 as 'talent_portion_stagePresent', 
			SUM(talent_portion_mastery)/3 as 'talent_portion_mastery', 
			SUM(talent_portion_uniqueness)/3 as 'talent_portion_uniqueness', 
			SUM(talent_portion_audience_impact)/3 as 'talent_portion_audience_impact', 
			SUM(production_PoiseandBearing)/7 as 'production_PoiseandBearing', 
			SUM(production_mastery)/7 as 'production_mastery', 
			SUM(production_self_introduction)/7 as 'production_self_introduction', 
			SUM(production_audience_impact)/7 as 'production_audience_impact',
			SUM(sports_wear_figure)/7 as 'sports_wear_figure', 
			SUM(sports_wear_sports_identity)/7 as 'sports_wear_sports_identity', 
			SUM(sports_wear_PoiseandBearing)/7 as 'sports_wear_PoiseandBearing', 
			SUM(sports_wear_overall_impact)/7 as 'sports_wear_overall_impact', 
			SUM(preliminary_interview_WitandContext)/7 as 'preliminary_interview_WitandContext', 
			SUM(preliminary_interview_stagePresent)/7 as 'preliminary_interview_stagePresent', 
			SUM(preliminary_interview_ProjectionandDelivery)/7 as 'preliminary_interview_ProjectionandDelivery', 
			SUM(preliminary_interview_overall_impact)/7 as 'preliminary_interview_overall_impact',
			SUM(formal_wear_DesignandFitting)/7 as 'formal_wear_DesignandFitting', 
			SUM(formal_wear_stageDeportment)/7 as 'formal_wear_stageDeportment', 
			SUM(formal_wear_PoiseandBearing)/7 as 'formal_wear_PoiseandBearing', 
			SUM(formal_wear_overall_impact)/7 as 'formal_wear_overall_impact',
			SUM(final_interview_WitandContext)/7 as 'final_interview_WitandContext', 
			SUM(final_interview_stagePresence)/7 as 'final_interview_stagePresence', 
			SUM(final_interview_ProjectionandDelivery)/7 as 'final_interview_ProjectionandDelivery', 
			SUM(final_interview_overall_impact)/7 as 'final_interview_overall_impact'
			FROM score_card WHERE id_contestant = '$id_contestant' AND name_judge = '$judge'");
					  		
			for($d = 0 ; $d < $num_rows2 = mysqli_fetch_array($sql_grand_total) ; $d++ )
			{
						//       TALENT PORTION  //

				$talent_portion_stagePresent = $num_rows2['talent_portion_stagePresent'];
				$talent_portion_mastery = $num_rows2['talent_portion_mastery'];
				$talent_portion_uniqueness = $num_rows2['talent_portion_uniqueness'];
				$talent_portion_audience_impact = $num_rows2['talent_portion_audience_impact'];

				$talent_portion_stagePresent_average = ROUND($talent_portion_stagePresent,2);
				$talent_portion_mastery_average = ROUND($talent_portion_mastery,2);
				$talent_portion_uniqueness_average = ROUND($talent_portion_uniqueness,2);
				$talent_portion_audience_impact_average = ROUND($talent_portion_audience_impact,2);

				$talent_portion_total = ROUND($talent_portion_stagePresent_average + $talent_portion_mastery_average + $talent_portion_uniqueness_average + $talent_portion_audience_impact_average,2);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

				//                PRODUCTION NUMBER               //////////////////

				$production_PoiseandBearing = $num_rows2['production_PoiseandBearing'];
				$production_mastery = $num_rows2['production_mastery'];
				$production_self_introduction = $num_rows2['production_self_introduction'];
				$production_audience_impact = $num_rows2['production_audience_impact'];

				$production_PoiseandBearing_average = ROUND($production_PoiseandBearing,2);
				$production_mastery_average = ROUND($production_mastery,2);
				$production_self_introduction_average = ROUND($production_self_introduction,2);
				$production_audience_impact_average = ROUND($production_audience_impact,2);

				$production_total = ROUND($production_PoiseandBearing_average + $production_mastery_average + $production_self_introduction_average + $production_audience_impact_average,2);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

					//                     SPORTS WEAR            ////////

				$sports_wear_figure = $num_rows2['sports_wear_figure'];
				$sports_wear_sports_identity = $num_rows2['sports_wear_sports_identity'];
				$sports_wear_PoiseandBearing = $num_rows2['sports_wear_PoiseandBearing'];
				$sports_wear_overall_impact = $num_rows2['sports_wear_overall_impact'];

				$sports_wear_figure_average = ROUND($sports_wear_figure,2);
				$sports_wear_sports_identity_average = ROUND($sports_wear_sports_identity,2);
				$sports_wear_PoiseandBearing_average = ROUND($sports_wear_PoiseandBearing,2);
				$sports_wear_overall_impact_average = ROUND($sports_wear_overall_impact,2);

				$sports_wear_total = ROUND($sports_wear_figure_average + $sports_wear_sports_identity_average + $sports_wear_PoiseandBearing_average + $sports_wear_overall_impact_average,2);


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


					////////////////     	PRELIMINARY INTERVIEW                      ///////
				$preliminary_interview_WitandContext = $num_rows2['preliminary_interview_WitandContext'];
				$preliminary_interview_stagePresent = $num_rows2['preliminary_interview_stagePresent'];
				$preliminary_interview_ProjectionandDelivery = $num_rows2['preliminary_interview_ProjectionandDelivery'];
				$preliminary_interview_overall_impact = $num_rows2['preliminary_interview_overall_impact'];

				$preliminary_interview_WitandContext_average = ROUND($preliminary_interview_WitandContext,2);
				$preliminary_interview_stagePresent_average = ROUND($preliminary_interview_stagePresent,2);
				$preliminary_interview_ProjectionandDelivery_average = ROUND($preliminary_interview_ProjectionandDelivery,2);
				$preliminary_interview_overall_impact_average = ROUND($preliminary_interview_overall_impact,2);

				$preliminary_interview_total = ROUND($preliminary_interview_WitandContext_average + $preliminary_interview_stagePresent_average + $preliminary_interview_ProjectionandDelivery_average + $preliminary_interview_overall_impact_average,2);


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

				///                FORMAL WEAR & EVENING GOWN

				$formal_wear_DesignandFitting = $num_rows2['formal_wear_DesignandFitting'];
				$formal_wear_stageDeportment = $num_rows2['formal_wear_stageDeportment'];
				$formal_wear_PoiseandBearing = $num_rows2['formal_wear_PoiseandBearing'];
				$formal_wear_overall_impact = $num_rows2['formal_wear_overall_impact'];

				$formal_wear_DesignandFitting_average = ROUND($formal_wear_DesignandFitting,2);
				$formal_wear_stageDeportment_average = ROUND($formal_wear_stageDeportment,2);
				$formal_wear_PoiseandBearing_average = ROUND($formal_wear_PoiseandBearing,2);
				$formal_wear_overall_impact_average = ROUND($formal_wear_overall_impact,2);

				$formal_wear_total = ROUND($formal_wear_DesignandFitting_average + $formal_wear_stageDeportment_average + $formal_wear_PoiseandBearing_average + $formal_wear_overall_impact_average,2);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

					///////////             final  interview   

				$final_interview_WitandContext = $num_rows2['final_interview_WitandContext'];
				$final_interview_stagePresence = $num_rows2['final_interview_stagePresence'];
				$final_interview_ProjectionandDelivery = $num_rows2['final_interview_ProjectionandDelivery'];
				$final_interview_overall_impact = $num_rows2['final_interview_overall_impact'];

				$final_interview_WitandContext_average = ROUND($final_interview_WitandContext,2);
				$final_interview_stagePresence_average = ROUND($final_interview_stagePresence,2);
				$final_interview_ProjectionandDelivery_average = ROUND($final_interview_ProjectionandDelivery,2);
				$final_interview_overall_impact_average = ROUND($final_interview_overall_impact,2);

				$final_interview_total = ROUND($final_interview_WitandContext_average + $final_interview_stagePresence_average + $final_interview_ProjectionandDelivery_average + $final_interview_overall_impact_average,2);

				//grand total is the top 3 
				$grand_total = ($talent_portion_total * .25) + ($production_total * .10) + ($sports_wear_total* .10) + ($preliminary_interview_total * .15) + ($formal_wear_total * .15);
				
				$update_grand_total = "UPDATE score_card SET grand_total = '$grand_total' WHERE id_contestant = '$id_contestant' AND name_judge = '$judge'";
				mysqli_query($link,$update_grand_total);

			}
//x
				$sql_talent_portion_audience_impact_updateByJudgeName = "UPDATE talent_portion SET audience_impact = '$score' WHERE name = '$name_contestant' and name_judge = '$judge_session'";
				mysqli_query($link,$sql_talent_portion_audience_impact_updateByJudgeName);
			
	}
	else
	{
		$message = "Input is greater than 100!";
      echo "<script type='text/javascript'>alert('$message'); window.location.assign('sports_wear.php')</script>";
	}
}

			if(isset($_POST['submit_edit_score']))
			{
				$judge_session = $_SESSION['login_judge'];
				$edit_scoreInput = $_POST['edit_scoreInput'];
				$edit_judge = $_POST['edit_judge'];
				$edit_name_contestant = $_POST['edit_name_contestant'];
				$talent_audience_impact_edit = $_POST['talent_audience_impact_edit'];

					if($talent_audience_impact_edit == 0)
					{
							$updateScoreCard = "UPDATE score_card SET talent_portion_audience_impact = '$edit_scoreInput',talent_portion_audience_impact_vote = '1', talent_portion_audience_impact_edit = '1' WHERE name_contestant = '$edit_name_contestant' AND name_judge = '$judge_session'";
								mysqli_query($link,$updateScoreCard);

							$sql_talent_audience_impact_editScore = "UPDATE talent_portion SET audience_impact = '$edit_scoreInput' WHERE name = '$edit_name_contestant' and name_judge = '$judge_session'";
							mysqli_query($link,$sql_talent_audience_impact_editScore);

					}
					else
					{
						echo '<script>alert("YOU CAN\'T UPDATE TWICE");window.location.assign("talent_night_mastery_male.php")</script>';
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

    <title>Talent Portion | Female (Audience Impact 10pts)</title>

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
            width: 280px;
            font-family: 'Livvic', sans-serif;
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
            font-family: 'Livvic', sans-serif;
				}
				input:focus {
 					border: none;
 					outline: none;
 					font-family: 'Livvic', sans-serif;
				}

				::placeholder{
					font-family: 'Livvic', sans-serif;
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
										$link = mysqli_connect("localhost","root","","tabulation");

											$judge = $_SESSION['login_judge'];
											$sql5 = mysqli_query($link,"SELECT  * from score_card where name_judge = '$judge' and gender = 'Female' GROUP BY talent_portion_audience_impact_vote ORDER BY talent_portion_audience_impact_vote ASC LIMIT 1");
							
												for($b = 0 ; $b < $num_rowst = mysqli_fetch_array($sql5) ; $b++ )
													{	
														$id_contestant1 = $num_rowst['id_contestant'];
														$name_judgeD = $num_rowst['name_judge'];
														$full_name = $num_rowst['name_contestant'];
														$gender = $num_rowst['gender'];


														if($name_judgeD == $judge)
														{
															$talent_portion_audience_impact_vote = $num_rowst['talent_portion_audience_impact_vote'];

																if($talent_portion_audience_impact_vote == 0)
																	{
																		echo "<a href='#'><span class='navbar-brand' href='#''><button class = 'btn btn-outline-info' type='button' data-toggle='modal' data-target='#backtocatergories'>Back to Categories</button></span></a>";
																	}
																	else
																	{
																		echo "<a href='Categories.php'><span class='navbar-brand' href='#''><button class = 'btn btn-outline-success'>Back to Categories</button></span></a>";
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
		      <h3 class="jumbotron-heading" style="font-family: 'Livvic', sans-serif;">Talent Portion (100pts)</h3>
		        <p style="font-family: OCR A">CRITERIA:
							<ul>
								<li>
										<a href="talent_night_stagePresent_Female.php" style="color: black;font-family: 'Livvic', sans-serif;" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'">Stage Present (20pts) | Female</a><br>
								</li>
								<li>
									<a href="talent_night_mastery_Female.php" style="color: black;font-family: 'Livvic', sans-serif;"> Mastery (40pts) | Female</a>
								</li>
								<li>
									<a href="talent_night_uniqueness_Female.php" style="color: black;font-family: 'Livvic', sans-serif;" > Uniqueness (30pts) | Female</a>
								</li>
								<li class="active">
									<a href="talent_night_audience_impact_Female.php" style="color: red;font-family: 'Livvic', sans-serif;" ><i class="fa fa-arrow-right" style="margin-left: -18px"></i> Audience Impact (10pts) | Female</a>
								</li>
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
					  		
							$sql = mysqli_query($link,"SELECT * FROM contestant where gender = 'Female' order by gender DESC, talent_portion_sequenceNo ASC");
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
										$sequence_no = $num_rows['talent_portion_sequenceNo'];
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
										  <img class='align-self-start mr-3' src='img/candidates/$picture' height='320px' alt='Generic placeholder image'>
										</div>
											<div class='media col-md-12 my-4'>
												<div class='media-body'>
													<h5 class='mt-0' style='font-family:OCR A'>Candidate <text style='color:red'><b><text style='font-family: arial'># </tex>$sequence_no</b></text> - <text style='color:red'><b>$team</b></text></h5>
													<p><b style='font-family: Pristina Regular;font-size: 30px'>$status $full_name </b></p>";
							
													$sql1 = mysqli_query($link,"SELECT *FROM score_card WHERE name_contestant = '$full_name' AND name_judge = '$judge'");
													
													for($b = 0 ; $b < $num_rows1 = mysqli_fetch_array($sql1) ; $b++ )
													{
														$id_contestant1 = $num_rows1['id_contestant'];
														$name_judge = $num_rows1['name_judge'];
														$talent_portion_audience_impact = $num_rows1['talent_portion_audience_impact'];
														
														if($name_judge == $judge)
														{
															$talent_portion_audience_impact_edit = $num_rows1['talent_portion_audience_impact_edit'];
															$talent_portion_audience_impact_vote = $num_rows1['talent_portion_audience_impact_vote'];
															if($talent_portion_audience_impact_vote == 0)
															{
													echo "

													<div class = 'col-md-6 col-lg-4 my-7'>
														<form method = 'post'>
															<div class='input-group mb-3'>
															  <input type='number' min='1' max = '10' class='form-control' placeholder='Example Score: 10' aria-label='Recipient's username' aria-describedby='button-addon2' name = 'score' required maxlength='2' pattern='[0-9]{1,}'>
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
											<div class='col-md-6 col-lg-7' style='margin-top:-12px'>
												<table>
													<tr>
														<td style='display:none'>$full_name</td>
														<td style='display:none'>$talent_portion_audience_impact</td>
														<td style='display:none'>$judge</td>
														<td style='display:none'>$full_name</td>
														<td style='display:none'>$candidate_no</td>
														<td style='display:none'>$team</td>
														<td style='display:none'>$talent_portion_audience_impact_edit</td>
														<td style='display:none'>$sequence_no</td>
													";
													if($talent_portion_audience_impact_edit == 0)
													{

											echo "		
														<td>
															<center>
																<span style = 'color:red;font-family:Calibri'>Your score has been recorded for this contestant!</span><br>
																<span class='editScore text-success' style='text-decoration:none;color: black;'><i class='fa fa-star' style='font-size:14px'></i> <text style='font-family:Century Gothic'>Score: $talent_portion_audience_impact</text></span><br>
														  <a href='' class='editScore' data-toggle='modal' data-target='#editScoreModal' style='text-decoration:none;color: black'><span class='btn my-2 btn-outline-secondary'><i class='fa fa-pencil-square-o'> <text style='font-family:Century Gothic'>Edit Score</text></i></span></a>
															</center>
														</td>
													";
													}
													else
													{
											echo "
														<td>
															<center>
																<span style = 'color:red;font-family:Calibri'>Your updated score has already been recorded for this contestant!</span><br>
																<span class='editScore text-success' style='text-decoration:none;color: black;'><i class='fa fa-star' style='font-size:14px'></i> <text style='font-family:Century Gothic'>Score: $talent_portion_audience_impact</text></span><br>
															</center>
														</td>
													";
													}

										echo "</tr>
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

			      </div >
			    </center>
      	</div>
    </main>

    <div class="container text-center pt-3" ><!-- aaacesss -->
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
   						<h4 class="modal-title" id="exampleModalLabel">
   							Warning
   							<small style="font-family:Banschrift"> 
   								[empty fields]
   							</small>
   						</h4>
   						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
   							
   						</button>
   					</div>
   					<div class="modal-body">
   						<text style="font-family: 'Livvic', sans-serif;;">All fields of candidates must be filled up completely!</text><br>
   					</div>
   					<div class="modal-footer">
   						<!--<a href="categories.php"><button class="btn btn-danger" type="button">Back to Categories</button></a>-->
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
										<h5 class='modal-title' id='exampleModalLabel' style="font-family: 'Livvic', sans-serif;">Edit Score</h5><br>
										<button class='close' type='button' data-dismiss='modal' aria-label='Close'></button>
									</div>
									<div class='modal-body'>
										<h6 style="font-family: 'Livvic', sans-serif;font-weight: bold;">Audience Impact | Female (10pts)</h6><p></p>
										<p style="font-family: 'Livvic', sans-serif;color:red">Note: You can only update once.</p>
										
										  <text style="font-family: 'Livvic', sans-serif;">Contestant Number:</text> <input type="text" id = "sequence_no" class="re"readonly disabled /><br>
										  <text style="font-family: 'Livvic', sans-serif;">Contestant Team:</text> <input type="text" id = "team" class="re"readonly disabled/><br>
											<text style="font-family: 'Livvic', sans-serif;">Contestant Name:</text> <input type="text" id = "name_contestant" name="edit_name_contestant" class="re"readonly style="cursor:auto;" /><br><br>
											<input type="text" id="talent_audience_impact_edit" name="talent_audience_impact_edit" class="re" readonly hidden />
											<text style="font-family: 'Livvic', sans-serif;">Submitted Score:</text> <input type="number" id = "initial_score" class="re"readonly disabled/><br>
											<input type="text" id = "judge" name="edit_judge" class="re"readonly hidden /><br>
											<text style="font-family: 'Livvic', sans-serif;">New Score:</text> <input type="number" min="1" max="10" name="edit_scoreInput" class="red" required aria-describedby='button-addon3'/>
									</div>
									<div class='modal-footer'>

																		<button class='btn btn-secondary' type='button' data-dismiss='modal' style="font-family: 'Livvic', sans-serif;">Cancel</button>
																		<button class = 'btn btn-danger' type='submit' name ='submit_edit_score' id='button-addon3' style="font-family: 'Livvic', sans-serif;">Enter</button>
										
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
                    $('#talent_audience_impact_edit').val(data[6]);
                    $('#sequence_no').val(data[7]);
                   
                });
            });
		</script>
