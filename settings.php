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

//PRODUCTION
        if(isset($_POST['BlockProduction']))
        {
            $updateDoneProduction = "UPDATE category SET status = 'DONE' where category_name = 'Production'";
            mysqli_query($link,$updateDoneProduction);
        }

        if(isset($_POST['unBlockProduction']))
        {
            $updateOngoingProduction = "UPDATE category SET status = 'ONGOING' where category_name = 'Production'";
            mysqli_query($link,$updateOngoingProduction);
        }


//SPORTS WEAR
        if(isset($_POST['BlockSports_Wear']))
        {
            $updateDoneSports_Wear = "UPDATE category SET status = 'DONE' where category_name = 'Sports_Wear'";
            mysqli_query($link,$updateDoneSports_Wear);
        }

        if(isset($_POST['unBlockSports_Wear']))
        {
            $updateOngoingSports_Wear = "UPDATE category SET status = 'ONGOING' where category_name = 'Sports_Wear'";
            mysqli_query($link,$updateOngoingSports_Wear);
        }


//Preliminary Interview
        if(isset($_POST['BlockPreliminary_Interview']))
        {
            $updateDonePreliminary_Interview = "UPDATE category SET status = 'DONE' where category_name = 'Preliminary_Interview'";
            mysqli_query($link,$updateDonePreliminary_Interview);
        }

        if(isset($_POST['unBlockPreliminary_Interview']))
        {
            $updateOngoingPreliminary_Interview = "UPDATE category SET status = 'ONGOING' where category_name = 'Preliminary_Interview'";
            mysqli_query($link,$updateOngoingPreliminary_Interview);
        }


//FORMAL WEAR
        if(isset($_POST['BlockFormal_Wear']))
        {
            $updateDoneFormal_Wear = "UPDATE category SET status = 'DONE' where category_name = 'Formal_Wear'";
            mysqli_query($link,$updateDoneFormal_Wear);
        }

        if(isset($_POST['unBlockFormal_Wear']))
        {
            $updateOngoingFormal_Wear = "UPDATE category SET status = 'ONGOING' where category_name = 'Formal_Wear'";
            mysqli_query($link,$updateOngoingFormal_Wear);
        }

