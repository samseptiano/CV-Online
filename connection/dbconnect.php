<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$host = "mysql.idhostinger.com";
	$username = "u559893195_root";
	$password = ">;PSV5z#U44Ls!nEvJ";
	$database = "u559893195_samue";
	$connection = mysql_connect($host,$username,$password);
	if(!$connection)
	{
		die("could not connect : ".mysql_error());
	}
	
	$db = mysql_select_db($database,$connection);
	
	if(!$db)
	{
		$createdb = mysql_query("create database personal");
		$db = mysql_select_db($database,$connection);
		$tableSubscriber = mysql_query("create table subscriber(name varchar(50), email varchar(50), country varchar(50), state varchar(50), message text not null, date datetime)");
	}
	else
	{
		$tableSubscriber = mysql_query("create table subscriber(name varchar(50), email varchar(50), country varchar(50), state varchar(50), message text not null, date datetime)");
	}
?>