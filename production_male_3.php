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
if(isset($_POST['submit_score_poiseandbearing']))
{
	$judge_session = $_SESSION['login_judge'];
	$score = $_POST['score'];
	$judge = $_POST['judge'];
	$name_contestant = $_POST['name_contestant'];
	$id_contestant = $_POST['submit_score_poiseandbearing'];


	if($score <101)
	{
	
		$update = "UPDATE score_card SET production_PoiseandBearing = '$score',production_PoiseandBearing_vote = '1' WHERE name_contestant = '$name_contestant' AND name_judge = '$judge'";
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
				$sql_production_PoiseandBearing_updateByJudgeName = "UPDATE production SET poiseandbearing = '$score' WHERE name = '$name_contestant' and name_judge = '$judge_session'";
				mysqli_query($link,$sql_production_PoiseandBearing_updateByJudgeName);
			
	}
	else
	{
		$message = "Input is greater than 100!";
      echo "<script type='text/javascript'>alert('$message'); window.location.assign('sports_wear.php')</script>";
	}
}

			if(isset($_POST['submit_edit_score_poiseandbearing']))
			{

				$judge_session = $_SESSION['login_judge'];
				$edit_scoreInput = $_POST['edit_scoreInput'];
				$edit_judge = $_POST['edit_judge'];
				$edit_name_contestant = $_POST['edit_name_contestant'];
				$production_PoiseandBearing = $_POST['production_PoiseandBearing'];

					if($production_PoiseandBearing == 0)
					{
						$updateScoreCard = "UPDATE score_card SET production_PoiseandBearing = '$edit_scoreInput',production_PoiseandBearing_vote = '1', production_PoiseandBearing_edit = 1 WHERE name_contestant = '$edit_name_contestant' AND name_judge = '$edit_judge'";
								mysqli_query($link,$updateScoreCard);
		
						$sql_production_PoiseandBearing_editScore = "UPDATE production SET poiseandbearing = '$edit_scoreInput' WHERE name = '$edit_name_contestant' and name_judge = '$judge_session'";
							mysqli_query($link,$sql_production_PoiseandBearing_editScore);

					}
					else
					{

						echo '<script>alert("You can\'t update twice");window.location.assign("sports_wear_relevance.php")</script>';
				}
			}


























/////////////////////////////////             MASTERY                   ///////////////////////////////





if(isset($_POST['submit_score_production_mastery']))
{
	$judge_session = $_SESSION['login_judge'];
	$score = $_POST['score'];
	$judge = $_POST['judge'];
	$name_contestant = $_POST['name_contestant'];
	$id_contestant = $_POST['submit_score_production_mastery'];


	if($score <101)
	{
	
		$update = "UPDATE score_card SET production_mastery = '$score',production_mastery_vote = '1' WHERE name_contestant = '$name_contestant' AND name_judge = '$judge'";
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
				$sql_production_mastery_updateByJudgeName = "UPDATE production SET mastery = '$score' WHERE name = '$name_contestant' and name_judge = '$judge_session'";
				mysqli_query($link,$sql_production_mastery_updateByJudgeName);
			
	}
	else
	{
		$message = "Input is greater than 100!";
      echo "<script type='text/javascript'>alert('$message'); window.location.assign('sports_wear.php')</script>";
	}
}

			if(isset($_POST['submit_edit_score_mastery']))
			{

				$judge_session = $_SESSION['login_judge'];
				$edit_scoreInput = $_POST['edit_scoreInput'];
				$edit_judge = $_POST['edit_judge'];
				$edit_name_contestant = $_POST['edit_name_contestant'];
				$production_mastery = $_POST['production_mastery'];

					if($production_mastery== 0)
					{
						$updateScoreCard = "UPDATE score_card SET production_mastery = '$edit_scoreInput',production_mastery_vote = '1', production_mastery_edit = 1 WHERE name_contestant = '$edit_name_contestant' AND name_judge = '$edit_judge'";
								mysqli_query($link,$updateScoreCard);
		
						$sql_production_mastery_editScore = "UPDATE production SET mastery = '$edit_scoreInput' WHERE name = '$edit_name_contestant' and name_judge = '$judge_session'";
							mysqli_query($link,$sql_production_mastery_editScore);

					}
					else
					{

						echo '<script>alert("You can\'t update twice");window.location.assign("sports_wear_relevance.php")</script>';
				}
			}













///////////////////////                  SELF INTRODUCTION                                     ////////////////////



