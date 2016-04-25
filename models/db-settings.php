<?php
/************************************************************************/
/* Helix                                                                */
/* Juan Loubser                                                         */
/* www.digitalentity.co.za                                              */
/* dev@digitalentity.co.za                                              */
/**************************    BY Digitalentity.co.za *******************/

//Database Information
$db_host = "localhost"; //Host address (most likely localhost)
$db_user = "root"; //Name of database user
$db_pass = "root"; //Password for database user
$db_name = "new_helix"; //Name of Database
$db_table_prefix = "";

GLOBAL $errors;
GLOBAL $successes;

$errors = array();
$successes = array();

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
GLOBAL $mysqli;

if($mysqli->connect_errno) {
	echo "Database Connection Failure: " . $mysqli->connect_errno;
}

//Direct to install directory, if it exists
if(is_dir("install/"))
{
	header("Location: install/");
	die();

}

?>