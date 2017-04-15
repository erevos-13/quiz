<?php // Script 8.4 - index.php
/* This is the home page for this site. 
It uses templates to create the layout. */
ini_set('display_errors', 1);

error_reporting(E_ALL);


//edw tha valw kai ta difine gia na einai kai stin arxi
define('TITLE', 'Isert in Quiz');
define('H1', 'Quiz for Hire' ) ;
define('href', '2.php');
// Include the header:
include('templates/header.html');
// Leave the PHP section to display lots of HTML:
//edw vazw to session gia na kratisw to log in
			
?>
<form id="insert" method="post" action="insert.php">
	<h1 >Question:</h1> 
	<p><input type="text" name="question" placeholder="insert the question"></p>
	<p class="paragraph_big">Correct Answer:</p> 
	<p ><input type="text" name="cor_answer" placeholder="the coreect answer"></p>
	<p class="paragraph_big">Answer1 :</p> 
	<p><input type="text" name="answer1" placeholder="answer1"></p>
	<p class="paragraph_big">Answer2 : </p>
	<p><input type="text" name="answer2" placeholder="answer2"></p>
	
	<input type="submit" name="submit">


<?php

include('templates/footer.html'); // Need the footer.

?>




<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


 if(isset($_POST['submit'])){
            
            
            
            $dbc = mysqli_connect('localhost', 'root', 'erevos13');

            if(!$dbc)
            {
                die("den anoigi" . mysqli_error());
            }
		


		mysqli_select_db($dbc,"quiz");
		mysqli_set_charset($dbc,'UTF-8' );

		$query = "INSERT INTO question ( id,
		 question,
		  cor_answer,
		   answer1,
		    answer2  ) 
		    VALUES  
		( Null,
		'$_POST[question]',
		 '$_POST[cor_answer]',
		  '$_POST[answer1]',
		   '$_POST[answer2]')";

		   echo "you add one question";
		mysqli_query($dbc,$query);
            
           
 mysqli_close($dbc);
        }




?>



