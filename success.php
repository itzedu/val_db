<?php
include("include/connection.php");
session_start();

$sql = "SELECT * FROM users;";
$users = fetch_all($sql);
// echo $user['email'];
// var_dump($user);
?>
<!doctype html>
<html>
<head>
	<title>Success Message</title>
	<style type="text/css">
		p {
		background-color: #66FF33;
		margin-top: 20px;
		border: 2px solid black;
		padding: 10px;
		display: inline-block;
		margin-left: 200px;
		}

		button {
			margin-left: 650px;
			padding: 5px 10px;
		}
		td{
			margin: 50px;
		}


</style>
</head>
<body>
<?php if (isset($_SESSION['success'])) 
	  	{	?>
				<p><?= $_SESSION['success'] ?></p>
<?php } ?>
		<form action='index.php' method='post'>
			<button>Go Back</button>
		</form>

		<h2>Email Adress Entered</h2>

		<table>
<?php foreach ($users as $user)
			{	?>
			<tr>			
				<td><?= $user['email'] ?></td>
				<td><?= $user['created_at'] ?></td>
				<td><form action='process.php' method='post'>
							<input type='hidden' name='action' value='delete'>
							<input type='hidden' name='e_mail' value='<?=$user['email']?>'>
							<input type='submit' value='Delete'>
					</form>
				</td>
			</tr>
<?php	} ?>
		</table>
</body>
</html>