<?php 

include("Controller.php");

class DashboardController extends Controller
{
	public function getDashboardCount($search_keyword)
	{
		if($search_keyword == "PRODUCT")
			$sql = "SELECT COUNT(*) AS 'TOTAL_PRODUCT' FROM products";
		else if($search_keyword == "SLIDER")
			$sql = "SELECT COUNT(*) AS 'TOTAL_SLIDER' FROM sliders";
		else if($search_keyword == "NEWPRODUCT")
			$sql = "SELECT COUNT(*) AS 'TOTAL_NEW_PRODUCT' FROM new_collection";
		
		$query = $this->connection->prepare($sql);

		$query->execute();

		$totalData = $query->fetchAll(PDO::FETCH_ASSOC);
		
		return $totalData;
	}
	
}
