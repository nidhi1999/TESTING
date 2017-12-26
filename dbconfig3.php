<?php
	require("php_constants.php");
	$host = host;
	$dbname = dbname;

	try
	{
	     $pdo = new PDO("mysql:host={$host};dbname={$dbname}",username,password);
	     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e)
	{

	     echo $e->getMessage();;;;;;.................................ffffffffffffffffffffffffffffffff

	}

	include 'class.user.php';
	$user = new USER($pdo);
    include 'class.organiser.php';
    $organiser = new ORGANISER($pdo);
    include 'class.admin.php';
    $admin = new ADMIN($pdo); 
    include 'classes/event.php';
    $event = new event($pdo);
    include 'show_events.php';
    $show = new show_events($pdo);
    include 'complete_ongoing_event.php';
    $complete=new complete_event($pdo);
    include 'sendmail.php';
    include 'authentication.php';
    $auth=new AUTHENTICATION($pdo);
?>


