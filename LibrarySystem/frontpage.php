<!DOCTYPE html>
<?php 
  require_once 'connect.php';
  if(ISSET($_SESSION['admin_id'])){
    header('location:studentlogin.php');
  }
?>
<html lang = "eng">
  <head>
    <title>Library System</title>
    <meta charset = "utf-8" />
    <meta name = "viewport" content = "width=device-width, initial-scale=1" />
    <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
    <style>
    .btn{
      padding: 4px;
      background:#000;
      border:1px solid #000;
      color:#fff; 
    }
  </style>
  </head>
  <body style = "background-color:#d3d3d3;">
    <nav class = "navbar navbar-default navbar-fixed-top">
      <div class = "container-fluid">
        <div class = "navbar-header">
          <a href="frontpage.php">
          <img src = "images/logo.png" width = "50px" height = "50px" />
          <h4 class = "navbar-text navbar-right">Library System</h4>
        </a>
        </div>
        <div class="tab " style="float:right; padding-top:20px">
        <a href="index.php" class="btn">LIBRAIN</a>
          <a href="studentlogin.php" class="btn">STUDENT DETAILS</a>
        </div>
      </div>
    </nav>
    <div class = "container-fluid" style = "margin-top:70px;">
    
      
      <div class = "col-lg-12 well">
        <img src = "images/1.jpg" height = "600px" width = "100%" />
      </div>
    </div>
    <nav class = "navbar navbar-default navbar-fixed-bottom">
      <div class = "container-fluid">
        <label class = "navbar-text pull-right">Library System &copy; All rights reserved 2019</label>
      </div>
    </nav>
  </body>
  <script src = "js/jquery.js"></script>
  <script src = "js/bootstrap.js"></script>
  <script src = "js/login.js"></script>
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

</html>