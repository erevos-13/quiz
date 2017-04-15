<?php // Script 8.4 - index.php
/* This is the home page for this site. 
It uses templates to create the layout. */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//edw tha valw kai ta difine gia na einai kai stin arxi
define('TITLE', 'Quiz');
define('H1', 'Quiz for Hire' ) ;
define('href', '2.php');
// Include the header:
include('templates/header.html');
// Leave the PHP section to display lots of HTML:
//edw vazw to session gia na kratisw to log in
			
?>


<div class="quiz">


	<?php
	//edw tha valw to connect me tin database 

	            $dbc = mysqli_connect('localhost', 'root', 'erevos13');

            if(!$dbc)
            {
                die("den anoigi" . mysqli_error());
            }
		mysqli_select_db($dbc,"quiz");
		mysqli_set_charset($dbc,'UTF-8' );
		

		$query = "SELECT * FROM question WHERE RAND() LIMIT 1  ";

		$mydata = mysqli_query($dbc,$query);
		

		


	

		echo '<form action="game.php" method="post">';
		
			
			while($record = mysqli_fetch_array($mydata))

            {	           	
            	
            	//edw thelw na kanw echo tis apantisis
            	
            		echo "<p>The question is:<br>".$record["question"]."</p>";
            	
				$answer1 ='<p><input type="radio" name="cor_answer" value='.$record['cor_answer'].">".$record['cor_answer']."</p>";
				$answer2 = '<p><input type="radio" name="answer1" value='.$record['answer1'].">".$record['answer1']."</p>";
				$answer3 = '<p><input type="radio" name="answer2" value='.$record['answer2'].">".$record['answer2']."</p>"; 
				
				//edw thelw na vgalw tixea ta echo

				$answer = array($answer1 ,$answer2 ,$answer3);
				shuffle($answer);
				foreach ($answer as $answer) {
					echo $answer;
				}




			}
            echo '<p><input type="submit" name="submit"></p>';
	echo "</form>";
		
            
           
 mysqli_close($dbc);
		
	
	
	
	

	?>
<?php
if (isset($_POST['submit'])) {

	
	if (isset($_POST['cor_answer']))  {	
			
		print("You have select the correct answer");		
	}elseif(isset($_POST['answer1'])){
		echo "you select the wrong answer try again!!!";
	}elseif (isset($_POST['answer2'])) {
		echo "you select the wrong answer  try again!!";
	}
	





}

?>
</form>
</div>

<?php

include('templates/footer.html'); // Need the footer.

?>
