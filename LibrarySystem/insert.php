<?php
require_once 'connect.php';
?>
 <?php
	//if(isset($_POST['submit']))
//	{

require_once 'connect.php';
	if(ISSET($_POST['save_book'])){
		$Studentno=$_POST['studentno'];
$Fname=$_POST['fname'];
$Lname=$_POST['lname'];
$Course=$_POST['course'];
$Section=$_POST['section'];
$Bookname=$_POST['bookname'];

	$conn->query("INSERT INTO `studentlogin`(Studentno,Fname,Lname,Course,Section,Bookname) VALUES('$Studentno', '$Fname', '$Lname', '$Course', '$Section', '$Bookname')") or die(mysqli_error($conn));
		echo '
			<script type = "text/javascript">
				alert("You have inserted Your details Successfully i will issue that book.");
				window.location = "studentlogin.php";
			</script>
		';
	}



	?>