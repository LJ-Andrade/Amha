<?php

class Login extends DataBase
{
	var 	$User;
	var 	$Password;
	var 	$PasswordHash;
	var 	$RememberUser;
	var 	$IP;
	var 	$Tries;
	var		$IsMaxTries;
	var		$AdminData = array();
	var		$UserExists;
	var 	$PassMatch;
	var 	$Target;
	var		$Return;
	var 	$Link;

	const 	HOURS 		= 2;
	const 	MAX_TRIES	= 13;
	const 	LOGIN		= 'login/process.login.php';

	public function __construct($User='',$Password='',$Remember=0,$PasswordHash='')
	{
		$this->Connect();
		$this->getLink();
		if($User)
			$this->setData($User,$Password,$Remember,$PasswordHash);
		$this->IP 			= getenv("REMOTE_ADDR");
	}

	public function setData($User,$Password='',$Remember=0,$PasswordHash='')
	{
		$this->User			= $User;
		$this->Password		= $Password;
		$this->PasswordHash	= $PasswordHash? $PasswordHash : sha1($Password);
	}

	public function setSessionVars()
	{
		$_SESSION['user'] 				= 'amha';
		$_SESSION['admin_id'] 		= '9999';
		$_SESSION['company_id'] 	= '1';
		$_SESSION['first_name'] 	= 'Asociación Médica';
		$_SESSION['last_name'] 		= 'Homeopática Argentina';
		$_SESSION['profile_id'] 	= '1';
	}

	public function setCookies()
	{
		$time	= time()+(3600*$this->getHours());
		$Year = time() + 31536000;
		setcookie("user",$this->User,$time, "/");
		setcookie("password",$this->PasswordHash,$time, "/");
	}

	public function queryLogin()
	{
		return $this->execQuery('insert','login_log','user,ip,event',"'".$this->User."','".$this->IP."','OK'");

	}

	public function queryPasswordFail()
	{
		return $this->execQuery('insert','login_log',"user,password,ip,event","'".$this->User."','".$this->Password."','".$this->IP."','Clave Incorrecta'");
	}

	public function queryWrongUser()
	{
		return $this->execQuery('insert','login_log',"user,password,ip,event","'".$this->User."','".$this->Password."','".$this->IP."','Usuario invalido'");
	}

	public function getLink()
	{
		$ActualUrl	= explode("/",$_SERVER['PHP_SELF']);
		$this->Link	= $ActualUrl[count($ActualUrl)-2]."/".basename($_SERVER['PHP_SELF']);
	}

	public static function getHours()
	{
  	return self::HOURS;
	}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////// PROCESS METHODS ///////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function Startlogin()
	{
		$this->setData(strtolower($_POST['user']),$_POST['password']);
		//$this->setLogin();

		/* PROCESS */
		if($this->User=='amha')
		{
				if($_POST['password'] == 'Asoc1810')
				{
						$this->setSessionVars();
						$this->setCookies();
						$this->queryLogin();
				}else{
					$this->queryPasswordFail();
					echo "2";
				}
		}else{
			$this->queryWrongUser();
			echo "3";
		}
	}

	public function Logout()
	{
		session_destroy();
		//Unset Cookies
		setcookie("admin_amha", "", 0 ,"/");
		setcookie("user", "", 0 ,"/");
		setcookie("password", "", 0 ,"/");
		setcookie("admin_id", "", 0 ,"/");
		setcookie("profile_id", "", 0 ,"/");
		setcookie("first_name", "", 0 ,"/");
		setcookie("last_name", "", 0 ,"/");
		//setcookie("password", "", 0 ,"/");
	}
}


?>
