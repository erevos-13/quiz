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

<div class="one">
<h2><?php print "<p> Welcome to My site <b><i><sup>". $_SESSION['name'] ."</sup></i></b></p>"; ?></h2>
<p>You've successfully logged in.</p>
<p>And you can see what i make for you to select me for hire.<br> It is a simple Quiz game where i made with Php and Mysql. <br> You can click the button <b>Insert Question</b> to insert a question of your own. <br> Or you can click the button <b>Game</b> to start play the game i make.</p>
<a href="insert.php"><button>Insert Question</button></a>
<a href="game.php"><button>Game</button></a>

</div>

<?php include('templates/footer.html'); // Need the footer. ?>