if(isset($_POST['submit_score_production_self_introduction']))
{
	$judge_session = $_SESSION['login_judge'];
	$score = $_POST['score'];
	$judge = $_POST['judge'];
	$name_contestant = $_POST['name_contestant'];
	$id_contestant = $_POST['submit_score_production_self_introduction'];


	if($score <101)
	{
	
		$update = "UPDATE score_card SET production_self_introduction = '$score',production_self_introduction_vote = '1' WHERE name_contestant = '$name_contestant' AND name_judge = '$judge'";
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
				$sql_production_self_introduction_updateByJudgeName = "UPDATE production SET self_introduction = '$score' WHERE name = '$name_contestant' and name_judge = '$judge_session'";
				mysqli_query($link,$sql_production_self_introduction_updateByJudgeName);
			
	}
	else
	{
		$message = "Input is greater than 100!";
      echo "<script type='text/javascript'>alert('$message'); window.location.assign('sports_wear.php')</script>";
	}
}

			if(isset($_POST['submit_edit_score_self_introduction']))
			{

				$judge_session = $_SESSION['login_judge'];
				$edit_scoreInput = $_POST['edit_scoreInput'];
				$edit_judge = $_POST['edit_judge'];
				$edit_name_contestant = $_POST['edit_name_contestant'];
				$production_self_introduction = $_POST['production_self_introduction'];

					if($production_self_introduction== 0)
					{
						$updateScoreCard = "UPDATE score_card SET production_self_introduction = '$edit_scoreInput',production_self_introduction_vote = '1', production_self_introduction_edit = 1 WHERE name_contestant = '$edit_name_contestant' AND name_judge = '$edit_judge'";
								mysqli_query($link,$updateScoreCard);
		
						$sql_production_self_introduction_editScore = "UPDATE production SET self_introduction = '$edit_scoreInput' WHERE name = '$edit_name_contestant' and name_judge = '$judge_session'";
							mysqli_query($link,$sql_production_self_introduction_editScore);

					}
					else
					{

						echo '<script>alert("You can\'t update twice");window.location.assign("sports_wear_relevance.php")</script>';
				}
			}










///////////////////////                  AUDIENCE IMPACT                                     ////////////////////



