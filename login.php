<?php

session_start();
  
  include("connection.php");
  include("functions.php");

  if($_SERVER['REQUEST_METHOD']=="POST")
  {
    $email= $_POST['email'];
    $password= $_POST['password'];

    if(!empty($email) && !empty($password))
    {
      
      $query = "select * from users where email='$email' limit 1";
      $result = mysqli_query($con, $query);

      if($result)
      {
        if($result && mysqli_num_rows($result)>0 )
        {
          $user_data = mysqli_fetch_assoc($result);
          
          if($user_data['password']=== $password)
          {
              $_SESSION['user_id'] = $user_data['user_id'];
              header("Location: http://localhost/index.php");
              die;
          }
        }
      }
      echo "Wrong email or password!";
    }else
    {
      echo "Wrong email or password!";
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>LOGIN</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
  body {
    color: #fff;
    background: #63738a;
    font-family: 'Roboto', sans-serif;
    overflow:hidden;
    
  }

    .form-control{
    height: 40px;
    box-shadow: none;
    color: #969fa4;
  }
  .form-control:focus{
    border-color: #5cb85c;
  }
    .form-control, .btn{        
        border-radius: 3px;
    }
  .login-form{
    width: 400px;
    margin: 0 auto;
    padding: 30px 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);

  }
  .login-form h2{
    color: #636363;
        margin: 0 0 15px;
    position: relative;
    text-align: center;
    }
  .login-form h2:before, .login-form h2:after{
    content: "";
    height: 2px;
    width: 30%;
    background: #d4d4d4;
    position: absolute;
    top: 50%;
    z-index: 2;
  } 
  .login-form h2:before{
    left: 0;
  }
  .login-form h2:after{
    right: 0;
  }
    .login-form .hint-text{
    color: #999;
    margin-bottom: 30px;
    text-align: center;
  }
    .login-form form{
    color: #999;
    border-radius: 3px;
      margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
  .login-form .form-group{
    margin-bottom: 20px;
  }
  .login-form input[type="checkbox"]{
    margin-top: 3px;
  }
  .login-form .btn{        
        font-size: 16px;
        font-weight: bold;    
    min-width: 140px;
        outline: none !important;
    }
  .login-form .row div:first-child{
    padding-right: 10px;
  }
  .login-form .row div:last-child{
    padding-left: 10px;
  }     
    .login-form a{
    color: #fff;
    text-decoration: underline;
  }
    .login-form a:hover{
    text-decoration: none;
  }
  .login-form form a{
    color: #5cb85c;
    text-decoration: none;
  } 
  .login-form form a:hover{
    text-decoration: underline;
  }  
 
  .btn1{
    background: hsla(302, 100%, 50%, 1);

background: linear-gradient(180deg, hsla(302, 100%, 50%, 1) 0%, hsla(219, 95%, 37%, 1) 100%);

background: -moz-linear-gradient(180deg, hsla(302, 100%, 50%, 1) 0%, hsla(219, 95%, 37%, 1) 100%);

background: -webkit-linear-gradient(180deg, hsla(302, 100%, 50%, 1) 0%, hsla(219, 95%, 37%, 1) 100%);

filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#FE00F7", endColorstr="#0543B6", GradientType=1 );

color:#d1d1d1;
  }
  

  
</style>
<!-- <script>
    function pageRedirect() {
      window.location.href = "form.html";
    }   
   </script> -->
</head>
<body>
<div class="bgimage">
      <video width="100%" autoplay loop muted>
        <source src="Bgvideo.mp4" type="video/mp4">
      </video>             
    
  <div class="login-form">
    <form action="login.php" method="post">
    <h2>LOGIN</h2>
        <div class="form-group">
          <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
    <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
        
        <div class="form-group">
      <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
    </div>
    <div class="form-group">
            <button type="submit" class="btn btn1  btn-lg btn-block">LOGIN</button>
        </div>
    </form>
  <div class="text-center">Don't have an account? <a href="http://localhost/signup.php">Sign up</a></div>

</div>
</div>

</body>
</html>
