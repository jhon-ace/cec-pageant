<?php
include('config.php');

if(!empty($_SESSION['login_admin']))
{
    header('location:result_talent_night.php');
}
if(!empty($_SESSION['login_judge']))
{
    header('location:categories.php');
}
if(isset($_POST['login']))
{
	$username= $_POST['username'];
	$password = sha1($_POST['password']);
	

			$query_judge = mysqli_query($link,"SELECT *FROM login WHERE username = '".$username."' AND password='".$password."' AND account_type = 'judge' ");
			$query_admin = mysqli_query($link,"SELECT *FROM login WHERE username = '".$username."' AND password='".$password."' AND account_type = 'admin'  ");
			
			$fetch_judge = mysqli_fetch_array($query_judge);
			$fetch_admin = mysqli_fetch_array($query_admin);
			
			if(is_array($fetch_judge))
			{ 
				$_SESSION['login_judge'] = $_POST['username'];
				$_SESSION['login_session'] = "login";
				header('location:categories.php');
			}
			else if(is_array($fetch_admin))
			{
				$_SESSION['login_admin'] = $_POST['username'];
				$_SESSION['login_session'] = "login";
				header('location:result_talent_night.php');
			}
			else
			{
				echo '<script>';
				echo 'alert ("Wrong credentials");location.href="index.php"';
				echo '</script>';
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

    <title>Official Pageant Tabulation Ce-C Palaro</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <style type="text/css">
        ::placeholder {
          color: black !important;

        }
    </style>
  </head>

  <body class="bg-dark">
    <main role="main">
    <body>
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card bg-light card-signin my-4">
              <div class="card-body" style="margin-top: -10px">
                <img src="img/final_logo.png" width="200px" height="100%" class="mx-auto d-block mt-4" alt="Ce-C Palaro 2019"><br>
                <figcaption class="figure-caption text-center mb-4" style="color:black;font-size:18px;font-family: 'Fjalla One', sans-serif;">Mr. and Ms. Ce-C Palaro 2019</figcaption>
                <form class="form-signin" method="post">
                  <div class="form-label-group">
                    <input type="text" id="inputEmail" class="form-control" placeholder="" required autofocus name = "username" >
                    <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Username</label>
                  </div>
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="" required name = "password">
                    <label for="inputPassword" style="color:black;font-family: 'Livvic', sans-serif;">Password</label>
                  </div>
                  <button class="btn btn-success btn-lg btn-block mb-4 mt-4" type="submit" name = "login" style="color:white;font-family: 'Fjalla One', cursive;">SIGN IN</button>
                  <hr class="my-4">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="text-muted">
      <div class="container text-center pt-3">
        <p style="color:white">&copy; This system was made by Jhon Ace Casabuena and CAPG Students</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
