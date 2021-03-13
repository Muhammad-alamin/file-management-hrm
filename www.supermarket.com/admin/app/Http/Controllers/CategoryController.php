<?php 

include("Controller.php");

class CategoryController extends Controller
{
	# Create = C
	public function createAdmin($admin_name, $admin_email, $admin_password, $admin_type)
	{
		$query = $this->connection->prepare("
			INSERT INTO `admins` (`admin_name`, `admin_email`, `admin_password`, `created_at`, `admin_status`, `admin_type`) VALUES
			(:ADMIN_NAME, :ADMIN_EMAIL, :ADMIN_PASSWORD, :CREATED_AT, :ADMIN_STATUS, :ADMIN_TYPE)
		");

		$valueToBind = array(
								':ADMIN_NAME' => $admin_name, 
								':ADMIN_EMAIL' => $admin_email, 
								':ADMIN_PASSWORD' => md5($admin_password), 
								':ADMIN_TYPE' => $admin_type,
								':CREATED_AT' => date("Y-m-d H:i:s"),
								':ADMIN_STATUS' => 'Active'
							);

		$query->execute($valueToBind);

		$rowNumber = $query->rowCount();
		$lastInsertId = $this->connection->lastInsertId();

		if($rowNumber > 0)
			return $rowNumber;
		else
			return false;
	}
	
	# Read = R
	public function getCategoryList()
	{
		$query = $this->connection->prepare("
			SELECT * FROM `categories`
		");

		$query->execute();

		$gotData = $query->fetchAll(PDO::FETCH_ASSOC);
		
		$totalRows = $query->rowCount();
		
		if($totalRows > 0)
			return $gotData;
		else
			return false;
	}
	
	public function getAdminData($admin_id)
	{
		$query = $this->connection->prepare("
			SELECT * FROM `admins` WHERE id=:ADMIN_ID
		");
		
		$valueToBind = array(
			":ADMIN_ID" => $admin_id
		);

		$query->execute($valueToBind);

		$gotData = $query->fetchAll(PDO::FETCH_ASSOC);
		
		$totalRows = $query->rowCount();
		
		if($totalRows > 0)
			return $gotData[0];
		else
			return false;
	}
	
	# Update = U
	public function updateAdmin($admin_id, $admin_name, $admin_email, $admin_type, $admin_status)
	{
		$query = $this->connection->prepare("
			UPDATE `admins` SET `admin_name`=:ADMIN_NAME, `admin_email`=:ADMIN_EMAIL, `admin_type`=:ADMIN_TYPE, `admin_status`=:ADMIN_STATUS WHERE `id` = :ID
		");

		$valueToBind = array(
				':ID' => $admin_id,
				':ADMIN_NAME' => $admin_name,
				':ADMIN_EMAIL' => $admin_email,
				':ADMIN_TYPE' => $admin_type,
				':ADMIN_STATUS' => $admin_status
		);

		$query->execute($valueToBind);

		$updatedRowNumber = $query->rowCount();

		$lastInsertId = $this->connection->lastInsertId();

		if($updatedRowNumber > 0)
			return $updatedRowNumber;
		else
			return false;
	}
	
	# Delete = D
	public function deleteAdmin($admin_id)
	{
		$delQuery = $this->connection->prepare("DELETE FROM admins WHERE id=:ADMIN_ID");

		$delQuery->bindValue(':ADMIN_ID', $admin_id, PDO::PARAM_INT);

		$delQuery->execute(); 
		
		$deletedRow = $delQuery->rowCount();

		if($deletedRow > 0)
			return $deletedRow;
		else
			false;
	}
}
