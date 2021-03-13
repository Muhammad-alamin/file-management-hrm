<?php 

include("Controller.php");

class DashboardController extends Controller
{
	public function getDashboardCount($search_keyword)
	{
		if($search_keyword == "CUSTOMER")
			$sql = "SELECT COUNT(*) AS 'TOTAL_CUSTOMER' FROM customers";
		else if($search_keyword == "ORDER")
			$sql = "SELECT COUNT(*) AS 'TOTAL_ORDER' FROM orders";
		else if($search_keyword == "CATEGORY")
			$sql = "SELECT COUNT(*) AS 'TOTAL_CATEGORY' FROM categories";
		else if($search_keyword == "PRODUCT")
			$sql = "SELECT COUNT(*) AS 'TOTAL_PRODUCT' FROM products";
		
		$query = $this->connection->prepare($sql);

		$query->execute();

		$totalData = $query->fetchAll(PDO::FETCH_ASSOC);
		
		return $totalData;
	}
	
}
