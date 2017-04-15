<?php // Script 8.14 - welcome.php
/* This is the welcome page. The user is redirected here
after they successfully log in. */
//here i start the session
session_start();
// Set the page title and include the header file:
define('TITLE', 'Login');
define('UL', 'Welcome');
define('H1', 'Login success');
include('templates/header.html'); 


?>

<div style="padding: 20px 20px;">
<h2><?php print "<p> Welcome to My site <b><i><sup>". $_SESSION['name'] ."</sup></i></b></p>"; ?></h2>
<p>You've successfully logged in.</p>
<p>And you can see what i make for you to select me for hire.</p>

</div>

<?php include('templates/footer.html'); // Need the footer. ?>