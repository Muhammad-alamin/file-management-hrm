<?php 

include("Controller.php");

class UserController extends Controller
{
	public function tryLogin($username, $password)
	{
		$query = $this->connection->prepare("
			SELECT * FROM `admins` WHERE `admin_email`=:EMID AND `admin_password`=:PWD
		");

		$valueToBind = array(
			':EMID' => $username,
			':PWD' => md5($password)
		);

		$query->execute($valueToBind);

		$gotData = $query->fetchAll(PDO::FETCH_ASSOC);
		
		$totalRows = $query->rowCount();
		
		if($totalRows > 0)
			return $gotData[0];
		else
			return false;
	}
	
}
