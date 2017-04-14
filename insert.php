<!DOCTYPE html>
<html>
<head>
	<title>insert Question</title>
</head>
<body>
<form method="post" action="insert.php">
	Question:<p><input type="text" name="question"></p>
	Correct Answer: <p><input type="text" name="cor_answer"></p>

	Answer1 : <p><input type="text" name="answer1"></p>
	Answer2 : <p><input type="text" name="answer2"></p>
	
	<input type="submit" name="submit">
	
</form>
</body>
</html>



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



