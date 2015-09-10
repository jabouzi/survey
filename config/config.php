<?php

include('database.php');

if (strstr(__DIR__, 'varilux.ca')) 
{
	$config['database'] = 'varilux';
	$config['username'] = 'varilux';
	$config['password'] = 'jDZmw9fCn3eMCMCn';
	$config['host'] = '10.11.62.120';
}
else if (strstr(__DIR__, 'dev.tgiprojects.com')) 
{
	$config['database'] = 'varilux';
	$config['username'] = 'varilux';
	$config['password'] = 'xbUwnjZA6f7uUqjY';
	$config['host'] = '209.104.115.222';
}
else
{
	$config['database'] = 'varilux';
	$config['username'] = 'varilux';
	$config['password'] = 'xbUwnjZA6f7uUqjY';
	$config['host'] = '209.104.115.222';
	/*$config['database'] = 'varilux';
	$config['username'] = 'root';
	$config['password'] = '7024043';
	$config['host'] = 'localhost';*/
}
$config['driver'] = 'mysql';
$config['port'] = '3306';