//FORMAL WEAR
        if(isset($_POST['BlockFinal_Interview']))
        {
            $updateDoneFinal_Interview = "UPDATE category SET status = 'DONE' where category_name = 'Final_Interview'";
            mysqli_query($link,$updateDoneFinal_Interview);
        }

        if(isset($_POST['unBlockFinal_Interview']))
        {
            $updateOngoingFinal_Interview = "UPDATE category SET status = 'ONGOING' where category_name = 'Final_Interview'";
            mysqli_query($link,$updateOngoingFinal_Interview);
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

        ul{
            list-style-type: none;
        }
        li.one{
            display: flex;
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
                        <a href="settings.php">
                            <i class="fa fa fa-cogs" style="color: white"></i>
                            <p style="color: white">Settings</p>
                        </a>
                    </li>
                    <li  class="active">
                        <a href="production_male_1.php">
                            <i class="fa fa fa-list" style="color: white"></i>
                            <p style="color: white">Production</p>
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
                                    <h1 class="title"><b>Settings</b></h1>
                                   
                                </div>
                                <br>


                                <ul>
                                    <li  class="one">
                                        <h3><b>PRODUCTION</b></h3><br>
                                        <?php 

                                        $link = mysqli_connect("localhost","root","","tabulation");

                                        $sql_block1 = mysqli_query($link,"SELECT * from category where category_name = 'Production' and id = 2");
                                            for($x = 0 ; $x < $num_rowsp1 = mysqli_fetch_array($sql_block1) ; $x++ )
                                            {

                                                $category_name = $num_rowsp1['category_name'];
                                                $category_status = $num_rowsp1['status'];
                                       
                                        echo "<p style='margin-top: 28px;margin-left: 20px;'>Status: <b>$category_status</b></p>";

                                                if($category_status == 'ONGOING')
                                                {
                                                        echo '<form method="post">
                                                            <button type="submit" class="btn btn-outline-success" name="BlockProduction" style="margin-top: 18px;margin-left: 20px;"> 
                                                                Marked as Done
                                                            </button>
                                                            </form>';

                                                }
                                                else if($category_status == 'DONE')
                                                {
                                                     echo '<form method="post">
                                                            <button type="submit" class="btn btn-success" name="unBlockProduction" style="margin-top: 18px;margin-left: 20px;"> 
                                                                DONE
                                                            </button>
                                                        </form>';
                                                }

                                            }

                                            ?>


                                    </li>
 
                                    <li  class="one">
                                        <h3><b>SPORTS WEAR</b></h3><br>
                                        <?php 

                                        $link = mysqli_connect("localhost","root","","tabulation");

                                        $sql_block2 = mysqli_query($link,"SELECT * from category where category_name = 'Sports_Wear' and id = 3");
                                            for($y = 0 ; $y < $num_rowsp2 = mysqli_fetch_array($sql_block2) ; $y++ )
                                            {

                                                $category_name = $num_rowsp2['category_name'];
                                                $category_status = $num_rowsp2['status'];
                                       
                                        echo "<p style='margin-top: 28px;margin-left: 20px;'>Status: <b>$category_status</b></p>";

                                                if($category_status == 'ONGOING')
                                                {
                                                        echo '<form method="post">
                                                            <button type="submit" class="btn btn-outline-success" name="BlockSports_Wear" style="margin-top: 18px;margin-left: 20px;"> 
                                                                Marked as Done
                                                            </button>
                                                            </form>';

                                                }
                                                else if($category_status == 'DONE')
                                                {
                                                     echo '<form method="post">
                                                            <button type="submit" class="btn btn-success" name="unBlockSports_Wear" style="margin-top: 18px;margin-left: 20px;"> 
                                                                DONE
                                                            </button>
                                                        </form>';
                                                }

                                            }

                                            ?>


                                    </li>


                                    
                                    <li  class="one">
                                        <h3><b>FORMAL WEAR</b></h3><br>
                                        <?php 

                                        $link = mysqli_connect("localhost","root","","tabulation");

                                        $sql_block4 = mysqli_query($link,"SELECT * from category where category_name = 'Formal_Wear' and id = 5");
                                            for($h = 0 ; $h < $num_rowspy = mysqli_fetch_array($sql_block4) ; $h++ )
                                            {

                                                $category_name = $num_rowspy['category_name'];
                                                $category_status = $num_rowspy['status'];
                                       
                                        echo "<p style='margin-top: 28px;margin-left: 20px;'>Status: <b>$category_status</b></p>";

                                                if($category_status == 'ONGOING')
                                                {
                                                        echo '<form method="post">
                                                            <button type="submit" class="btn btn-outline-success" name="BlockFormal_Wear" style="margin-top: 18px;margin-left: 20px;"> 
                                                                Marked as Done
                                                            </button>
                                                            </form>';

                                                }
                                                else if($category_status == 'DONE')
                                                {
                                                     echo '<form method="post">
                                                            <button type="submit" class="btn btn-success" name="unBlockFormal_Wear" style="margin-top: 18px;margin-left: 20px;"> 
                                                                DONE
                                                            </button>
                                                        </form>';
                                                }

                                            }

                                            ?>


                                    </li>
                                    <li  class="one">
                                        <h3><b>PRELIMINARY INTERVIEW</b></h3><br>
                                        <?php 

                                        $link = mysqli_connect("localhost","root","","tabulation");

                                        $sql_block3 = mysqli_query($link,"SELECT * from category where category_name = 'Preliminary_Interview' and id = 4");
                                            for($d = 0 ; $d < $num_rowsp3 = mysqli_fetch_array($sql_block3) ; $d++ )
                                            {

                                                $category_name = $num_rowsp3['category_name'];
                                                $category_status = $num_rowsp3['status'];
                                       
                                        echo "<p style='margin-top: 28px;margin-left: 20px;'>Status: <b>$category_status</b></p>";

                                                if($category_status == 'ONGOING')
                                                {
                                                        echo '<form method="post">
                                                            <button type="submit" class="btn btn-outline-success" name="BlockPreliminary_Interview" style="margin-top: 18px;margin-left: 20px;"> 
                                                                Marked as Done
                                                            </button>
                                                            </form>';

                                                }
                                                else if($category_status == 'DONE')
                                                {
                                                     echo '<form method="post">
                                                            <button type="submit" class="btn btn-success" name="unBlockPreliminary_Interview" style="margin-top: 18px;margin-left: 20px;"> 
                                                                DONE
                                                            </button>
                                                        </form>';
                                                }

                                            }

                                            ?>


                                    </li>
                                     <li  class="one">
                                        <h3><b>FINAL INTERVIEW</b></h3><br>
                                        <?php 

                                        $link = mysqli_connect("localhost","root","","tabulation");

                                        $sql_block5 = mysqli_query($link,"SELECT * from category where category_name = 'Final_Interview' and id = 6");
                                            for($p = 0 ; $p < $num_rowspt = mysqli_fetch_array($sql_block5) ; $p++ )
                                            {

                                                $category_name = $num_rowspt['category_name'];
                                                $category_status = $num_rowspt['status'];
                                       
                                        echo "<p style='margin-top: 28px;margin-left: 20px;'>Status: <b>$category_status</b></p>";

                                                if($category_status == 'ONGOING')
                                                {
                                                        echo '<form method="post">
                                                            <button type="submit" class="btn btn-outline-success" name="BlockFinal_Interview" style="margin-top: 18px;margin-left: 20px;"> 
                                                                Marked as Done
                                                            </button>
                                                            </form>';

                                                }
                                                else if($category_status == 'DONE')
                                                {
                                                     echo '<form method="post">
                                                            <button type="submit" class="btn btn-success" name="unBlockFinal_Interview" style="margin-top: 18px;margin-left: 20px;"> 
                                                                DONE
                                                            </button>
                                                        </form>';
                                                }

                                            }

                                            ?>


                                    </li>
                                     


                                </ul>
                                
                        
                            </div>




                        </div>
                    </div>
                    <br><br><br><br><br><br><br><br>
                    <div class="container text-center pt-3" ><!-- aaacesss -->
                        <p style="font-family:'Livvic', sans-serif;font-size: 14px;margin-top: -35px;color:white">&copy; This system was made by Jhon Ace Casabuena and Computer Studies Department</p>
                    </div>           
                </div>
            </div>
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

        <form method="post">
    <div class="modal fade" id="doneProduction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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