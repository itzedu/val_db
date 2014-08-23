<?php
include("include/connection.php");
session_start();

?>
<!doctype html>
<html>
<head>
	<title>Validation without DB</title>
	<style type="text/css">

	h1 {
		margin-left: 220px;
	}

	p {
		background-color: salmon;
		margin-top: 50px;
		border: 2px solid black;
		padding: 10px;
		display: inline-block;
		margin-left: 200px;
	}

	input[type='text'] {
		width: 430px;
		height: 20px;
		margin-left: 220px;
	}

	input[type='submit'] {
		margin-top: 10px;
		display: block;
		margin-left: 600px;
	}
	</style>
</head>
<body>
<?php if (isset($_SESSION['error'])) 
	  {	?>
		<p><?= $_SESSION['error'] ?></p>
<?php } ?>
		<h1>Please enter you email address: </h1>
		<form action='process.php' method='post'>
			<input type='text' name='email' placeholder='email address'>
			<input type='submit' value='Submit'>
		</form>
</body>
</html>

<?php
$_SESSION = array();
?>
