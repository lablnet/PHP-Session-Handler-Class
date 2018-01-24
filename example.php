<?php
require_once 'classes/Session.php';

$sess = new Session;

$name = "session";

$value = "Hay i am php session";

/*
// Set/store value in session

$sess->SetValue([

	'name' => $name,

	'value' => $value,

]);

*/

/*
//deleting/unset the session

$sess->UnsetValue($name);

*/

//printing the session if set

echo $sess->GetValue($name);

echo "<br>";

//checking the session is set or not

if($sess->CheckStatus($name)){

	echo "session is set";

}else{

	echo "session is not set";

}

