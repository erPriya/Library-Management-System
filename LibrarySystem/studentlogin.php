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
			<div class = "col-lg-5 well">
				<br />
				<br />
				<h4>Fill your details here for book issue Here..</h4>
				<hr style = "border:1px solid #d3d3d3; width:100%;" />
<form method = "POST" action = "insert.php" enctype = "multipart/form-data">
								<div class = "form-group">
									<label>Student No:</label>
									<input type = "text" name = "studentno" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>First Name:</label>
									<input type = "text" name = "fname" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Last Name:</label>
									<input type = "text" name = "lname" class = "form-control" required = "required"/>
								</div>
								<div class = "form-group">
									<label>Course:</label>
									<input type = "text" name = "course" class = "form-control" required = "required" />
								</div>
								<div class = "form-group">
									<label>Section:</label>
									<input type = "text" name = "section" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Bookname:</label>



<select name= 'bookname' class = "form-control" required>
<option value="">-----Select Book----</option>
<?php

$qbook = $conn->query("SELECT book_category FROM `book`") or die(mysqli_error());
while($fbook = $qbook->fetch_array()){
	?>
    
<option value="<?php echo $fbook['book_category']; ?>"><?php echo $fbook['book_category']; ?>
</option>
<?php
}
?>
 </select>



								</div>
								<div class = "form-group">
									<button name = "save_book" class = "btn btn-primary"><span class = "glyphicon glyphicon-save"></span> Submit</button>
								</div>
							</form>	
				<div id = "result"></div>
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
			</div>
			<div class = "col-lg-1"></div>
			<div class = "col-lg-7 well">
				<img src = "images/back.jpg" height = "449px" width = "100%" />
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