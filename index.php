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
  $user= $_POST['username'];
  $pass = sha1($_POST['password']);
  
    $username = strip_tags(mysqli_real_escape_string($link,trim($user)));
    $password = strip_tags(mysqli_real_escape_string($link,trim($pass)));

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
        header('location:settings.php');
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
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <title>Official Pageant Tabulation Ce-C Palaro</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">

    <link rel="stylesheet" href="js/bootstrap-icons.css" />
    <style type="text/css">
        ::placeholder {
          color: black !important;
          font-style: italic;


        }

        input, .form-control{
            border-color: none;
            color:green;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-bottom: 1px solid black !important;
            border: 0;
            border-radius: 0;
            text-decoration: none;
            background: transparent;
            font-family: 'Livvic', sans-serif;
            
        }

        .form-control:focus 
        {
            border-color: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: 0;
            border-bottom: 1px solid black;
            border-radius: 0;
            text-decoration: none;
            background: transparent;
            font-family: 'Livvic', sans-serif;
            
            
        }
        label {
            position:relative;
            display:inline-block;
            font-family: 'Livvic', sans-serif;
        }
        input.checkBox{
          width:15px;
          height: 15px;
          margin-top:8px ;
        }
        .field-icon {
        float: right;
        margin-left: -25px;
        margin-top: -30px;
        margin-right: 15px;
        position: relative;
        z-index: 2;
      }
      .figure-caption{
        margin-top: -80px;
      }


    </style>
 
  </head>

  <body class="bg-dark">
    <main role="main">
    <body>
      <div class="container" >
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto" style="margin-top: 110px">
            <div class="card bg-light card-signin my-4" >
              <div class="card-body">
                <img src="img/final_logo.png" width="170px" height="1%" class="mx-auto d-block" alt="Ce-C Palaro 2019">
                <figcaption class="figure-caption text-center mb-4" style="color:black;font-size:30px;font-family: Pristina Regular;margin-top:10px"><b>Mr. and Ms. Ce-C Palaro 2023</b></figcaption>
                <form class="form-signin" method="post">
                  <div class="form-label-group">
                    <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Username</label>
                    <input type="text" id="inputEmail" class="form-control red" placeholder="" required autofocus name = "username" >
                  </div>
                  <div class="form-label-group">
                  <label for="inputPassword" style="color:black;font-family: 'Livvic', sans-serif;">Password</label>
                  <input type="password" id="password" class="form-control red" placeholder="" required name="password"/>

                <i class="fa fa-eye-slash field-icon" id="togglePassword"></i>
                    </div><br>
                  <button class="btn btn-success btn-lg btn-block mb-4 mt-4" type="submit" name = "login" style="color:white;font-family: 'Fjalla One', cursive;">SIGN IN</button>
                  <hr class="my-1">
                      <footer class="text-muted">
      <div class="container text-center pt-3">
        <p style="font-family:'Livvic', sans-serif;font-size: 14px">&copy; This system was developed by Jhon Ace Casabuena and Computer Studies Department</p>
      </div>
    </footer><!--lalalal -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

<script type="text/javascript">

        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("fa-eye");
        });



</script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
