<?php // Script 13.1 - mysqli_connect.php
/* This script connects to the database
and establishes the character set for communications. */

// Connect:


 $dbc = mysqli_connect('localhost', 'root', 'erevos13');

            if(!$dbc)
            {
                die("den anoigi" . mysqli_error());
            }
		mysqli_select_db($dbc,"quiz");
		//Set the character set:
		mysqli_set_charset($dbc,'UTF-8' );

