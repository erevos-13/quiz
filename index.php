<?php
// Set the page title and include the header file:

define('TITLE', 'Login');
define('H1', 'Quiz for Hire');
include('templates/headerlogin.html');
//edw kenergopio to session

 // Script 8.8 - login.php
/* This page lets people log into the site (in theory). */
date_default_timezone_set('Europe/Athens');

// Print some introductory text:


// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Handle the form:
	if ( (!empty($_POST['email'])) && (!empty($_POST['password'])) ) {

		//connect with the database for request the data to login
		include('connect/mysqli_connect.php');

		//select from my database the email and name
		$query = "SELECT email , password, name FROM users ";
		
		//run the query 
		$r = mysqli_query($dbc, $query);
		
		// Retrieve and print every record of mail and password for comparison
	while ($row = mysqli_fetch_array($r)){
		
		if ( (strtolower($_POST['email']) == $row['email']) && ($_POST['password'] == $row['password']) ) { 
		// Correct!	
			//tha kalesw kai to onoma edw apo to mail

			session_start();
			$_SESSION['time'] = date('g:i a l F j');
			$_SESSION['name'] = $row['name'];
			
			header("Location: http://orfeasvou.com/cv_site/one.php");
			ob_end_flush();
			exit();

			
			
		} else { // Incorrect!

			print '<p class="text--error">The submitted email address and password do not match those on file!<br>Go back and try again.</p>';

		}
	}
	} else { // Forgot a field.

		print '<p class="text--error">Please make sure you enter both an email address and a password!<br>Go back and try again.</p>';

	}
	mysqli_close($dbc); 
}



?>
<!DOCTYPE html>
<html>
<div class="form" >
	<div class="form_input">
		<h2>Login Form</h2>
		<p>Here you can login:</p><br/>

			<form action="index.php" method="post" class="form--inline">
				<p><label for="email">Email Address : </label><input placeholder="email" type="email" name="email"></p>
				<p><label  for="password">Password : </label><input placeholder="password" type="password" name="password" ></p>
				<p><input class="button" type="submit" name="submit" value="Log In!" ></p>
			</form>
		<p><a href="register.php"><button class="button" >Register</button></a></p>

	</div>
</div>
<?php

include('templates/footer.html'); // Need the footer.

?>
</body>
</html>

	

