<?php
include('config.php');
if(isset($_POST['logout']))
{
	session_destroy();
	header('location:index.php');
	
}
if(empty($_SESSION['login_admin']))
{
	header('location:index.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="img/final_logo.png" type="image/x-icon">
    <link rel="icon" href="img/final_logo.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Talent Portion Result</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
    <style type="text/css">
        tr:hover{
            background-color: yellow;
        }

    </style>
</head>

<body>
    <div class="wrapper" style="background-color: #54575F">
        <div class="sidebar" data-color="green" data-image="assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="green | blue | green | orange | green"

        Tip 2: you can also add an image using data-image tag
    -->
           
           <div class="sidebar-wrapper">
                 <ul class="nav">
                    <li  class="active">
                        <a href="result_talent_night.php">
                            <i class="fa fa fa-users" style="color: white"></i>
                            <p style="color: white">Talent Portion</p>
                        </a>
                    </li>
                    
                    <li>
                        <a href="result_sports_wear.php">
                            <i class="fa fa-life-ring" style="color: white"></i>
                            <p style="color: white">Sports Wear</p>
                        </a>
                    </li>
                    <li>
            
                        <a href="result_preliminary_interview.php">
                            <i class="fa fa-list-alt" style="color: white"></i>
                            <p style="color: white">Preliminary Interview</p>
                        </a>
                    </li>
                    <li>
                        <a href="result_long_gown_and_formal_wear.php">
                            <i class="fa fa fa-street-view" style="color: white"></i>
                            <p style="color: white">Long Gown and</p>
                            <p style="margin-left: 45px;color: white">Formal Wear</p>
                        </a>
                    </li>
                    <li>
                        <a href="result_advocacy.php">
                            <i class="fa fa-video-camera" style="color: white"></i>
                            <p style="color: white">Advocacy</p>
                        </a>
                    </li>
                    <li>
                        <a href="results_top_3.php">
                            <i class="fa fa-area-chart" style="color: white"></i>
                            <p style="color: white">Top 3 Results</p>
                        </a>
                    </li>
                    <li>
                        <a href='final_result.php'>
                            <i class="fa fa-area-chart" style="color: white"></i>
                            <p style="color: white">Final Result</p>
                        </a>
                    </li>
					 
					 <li>
                        <br>
                        <br>
                        <form method="post">
									<button class = "btn btn-danger" type='button' data-toggle="modal" data-target="#exampleModal20000" style="margin-left: 70px">Logout</button>
								</form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                       
                    </div>
                    <div class="collapse navbar-collapse">
            
                       
                       
                    </div>
                </div>
            </nav>
            
            <div class="content" style="margin-top: -15px;">
                
                <div class="container-fluid">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h1 class="title"><b>Talent Portion</b><small style="color:white;font-family:Maiandra GD"> (Female Category)</small></h1>
                                   
                                </div>
                                <div class="card-content table-responsive">
                                    
                                    <table class="table" id="dataTable1">
                                        <thead style="font-weight: bold;color: black;font-size: 100%">
                                            <th>Number</th>
                                            <th>Gender</th>
                                            <th>Candidate Name</th>
                                            <th>Stage Present(20pts)<br><small style="font-family:arial;font-size:11px">3 judges average</small></th>
                                            <th>Mastery(40pts)<br><small style="font-family:arial;font-size:11px">3 judges average</small></th>
                                            <th>Uniqueness(30pts)<br><small style="font-family:arial;font-size:11px">3 judges average</small></th>
                                            <th>Audience Impact(10pts)<br><small style="font-family:arial;font-size:11px">3 judges average</small></th>
                                            <th>Total(100pts)</th>
                                            <th>Rank</th>
                                            
                                        </thead>
                                        <tbody>
				<?php
					
						$link = mysqli_connect("localhost","root","","tabulation");
				  		
						$sql = mysqli_query($link,"SELECT tp.name, tp.name_judge, tp.candidate_no, tp.gender, 
                       SUM(tp.stage_present)/3 AS 'stage_present', 
                       SUM(tp.mastery)/3 AS 'mastery', 
                       SUM(tp.uniqueness)/3 AS 'uniqueness', 
                       SUM(tp.audience_impact)/3 AS 'audience_impact', 
                       r.no AS 'no', 
                       DENSE_RANK() OVER (ORDER BY SUM(tp.stage_present + tp.mastery + tp.uniqueness + tp.audience_impact) DESC) AS 'total_rank'
                        FROM talent_portion tp 
                        JOIN (SELECT no FROM rank GROUP BY no ORDER BY no ASC) g ON tp.candidate_no = g.no 
                        JOIN rank r ON tp.candidate_no = r.no 
                        WHERE tp.gender = 'Female' 
                        GROUP BY tp.name, r.no 
                        ORDER BY tp.candidate_no ASC, r.no ASC
                            ");
						for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
						{
                            $name = $num_rows['name'];
                            $gender = $num_rows['gender'];
                            $judge = $num_rows['name_judge'];
                            $candidate_no = $num_rows['candidate_no'];
                            $stage_present = $num_rows['stage_present'];
                            $mastery = $num_rows['mastery'];
                            $uniqueness = $num_rows['uniqueness'];
                            $audience_impact = $num_rows['audience_impact'];
                            $rank = $num_rows['total_rank'];

                            $stage_present_average = ROUND($stage_present,2);
                            $mastery_average = ROUND($mastery,2);
                            $uniqueness_average = ROUND($uniqueness,2);
                            $audience_impact_average = ROUND($audience_impact,2);
                            $talent_portion_total = ROUND($stage_present_average + $mastery_average + $uniqueness_average + $audience_impact_average,2);

                                
							echo "
							<tr";
                            if ($rank == 1) {
                                        echo ' style="background-color: yellow"';
                            }
                            /*elseif($rank == 2){
                                echo ' style="background-color: #DBDB00"';
                            }
                            elseif($rank == 3){
                                echo ' style="background-color: #FFFF63"';
                            }*/

                            echo ">";
                               echo" <td>$candidate_no</td>
                                <td>$gender</td>
								<td>$name</td>
                                <td>$stage_present_average</td>
                                <td>$mastery_average</td>
                                <td>$uniqueness_average</td>
                                <td>$audience_impact_average</td>
                                <td>$talent_portion_total</td>

                                <td>$rank</td>
                                
							</tr>
							
							";

                            $rank++;
							
						}



				?>
                                            
                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                            
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h1 class="title"><b>Talent Portion</b><small style="color:white;font-family:Maiandra GD"> (Male Category)</small></h1>
                                   
                                </div>
                                <div class="card-content table-responsive">
                                    
                                    <table class="table" id="dataTable2">
                                        <thead style="font-weight: bold;color: black;font-size: 100%">
                                            <th>Number</th>
                                            <th>Gender</th>
                                            <th>Candidate Name</th>
                                            <th>Stage Present(20pts)<br><small style="font-family:arial;font-size:11px">3 judges average</small></th>
                                            <th>Mastery(40pts)<br><small style="font-family:arial;font-size:11px">3 judges average</small></th>
                                            <th>Uniqueness(30pts)<br><small style="font-family:arial;font-size:11px">3 judges average</small></th>
                                            <th>Audience Impact(10pts)<br><small style="font-family:arial;font-size:11px">3 judges average</small></th>
                                            <th>Total(100pts)</th>
                                            <th>Rank</th>
                                            
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","","tabulation");
                        
                        $sql = mysqli_query($link,"SELECT tp.name, tp.name_judge, tp.candidate_no, tp.gender, 
                           SUM(tp.stage_present)/3 AS 'stage_present', 
                           SUM(tp.mastery)/3 AS 'mastery', 
                           SUM(tp.uniqueness)/3 AS 'uniqueness', 
                           SUM(tp.audience_impact)/3 AS 'audience_impact', 
                           r.no AS 'no', 
                           DENSE_RANK() OVER (ORDER BY SUM(tp.stage_present + tp.mastery + tp.uniqueness + tp.audience_impact) DESC) AS 'total_rank'
                            FROM talent_portion tp 
                            JOIN (SELECT no FROM rank GROUP BY no ORDER BY no ASC) g ON tp.candidate_no = g.no 
                            JOIN rank r ON tp.candidate_no = r.no 
                            WHERE tp.gender = 'Male' 
                            GROUP BY tp.name, r.no 
                            ORDER BY tp.name ASC, r.no ASC;
                            ");
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $name = $num_rows['name'];
                            $gender = $num_rows['gender'];
                            $judge = $num_rows['name_judge'];
                            $candidate_no = $num_rows['candidate_no'];
                            $stage_present = $num_rows['stage_present'];
                            $mastery = $num_rows['mastery'];
                            $uniqueness = $num_rows['uniqueness'];
                            $audience_impact = $num_rows['audience_impact'];
                            $rank = $num_rows['total_rank'];

                            $stage_present_average = ROUND($stage_present,2);
                            $mastery_average = ROUND($mastery,2);
                            $uniqueness_average = ROUND($uniqueness,2);
                            $audience_impact_average = ROUND($audience_impact,2);
                            $talent_portion_total = ROUND($stage_present_average + $mastery_average + $uniqueness_average + $audience_impact_average,2);

                                
                            echo "
                            <tr";
                            if ($rank == 1) {
                                        echo ' style="background-color: yellow"';
                            }
                            /*elseif($rank == 2){
                                echo ' style="background-color: #DBDB00"';
                            }
                            elseif($rank == 3){
                                echo ' style="background-color: #FFFF63"';
                            }*/

                            echo ">";
                               echo" <td>$candidate_no</td>
                                <td>$gender</td>
                                <td>$name</td>
                                <td>$stage_present_average</td>
                                <td>$mastery_average</td>
                                <td>$uniqueness_average</td>
                                <td>$audience_impact_average</td>
                                <td>$talent_portion_total</td>

                                <td>$rank</td>
                                
                            </tr>
                            
                            ";

                            $rank++;
                            
                        }



                ?>
                                            
                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                            
                    </div>
 
                </div>
            </div>
           <footer class="footer">
                <div class="container-fluid">
                    
                    <p class="text-center" style="color: white">
                        &copy;
                  This system was made by Jhon Ace Casabuena and CAPG Students
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        
                    </p>
                </div>
            </footer>
        </div>
    </div>
    
    
    

</body>
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

<!--   Core JS Files   -->
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
   
  
    
 
    
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/sb-admin-datatables.min.js"></script>

</html>