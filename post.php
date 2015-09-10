<?php 

session_start();

include('config/config.php');
$db = Database::getInstance();
$db->build($config);

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	var_dump($_POST, $db);
	$ip_address = ip_address();
    $user_agent = user_agent();
    $session_id = session_id();
    $now = date('Y-m-d H:i:s');
    $query = "INSERT INTO varilux_authenticites_activities VALUES ('{$user[0]['id']}', '{$ip_address}', '{$user_agent}', '{$session_id}', '{$now}')";
    //mysql_query($query);

}

function user_agent()
{
        $user_agent = ( ! isset($_SERVER['HTTP_USER_AGENT'])) ? FALSE : $_SERVER['HTTP_USER_AGENT'];
        return $user_agent;
}

function ip_address()
{
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
                $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
                $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
                $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
                $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
                $ipaddress = getenv('REMOTE_ADDR');
        else
                $ipaddress = '0.0.0.0';
        return $ipaddress;
}