if(isset($_POST['submit_score_production_audience_impact']))
{
	$judge_session = $_SESSION['login_judge'];
	$score = $_POST['score'];
	$judge = $_POST['judge'];
	$name_contestant = $_POST['name_contestant'];
	$id_contestant = $_POST['submit_score_production_audience_impact'];


	if($score <101)
	{
	
		$update = "UPDATE score_card SET production_audience_impact = '$score',production_audience_impact_vote = '1' WHERE name_contestant = '$name_contestant' AND name_judge = '$judge'";
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
				$sql_production_audience_impact_updateByJudgeName = "UPDATE production SET audience_impact = '$score' WHERE name = '$name_contestant' and name_judge = '$judge_session'";
				mysqli_query($link,$sql_production_audience_impact_updateByJudgeName);
			
	}
	else
	{
		$message = "Input is greater than 100!";
      echo "<script type='text/javascript'>alert('$message'); window.location.assign('sports_wear.php')</script>";
	}
}

			if(isset($_POST['submit_edit_score_audience_impact']))
			{

				$judge_session = $_SESSION['login_judge'];
				$edit_scoreInput = $_POST['edit_scoreInput'];
				$edit_judge = $_POST['edit_judge'];
				$edit_name_contestant = $_POST['edit_name_contestant'];
				$production_audience_impact = $_POST['production_audience_impact'];

					if($production_audience_impact== 0)
					{
						$updateScoreCard = "UPDATE score_card SET production_audience_impact = '$edit_scoreInput',production_audience_impact_vote = '1', production_audience_impact_edit = 1 WHERE name_contestant = '$edit_name_contestant' AND name_judge = '$edit_judge'";
								mysqli_query($link,$updateScoreCard);
		
						$sql_production_audience_impact_editScore = "UPDATE production SET audience_impact = '$edit_scoreInput' WHERE name = '$edit_name_contestant' and name_judge = '$judge_session'";
							mysqli_query($link,$sql_production_audience_impact_editScore);

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

    <title>Production Number | Male </title>

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
								a.linkage:hover{
					color:red !important;
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
											$sql5 = mysqli_query($link,"SELECT  * from score_card where name_judge = '$judge' and id_contestant = 3 GROUP BY production_audience_impact_vote ORDER BY production_audience_impact_vote DESC LIMIT 1");
							
												for($b = 0 ; $b < $num_rowst = mysqli_fetch_array($sql5) ; $b++ )
													{	
														$id_contestant1 = $num_rowst['id_contestant'];
														$name_judgeD = $num_rowst['name_judge'];
														$full_name = $num_rowst['name_contestant'];
														$gender = $num_rowst['gender'];


														if($name_judgeD == $judge)
														{
															$production_audience_impact_vote = $num_rowst['production_audience_impact_vote'];

																if($production_audience_impact_vote == 0)
																	{
																		echo "<a href='#'><span class='navbar-brand' href='#''><button class = 'btn btn-outline-info' type='button' data-toggle='modal' data-target='#backtocategories'>Back to Categories</button></span></a>";
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
		      <h3 class="jumbotron-heading">Production Number (100%) | MALE</h3>
		        <p>CRITERIA:
							<ul>
								<li > Poise and Bearing (30pts)</li>
								<li>Mastery (30pts)</li>
								<li>Self-Introduction (30pts)</li>
								<li>Audience Impact (10)</li>
							</ul>
							<ul style="list-style-type: none;font-size: 18px !important;">
								<li style="display: inline;padding-right: 15px;font-family: Arial">Candidate:</li>
								<li style="display: inline;padding-right: 15px;font-family: Arial"><a href="production_male_1.php" style="color:black;" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'"># 1</a></li>
								<li style="display: inline;padding-right: 15px;font-family: Arial"><a class="linkage" href="production_male_2.php" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'" style="color:black;"># 2</a></li>
								<li class="active" style="display: inline;padding-right: 15px;font-family: Arial"><a class="linkage" href="production_male_3.php" ><b># 3</b></a></li>
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
											$sql5 = mysqli_query($link,"SELECT  * from score_card where name_judge = '$judge' and id_contestant = 3 GROUP BY production_audience_impact_vote ORDER BY production_audience_impact_vote DESC LIMIT 1");
							
												for($b = 0 ; $b < $num_rowst = mysqli_fetch_array($sql5) ; $b++ )
													{	
														$id_contestant1 = $num_rowst['id_contestant'];
														$name_judgeD = $num_rowst['name_judge'];
														$full_name = $num_rowst['name_contestant'];
														$gender = $num_rowst['gender'];


														if($name_judgeD == $judge)
														{
															$production_audience_impact_vote = $num_rowst['production_audience_impact_vote'];

																if($production_audience_impact_vote == 0)
																	{
																		
																	}
																	else
																	{
																		echo '<li  style="display: inline;padding-right: 15px"><a class="linkage" href="production_male_4.php" style="color:black;font-family: Arial"># 4</a></li>';
								
																	}
															}
														}
								?>
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
					  		
							$sql = mysqli_query($link,"SELECT *FROM contestant where gender = 'Male' and candidate_no = 3 ORDER BY candidate_no ASC,gender ASC");
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
										  <img class='align-self-start mr-3' src='img/candidates/$picture' height='320px' alt='Generic placeholder image'>
										</div>
											<div class='media col-md-12 my-4'>
												<div class='media-body'>
													<h5 class='mt-0' style='font-family:OCR A'>Candidate 
													<text style='color:red'>
														<b>
															<text style='font-family: arial'># 
																$candidate_no
															</text>
														</b>
													 - <b>$team</b></h5>
													</text>
													<p><b style='font-family: Pristina Regular;font-size: 30px'>$status $full_name </b></p>
														<p><b style='font-family: Arial Rounded MT;font-size: 16px'><text style='color:red'>*</text> POISE AND BEARING (30pts) <text style='color:red'>*</text></b></p>";
							
													$sql1 = mysqli_query($link,"SELECT *FROM score_card WHERE name_contestant = '$full_name' AND name_judge = '$judge' and id_contestant = 3");
													
													for($b = 0 ; $b < $num_rows1 = mysqli_fetch_array($sql1) ; $b++ )
													{
														$id_contestant1 = $num_rows1['id_contestant'];
														$name_judge = $num_rows1['name_judge'];
														$production_PoiseandBearing = $num_rows1['production_PoiseandBearing'];
														
														if($name_judge == $judge)
														{
															$production_PoiseandBearing_edit = $num_rows1['production_PoiseandBearing_edit'];
															$production_PoiseandBearing_vote = $num_rows1['production_PoiseandBearing_vote'];
															if($production_PoiseandBearing_vote == 0)
															{
													echo "

													<div class = 'col-md-6 col-lg-4 my-7'>
														<form method = 'post'>

															<div class='input-group mb-3'>

															  <input type='number' min='1' max = '30' class='form-control' placeholder='Example Score: 30' aria-label='Recipient's username' aria-describedby='button-addon2' name = 'score' required maxlength='3' pattern='[0-9]{1,}'>
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
															
																<button class = 'btn btn-danger' name = 'submit_score_poiseandbearing' id='button-addon2'
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
														<td style='display:none'>$production_PoiseandBearing</td>
														<td style='display:none'>$judge</td>
														<td style='display:none'>$full_name</td>
														<td style='display:none'>$candidate_no</td>
														<td style='display:none'>$team</td>
														<td style='display:none'>$production_PoiseandBearing_edit</td>";

														if($production_PoiseandBearing_edit == 0)
													{

											echo "

														<td>
															<center>

																<span style = 'color:red;font-family:Calibri'>Your score has been recorded for this contestant!</span><br>
																<span class='editScore text-success' style='text-decoration:none;color: black;'><i class='fa fa-star' style='font-size:14px'></i> <text style='font-family:Century Gothic'>Score: $production_PoiseandBearing</text></span><br>
														  <a href='' class='editScore_production_poiseandbearing' data-toggle='modal' data-target='#editScoreModalPoiseandbearing' style='text-decoration:none;color: black'><span class='btn my-2 btn-outline-secondary'><i class='fa fa-pencil-square-o'> <text style='font-family:Century Gothic'>Edit Score</text></i></span></a>
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
																<span class='editScore text-success' style='text-decoration:none;color: black;'><i class='fa fa-star' style='font-size:14px'></i> <text style='font-family:Century Gothic'>Score: $production_PoiseandBearing</text></span><br>
															</center>
														</td>
													";
													}

												echo "
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
























<!-- -----------------------------------    MASTERY        ---------------------------------------------------------->

						<div class="row">
				  		<?php
						
							$link = mysqli_connect("localhost","root","","tabulation");
					  		
							$sql = mysqli_query($link,"SELECT *FROM contestant where gender = 'Male' and candidate_no = 3 ORDER BY candidate_no ASC,gender ASC");
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
										  <img class='align-self-start mr-3' src='img/candidates/$picture' height='320px' alt='Generic placeholder image'>
										</div>
											<div class='media col-md-12 my-4'>
												<div class='media-body'>
													<h5 class='mt-0' style='font-family:OCR A'>Candidate 
													<text style='color:red'>
														<b>
															<text style='font-family: arial'># 
																$candidate_no
															</text>
														</b>
													 - <b>$team</b></h5>
													</text>
													<p><b style='font-family: Pristina Regular;font-size: 30px'>$status $full_name </b></p>
													<p><b style='font-family: Arial Rounded MT;font-size: 16px'><text style='color:red'>*</text> MASTERY (30pts) <text style='color:red'>*</text></b></p>";
							
													$sql1 = mysqli_query($link,"SELECT *FROM score_card WHERE name_contestant = '$full_name' AND name_judge = '$judge' and id_contestant = 3");
													
													for($b = 0 ; $b < $num_rows1 = mysqli_fetch_array($sql1) ; $b++ )
													{
														$id_contestant1 = $num_rows1['id_contestant'];
														$name_judge = $num_rows1['name_judge'];
														$production_mastery = $num_rows1['production_mastery'];
														
														if($name_judge == $judge)
														{
															$production_mastery_edit = $num_rows1['production_mastery_edit'];
															$production_mastery_vote = $num_rows1['production_mastery_vote'];
															if($production_mastery_vote == 0)
															{
													echo "

													<div class = 'col-md-6 col-lg-4 my-7'>
														<form method = 'post'>

															<div class='input-group mb-3'>

															  <input type='number' min='1' max = '30' class='form-control' placeholder='Example Score: 30' aria-label='Recipient's username' aria-describedby='button-addon2' name = 'score' required maxlength='3' pattern='[0-9]{1,}'>
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
															
																<button class = 'btn btn-danger' name = 'submit_score_production_mastery' id='button-addon2'
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
														<td style='display:none'>$production_mastery</td>
														<td style='display:none'>$judge</td>
														<td style='display:none'>$full_name</td>
														<td style='display:none'>$candidate_no</td>
														<td style='display:none'>$team</td>
														<td style='display:none'>$production_mastery_edit</td>";

														if($production_mastery_edit == 0)
													{

											echo "

														<td>
															<center>

																<span style = 'color:red;font-family:Calibri'>Your score has been recorded for this contestant!</span><br>
																<span class='editScore text-success' style='text-decoration:none;color: black;'><i class='fa fa-star' style='font-size:14px'></i> <text style='font-family:Century Gothic'>Score: $production_mastery</text></span><br>
														  <a href='' class='editScore_mastery' data-toggle='modal' data-target='#editScoreModalMastery' style='text-decoration:none;color: black'><span class='btn my-2 btn-outline-secondary'><i class='fa fa-pencil-square-o'> <text style='font-family:Century Gothic'>Edit Score</text></i></span></a>
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
																<span class='editScore text-success' style='text-decoration:none;color: black;'><i class='fa fa-star' style='font-size:14px'></i> <text style='font-family:Century Gothic'>Score: $production_mastery</text></span><br>
															</center>
														</td>
													";
													}

												echo "
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




























<!-- -----------------------------------    SELF INTRODUCTION        ----------------------------------------------->


						<div class="row">
				  		<?php
						
							$link = mysqli_connect("localhost","root","","tabulation");
					  		
							$sql = mysqli_query($link,"SELECT *FROM contestant where gender = 'Male' and candidate_no = 3 ORDER BY candidate_no ASC,gender ASC");
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
										  <img class='align-self-start mr-3' src='img/candidates/$picture' height='320px' alt='Generic placeholder image'>
										</div>
											<div class='media col-md-12 my-4'>
												<div class='media-body'>
													<h5 class='mt-0' style='font-family:OCR A'>Candidate 
													<text style='color:red'>
														<b>
															<text style='font-family: arial'># 
																$candidate_no
															</text>
														</b>
													 - <b>$team</b></h5>
													</text>
													<p><b style='font-family: Pristina Regular;font-size: 30px'>$status $full_name </b></p>
													<p><b style='font-family: Arial Rounded MT;font-size: 16px'><text style='color:red'>*</text> SELF INTRODUCTION (30pts) <text style='color:red'>*</text></b></p>";
							
													$sql1 = mysqli_query($link,"SELECT *FROM score_card WHERE name_contestant = '$full_name' AND name_judge = '$judge' and id_contestant = 3");
													
													for($b = 0 ; $b < $num_rows1 = mysqli_fetch_array($sql1) ; $b++ )
													{
														$id_contestant1 = $num_rows1['id_contestant'];
														$name_judge = $num_rows1['name_judge'];
														$production_self_introduction = $num_rows1['production_self_introduction'];
														
														if($name_judge == $judge)
														{
															$production_self_introduction_edit = $num_rows1['production_self_introduction_edit'];
															$production_self_introduction_vote = $num_rows1['production_self_introduction_vote'];
															if($production_self_introduction_vote == 0)
															{
													echo "

													<div class = 'col-md-6 col-lg-4 my-7'>
														<form method = 'post'>

															<div class='input-group mb-3'>

															  <input type='number' min='1' max = '30' class='form-control' placeholder='Example Score: 30' aria-label='Recipient's username' aria-describedby='button-addon2' name = 'score' required maxlength='3' pattern='[0-9]{1,}'>
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
															
																<button class = 'btn btn-danger' name = 'submit_score_production_self_introduction' id='button-addon2'
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
														<td style='display:none'>$production_self_introduction</td>
														<td style='display:none'>$judge</td>
														<td style='display:none'>$full_name</td>
														<td style='display:none'>$candidate_no</td>
														<td style='display:none'>$team</td>
														<td style='display:none'>$production_self_introduction_edit</td>";

														if($production_self_introduction_edit == 0)
													{

											echo "

														<td>
															<center>

																<span style = 'color:red;font-family:Calibri'>Your score has been recorded for this contestant!</span><br>
																<span class='editScore text-success' style='text-decoration:none;color: black;'><i class='fa fa-star' style='font-size:14px'></i> <text style='font-family:Century Gothic'>Score: $production_self_introduction</text></span><br>
														  <a href='' class='editScore_self_introduction' data-toggle='modal' data-target='#editScoreSelf_Introduction' style='text-decoration:none;color: black'><span class='btn my-2 btn-outline-secondary'><i class='fa fa-pencil-square-o'> <text style='font-family:Century Gothic'>Edit Score</text></i></span></a>
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
																<span class='editScore text-success' style='text-decoration:none;color: black;'><i class='fa fa-star' style='font-size:14px'></i> <text style='font-family:Century Gothic'>Score: $production_self_introduction</text></span><br>
															</center>
														</td>
													";
													}

												echo "
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




<!-- -----------------------------------    AUDIENCE IMPACT        ----------------------------------------------->


						<div class="row">
				  		<?php
						
							$link = mysqli_connect("localhost","root","","tabulation");
					  		
							$sql = mysqli_query($link,"SELECT *FROM contestant where gender = 'Male' and candidate_no = 3 ORDER BY candidate_no ASC,gender ASC");
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
										  <img class='align-self-start mr-3' src='img/candidates/$picture' height='320px' alt='Generic placeholder image'>
										</div>
											<div class='media col-md-12 my-4'>
												<div class='media-body'>
													<h5 class='mt-0' style='font-family:OCR A'>Candidate 
													<text style='color:red'>
														<b>
															<text style='font-family: arial'># 
																$candidate_no
															</text>
														</b>
													 - <b>$team</b></h5>
													</text>
													<p><b style='font-family: Pristina Regular;font-size: 30px'>$status $full_name </b></p>
													<p><b style='font-family: Arial Rounded MT;font-size: 16px'><text style='color:red'>*</text> AUDIENCE IMPACT (10pts) <text style='color:red'>*</text></b></p>";
							
													$sql1 = mysqli_query($link,"SELECT *FROM score_card WHERE name_contestant = '$full_name' AND name_judge = '$judge' and id_contestant = 3");
													
													for($b = 0 ; $b < $num_rows1 = mysqli_fetch_array($sql1) ; $b++ )
													{
														$id_contestant1 = $num_rows1['id_contestant'];
														$name_judge = $num_rows1['name_judge'];
														$production_audience_impact = $num_rows1['production_audience_impact'];
														
														if($name_judge == $judge)
														{
															$production_audience_impact_edit = $num_rows1['production_audience_impact_edit'];
															$production_audience_impact_vote = $num_rows1['production_audience_impact_vote'];
															if($production_audience_impact_vote == 0)
															{
													echo "

													<div class = 'col-md-6 col-lg-4 my-7'>
														<form method = 'post'>

															<div class='input-group mb-3'>

															  <input type='number' min='1' max = '10' class='form-control' placeholder='Example Score: 10' aria-label='Recipient's username' aria-describedby='button-addon2' name = 'score' required maxlength='3' pattern='[0-9]{1,}'>
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
															
																<button class = 'btn btn-danger' name = 'submit_score_production_audience_impact' id='button-addon2'
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
														<td style='display:none'>$production_audience_impact</td>
														<td style='display:none'>$judge</td>
														<td style='display:none'>$full_name</td>
														<td style='display:none'>$candidate_no</td>
														<td style='display:none'>$team</td>
														<td style='display:none'>$production_audience_impact_edit</td>";

														if($production_audience_impact_edit == 0)
													{

											echo "

														<td>
															<center>

																<span style = 'color:red;font-family:Calibri'>Your score has been recorded for this contestant!</span><br>
																<span class='editScore text-success' style='text-decoration:none;color: black;'><i class='fa fa-star' style='font-size:14px'></i> <text style='font-family:Century Gothic'>Score: $production_audience_impact</text></span><br>
														  <a href='' class='editScore_audience_impact' data-toggle='modal' data-target='#editScoreModalAudience_Impact' style='text-decoration:none;color: black'><span class='btn my-2 btn-outline-secondary'><i class='fa fa-pencil-square-o'> <text style='font-family:Century Gothic'>Edit Score</text></i></span></a>
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
																<span class='editScore text-success' style='text-decoration:none;color: black;'><i class='fa fa-star' style='font-size:14px'></i> <text style='font-family:Century Gothic'>Score: $production_audience_impact</text></span><br>
															</center>
														</td>
													";
													}

												echo "
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



   		<div class="modal fade" id="backtocategories" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<!----------------------------   POISE AND BEARING     -------------------------------->


<form method="post">
						<div class='modal fade' id='editScoreModalPoiseandbearing' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'           aria-hidden='true'>
							<div class='modal-dialog' role='document'>
								<div class='modal-content'>
									<div class='modal-header'>
										<h5 class='modal-title' id='exampleModalLabel'>Edit Score</h5><br>
										<button class='close' type='button' data-dismiss='modal' aria-label='Close'></button>
									</div>
									<div class='modal-body'>
										<h6>Poise and Bearing (30pts)</h6><p></p>
										<p style="color:red;">Note: You can only update once.</p>
										
										  Contestant Number: <input type="text" id = "poiseandbearing_id_contestant" class="re"readonly disabled /><br>
										  Contestant Team: <input type="text" id = "poiseandbearing_team" class="re"readonly disabled/><br>
											Contestant Name: <input type="text" id = "poiseandbearing_name_contestant" name="edit_name_contestant" class="re"readonly style="cursor:auto;" /><br><br>
											<input type="text" id="poiseandbearing_production_PoiseandBearing" name="production_PoiseandBearing" class="re"readonly hidden />
											Submitted Score: <input type="number" id = "poiseandbearing_initial_score" class="re"readonly disabled/><br>
											<input type="text" id = "poiseandbearing_judge" name="edit_judge" class="re"readonly hidden /><br>
											New Score: <input type="number" min="1" max="30" name="edit_scoreInput" class="red" required aria-describedby='button-addon3'/>
									</div>
									<div class='modal-footer'>

																		<button class='btn btn-secondary' type='button' data-dismiss='modal'>Cancel</button>
																		<button class = 'btn btn-danger' type='submit' name ='submit_edit_score_poiseandbearing' id='button-addon3'>Update</button>
										
									</div>
								</div>
							</div>
						</div>
</form>

		<script type="text/javascript">
			      $(document).ready(function () {
                $('.editScore_production_poiseandbearing').on('click', function () {

                    //$('#editModal').modal('show');

                        $tr = $(this).closest('tr');
                    var data = $tr.children("td").map(function () {
                        return $(this).text();
                    }).get();

                    console.log(data);
                    $('#poiseandbearing_initial_score').val(data[1]);
                    $('#poiseandbearing_judge').val(data[2]);
                    $('#poiseandbearing_name_contestant').val(data[3]);
                    $('#poiseandbearing_id_contestant').val(data[4]);
                    $('#poiseandbearing_team').val(data[5]);
                    $('#poiseandbearing_production_PoiseandBearing').val(data[6]);
                   
                });
            });
		</script>



<!----------------------------   MASTERY     -------------------------------->

		<form method="post">
						<div class='modal fade' id='editScoreModalMastery' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'           aria-hidden='true'>
							<div class='modal-dialog' role='document'>
								<div class='modal-content'>
									<div class='modal-header'>
										<h5 class='modal-title' id='exampleModalLabel'>Edit Score</h5><br>
										<button class='close' type='button' data-dismiss='modal' aria-label='Close'></button>
									</div>
									<div class='modal-body'>
										<h6>Mastery (30pts)</h6><p></p>
										<p style="color:red;">Note: You can only update once.</p>
										
										  Contestant Number: <input type="text" id = "mastery_id_contestant" class="re"readonly disabled /><br>
										  Contestant Team: <input type="text" id = "mastery_team" class="re"readonly disabled/><br>
											Contestant Name: <input type="text" id = "mastery_name_contestant" name="edit_name_contestant" class="re"readonly style="cursor:auto;" /><br><br>
											<input type="text" id="mastery_production" name="production_mastery" class="re"readonly hidden />
											Submitted Score: <input type="number" id = "mastery_initial_score" class="re"readonly disabled/><br>
											<input type="text" id = "mastery_judge" name="edit_judge" class="re"readonly hidden /><br>
											New Score: <input type="number" min="1" max="30" name="edit_scoreInput" class="red" required aria-describedby='button-addon3'/>
									</div>
									<div class='modal-footer'>

																		<button class='btn btn-secondary' type='button' data-dismiss='modal'>Cancel</button>
																		<button class = 'btn btn-danger' type='submit' name ='submit_edit_score_mastery' id='button-addon3'>Update</button>
										
									</div>
								</div>
							</div>
						</div>
</form>

		<script type="text/javascript">
			      $(document).ready(function () {
                $('.editScore_mastery').on('click', function () {

                    //$('#editModal').modal('show');

                        $tr = $(this).closest('tr');
                    var data = $tr.children("td").map(function () {
                        return $(this).text();
                    }).get();

                    console.log(data);
                    $('#mastery_initial_score').val(data[1]);
                    $('#mastery_judge').val(data[2]);
                    $('#mastery_name_contestant').val(data[3]);
                    $('#mastery_id_contestant').val(data[4]);
                    $('#mastery_team').val(data[5]);
                    $('#mastery_production').val(data[6]);
                   
                });
            });
		</script>








<!----------------------------   SELF INTRODUCTION    -------------------------------->

		<form method="post">
						<div class='modal fade' id='editScoreSelf_Introduction' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'           aria-hidden='true'>
							<div class='modal-dialog' role='document'>
								<div class='modal-content'>
									<div class='modal-header'>
										<h5 class='modal-title' id='exampleModalLabel'>Edit Score</h5><br>
										<button class='close' type='button' data-dismiss='modal' aria-label='Close'></button>
									</div>
									<div class='modal-body'>
										<h6>Self Introduction (30pts)</h6><p></p>
										<p style="color:red;">Note: You can only update once.</p>
										
										  Contestant Number: <input type="text" id = "self_introduction_id_contestant" class="re"readonly disabled /><br>
										  Contestant Team: <input type="text" id = "self_introduction_team" class="re"readonly disabled/><br>
											Contestant Name: <input type="text" id = "self_introduction_name_contestant" name="edit_name_contestant" class="re"readonly style="cursor:auto;" /><br><br>
											<input type="text" id="self_introduction_production" name="production_self_introduction" class="re"readonly hidden />
											Submitted Score: <input type="number" id = "self_introduction_initial_score" class="re"readonly disabled/><br>
											<input type="text" id = "self_introduction_judge" name="edit_judge" class="re"readonly hidden /><br>
											New Score: <input type="number" min="1" max="30" name="edit_scoreInput" class="red" required aria-describedby='button-addon3'/>
									</div>
									<div class='modal-footer'>

																		<button class='btn btn-secondary' type='button' data-dismiss='modal'>Cancel</button>
																		<button class = 'btn btn-danger' type='submit' name ='submit_edit_score_self_introduction' id='button-addon3'>Update</button>
										
									</div>
								</div>
							</div>
						</div>
</form>

		<script type="text/javascript">
			      $(document).ready(function () {
                $('.editScore_self_introduction').on('click', function () {

                    //$('#editModal').modal('show');

                        $tr = $(this).closest('tr');
                    var data = $tr.children("td").map(function () {
                        return $(this).text();
                    }).get();

                    console.log(data);
                    $('#self_introduction_initial_score').val(data[1]);
                    $('#self_introduction_judge').val(data[2]);
                    $('#self_introduction_name_contestant').val(data[3]);
                    $('#self_introduction_id_contestant').val(data[4]);
                    $('#self_introduction_team').val(data[5]);
                    $('#self_introduction_production').val(data[6]);
                   
                });
            });
		</script>











<!----------------------------   AUDIENCE IMPACT    -------------------------------->

		<form method="post">
						<div class='modal fade' id='editScoreModalAudience_Impact' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'           aria-hidden='true'>
							<div class='modal-dialog' role='document'>
								<div class='modal-content'>
									<div class='modal-header'>
										<h5 class='modal-title' id='exampleModalLabel'>Edit Score</h5><br>
										<button class='close' type='button' data-dismiss='modal' aria-label='Close'></button>
									</div>
									<div class='modal-body'>
										<h6>Audience Impact (10pts)</h6><p></p>
										<p style="color:red;">Note: You can only update once.</p>
										
										  Contestant Number: <input type="text" id = "audience_impact_id_contestant" class="re"readonly disabled /><br>
										  Contestant Team: <input type="text" id = "audience_impact_team" class="re"readonly disabled/><br>
											Contestant Name: <input type="text" id = "audience_impact_name_contestant" name="edit_name_contestant" class="re"readonly style="cursor:auto;" /><br><br>
											<input type="text" id="audience_impact_production" name="production_audience_impact" class="re"readonly hidden />
											Submitted Score: <input type="number" id = "audience_impact_initial_score" class="re"readonly disabled/><br>
											<input type="text" id = "audience_impact_judge" name="edit_judge" class="re"readonly hidden /><br>
											New Score: <input type="number" min="1" max="10" name="edit_scoreInput" class="red" required aria-describedby='button-addon3'/>
									</div>
									<div class='modal-footer'>

																		<button class='btn btn-secondary' type='button' data-dismiss='modal'>Cancel</button>
																		<button class = 'btn btn-danger' type='submit' name ='submit_edit_score_audience_impact' id='button-addon3'>Update</button>
										
									</div>
								</div>
							</div>
						</div>
</form>

		<script type="text/javascript">
			      $(document).ready(function () {
                $('.editScore_audience_impact').on('click', function () {

                    //$('#editModal').modal('show');

                        $tr = $(this).closest('tr');
                    var data = $tr.children("td").map(function () {
                        return $(this).text();
                    }).get();

                    console.log(data);
                    $('#audience_impact_initial_score').val(data[1]);
                    $('#audience_impact_judge').val(data[2]);
                    $('#audience_impact_name_contestant').val(data[3]);
                    $('#audience_impact_id_contestant').val(data[4]);
                    $('#audience_impact_team').val(data[5]);
                    $('#audience_impact_production').val(data[6]);
                   
                });
            });
		</script>





