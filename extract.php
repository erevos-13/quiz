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

		$query = "SELECT * FROM question ORDER BY RAND() ";

		$mydata = mysqli_query($dbc,$query);

        

		while($record = mysqli_fetch_array($mydata))
            {

                echo $record['question']."<br>";
                echo $record['cor_answer']."<br>";
                echo $record['answer1']."<br>";
                echo $record['answer2']."<br>";
               
                
                
            }

		
            
           
 mysqli_close($dbc);
        }




?>answer1

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="extract.php" method ="post">
            
            <input type="submit" name="submit">
</body>
</html>