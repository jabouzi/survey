<?php 

session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	include('config/config.php');
	$db = Database::getInstance();
	$db->build($config);

	$errors = 0;
	for($i = 1; $i <= 3; $i++)
	{
		for($j = 1; $j <= 4; $j++)
		{
			if (!isset($_POST['ios_'.$i.'_'.$j])) $errors++;
			if (!isset($_POST['android_'.$i.'_'.$j])) $errors++;
		}
	}
	
	if ($errors)
	{
		$_SESSION['message'] = 'Please answer all questions with an * / SVP répondre à toutes les questions avec une *';
		header('location: index.php');
		exit;
	}
	else
	{
		$args = array(':ios_comments' => $_POST['ios_comments'], ':android_comments' => $_POST['android_comments']);
		for($i = 1; $i <= 3; $i++)
		{
			for($j = 1; $j <= 4; $j++)
			{
				$args[':ios_'.$i.'_'.$j] = $_POST['ios_'.$i.'_'.$j];
				$args[':android_'.$i.'_'.$j] = $_POST['android_'.$i.'_'.$j];
			}
		}
		$ip_address = ip_address();
		$user_agent = user_agent();
		$session_id = session_id();
		$now = date('Y-m-d H:i:s');
		$query = "INSERT INTO survey_activities VALUES ('{$user[0]['id']}', '{$ip_address}', '{$user_agent}', '{$session_id}', '{$now}')";
		$db->query($query, array());
		//echo '<pre>';
		//print_r($args);
		//$args[':id'] = $db->lastInsertId();
		$query = "insert into survey_answers (
		  id,
		  ios_1_1,
		  ios_1_2,
		  ios_1_3,
		  ios_1_4,
		  ios_2_1,
		  ios_2_2,
		  ios_2_3,
		  ios_2_4,
		  ios_3_1,
		  ios_3_2,
		  ios_3_3,
		  ios_3_4,
		  android_1_1,
		  android_1_2,
		  android_1_3,
		  android_1_4,
		  android_2_1,
		  android_2_2,
		  android_2_3,
		  android_2_4,
		  android_3_1,
		  android_3_2,
		  android_3_3,
		  android_3_4,
		  ios_comments,
		  android_comments,
		) values (
		  '',
		  :ios_1_1,
		  :ios_1_2,
		  :ios_1_3,
		  :ios_1_4,
		  :ios_2_1,
		  :ios_2_2,
		  :ios_2_3,
		  :ios_2_4,
		  :ios_3_1,
		  :ios_3_2,
		  :ios_3_3,
		  :ios_3_4,
		  :android_1_1,
		  :android_1_2,
		  :android_1_3,
		  :android_1_4,
		  :android_2_1,
		  :android_2_2,
		  :android_2_3,
		  :android_2_4,
		  :android_3_1,
		  :android_3_2,
		  :android_3_3,
		  :android_3_4,
		  :ios_comments,
		  :android_comments
		  )";
		$db->query($query, $args);
		$_SESSION['message'] = 'Thank You for your paticipation. / Merci d\'avoir participé.';
		header('location: index.php');
		exit;
	}
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

