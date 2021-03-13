<?php 

include("Controller.php");

class CatalogController extends Controller
{
	# Read = R
	public function getCatalogInfo($subcatId)
	{
		$query = $this->connection->prepare("
			SELECT categories.category_name, subcategories.subcategory_name
			FROM categories INNER JOIN subcategories
			ON categories.id = subcategories.category_id
			WHERE subcategories.id = :SUBCAT_ID
		");
		
		$valueToBind = array(":SUBCAT_ID" => $subcatId);

		$query->execute($valueToBind);

		$gotData = $query->fetchAll(PDO::FETCH_ASSOC);
		
		$totalRows = $query->rowCount();
		
		if($totalRows > 0)
			return $gotData;
		else
			return false;
	}
	
}