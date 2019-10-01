<?php

//Credentials
$server = "localhost";
$user = "mysql";
$password = "mysql";
$db = "novaposhta";

$errors_list = $_POST['np_errors'];


//$errors_list = array( 0 =>"20000100005");
//$errors_list = json_encode($errors_list);

$errors_list = json_decode($errors_list);


$errors = join("','", $errors_list);


//Connect
$link = mysqli_connect($server, $user, $password);
//Select database
mysqli_select_db($link, $db);

//Assemble query
$query = "SELECT MessageDescriptionUA FROM errorslist WHERE MessageCode IN ('$errors')";

//Query database
$result = mysqli_query($link, $query);

$result = mysqli_fetch_all($result, MYSQLI_ASSOC);



echo json_encode($result);

//mysql_free_result($result);