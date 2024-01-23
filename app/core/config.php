<?php 


/****
* app info
*/
define('APP_NAME', 'full-stack php challenge');
define('APP_DESC', 'full-stack developer internship');

/****
* database config
*/
if($_SERVER['SERVER_NAME'] == 'localhost')
{
	//database config for local server
	define('DBHOST', 'localhost');
	define('DBNAME', 'full-stack-intern');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', 'mysql');

	//root path e.g localhost/
	define('ROOT', 'http://localhost/full-stack-challenge/public/');
}else
{
	//database config for live server
	define('DBHOST', 'localhost');
	define('DBNAME', 'full-stack-intern');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', 'mysql');

	define('ROOT', 'http://');
}

