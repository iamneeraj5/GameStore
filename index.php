<?php  
session_start();
	
	include("connection.php");
	include("functions.php");

$user_data=check_login($con);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 


    <title>HOME</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="jumbotron.css" rel="stylesheet">
    
    <style>
      body{
        overflow-x:hidden;
      }
      
.box{
	position: relative;
}
.imge{
	position: absolute;
	top: -132px;
  left: 75%;
}
.box{
	border: 1px solid black;
	border-radius: 10px;
  width: 2000px;
  
}
.navbg{
  background-color:#111A29;
}
.bgimage{
  background-image:url(img2.jpg);
  height: 1000px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
footer{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  background: linear-gradient(315deg, #ffffff 0%, #d7e1ec 74%);
}
.wrapper .button{
  display: inline-block;
  height: 60px;
  width: 60px;
  float: left;
  margin: 0 5px;
  overflow: hidden;
  background: #fff;
  border-radius: 50px;
  cursor: pointer;
  box-shadow: 0px 10px 10px rgba(0,0,0,0.1);
  transition: all 0.3s ease-out;
}
.wrapper .button:hover{
  width: 200px;
}
.wrapper .button .icon{
  display: inline-block;
  height: 60px;
  width: 60px;
  text-align: center;
  border-radius: 50px;
  box-sizing: border-box;
  line-height: 60px;
  transition: all 0.3s ease-out;
}
.wrapper .button:nth-child(1):hover .icon{
  background: #4267B2;
}
.wrapper .button:nth-child(2):hover .icon{
  background: #1DA1F2;
}
.wrapper .button:nth-child(3):hover .icon{
  background: #E1306C;
}
.wrapper .button:nth-child(4):hover .icon{
  background: #333;
}
.wrapper .button:nth-child(5):hover .icon{
  background: #ff0000;
}
.wrapper .button .icon i{
  font-size: 25px;
  line-height: 60px;
  transition: all 0.3s ease-out;
}
.wrapper .button:hover .icon i{
  color: #fff;
}
.wrapper .button span{
  font-size: 20px;
  font-weight: 500;
  line-height: 60px;
  margin-left: 10px;
  transition: all 0.3s ease-out;
}
.wrapper .button:nth-child(1) span{
  color: #4267B2;
}
.wrapper .button:nth-child(2) span{
  color: #1DA1F2;
}
.wrapper .button:nth-child(3) span{
  color: #E1306C;
}

.row:hover{
  transform:scale(1.1);
}
  
footer{
  background:black;
  
}






    </style>
  </head>

  <body>
<div class="bgimage">
  <nav class="navbar navbar-expand-lg navbar-dark navbg" >
  <a class="navbar-brand" href="index.php">Epic Games Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/content.html">News <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost:8080/IP/feedback.html">Feedback <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/logout.php">Logout</a>
      </li>
    </ul>
  </div>
 
</nav>

    <main role="main">
    
      <div class="jumbotron" style="background-color:black">
        <div class="container box" height=250px  style="background-color: #111A29;color:white" >
        <img src="sman.png" class="rounded float-right imge" height=400px>
          <h1 class="display-3">Hello, <?php echo $user_data['first_name']; ?>!</h1>
          <p>Welcome to the game world!</p>
          <p><a class="btn btn-primary btn-lg" href="http://localhost/cart.php" role="button">ENTER &raquo;</a></p>
        </div>
      </div>

     <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h4 style="color:white;">NASCAR comes back to console video games, with the Unreal Engine</h4>
            <p><a class="btn btn-primary" href="http://localhost/content1.html" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h4 style="color:white;">Super Mario Bros Nintendo Game From 1985 Sold for $2 Million in a New Record</h4>
            <p><a class="btn btn-primary" href="http://localhost/content2.html" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h4 style="color:white;">NETFLIX to launch video games for no extra charge</h4>
            <p><a class="btn btn-primary" href="http://localhost/content3.html" role="button">View details &raquo;</a></p>
          </div>
        </div>
        <hr>

        

</div>
</div>
<footer style="background-color:black">
<div class="wrapper">
<div class="button">
            <div class="icon">
              <a href="https://www.facebook.com/epicgames" target="_blank">
               <i class="fab fa-facebook-f"></i>
            </div>
            <span>Facebook</span>
         </div>
         <div class="button">
            <div class="icon">
            <a href="https://twitter.com/epicgames"target="_blank">
               <i class="fab fa-twitter"></i>
            </div>
            <span>Twitter</span>
         </div>
         
         <div class="button">
            <div class="icon">
              <a href="https://www.youtube.com/epicgamesinc" target="_blank">
               <i class="fab fa-youtube"></i>
            </div>
            <span>YouTube</span>
         </div>
</div>
      
</footer>

    </main>

  
  </body>
</html>
