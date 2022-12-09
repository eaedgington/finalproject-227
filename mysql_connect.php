<?php

define( 'DB_USER', 'eaedgington' );
define( 'DB_PASSWORD', 'Fr0gTr!p#2918' );
define( 'DB_HOST', 'localhost' );
define( 'DB_NAME', 'eaedgington' );

$dbc = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME ) or die("Could not connect to MySQL");
// print_r($dbc);

?>