<?php
	try
	{
        $db = new PDO("mysql:host=localhost;dbname=io_exb","dbuser","!#asddfsda#ASsdff123");
	}
	catch (PDOException $e)
	{
        print ("Cannot connect to server\n");
        print ("Error code: " . $e->getCode () . "\n");
        print ("Error message: " . $e->getMessage () . "\n");
	}
?>