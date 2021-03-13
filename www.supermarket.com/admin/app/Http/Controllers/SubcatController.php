<?php 

include("Controller.php");

class SubcatController extends Controller
{
	public function getSubcatList()
	{
		$query = $this->connection->prepare('
			SELECT categories.id AS "cat_id", categories.category_name, subcategories.id AS "subcat_id", subcategories.subcategory_name, subcategories.subcategory_status
			FROM categories INNER JOIN subcategories
			ON categories.id = subcategories.category_id
			WHERE subcategories.subcategory_status = :STATUS
			ORDER BY categories.category_name
		');
		
		$valueToBind = array(
			":STATUS" => "Active"
		);

		$query->execute($valueToBind);

		$gotData = $query->fetchAll(PDO::FETCH_ASSOC);
		
		$totalRows = $query->rowCount();
		
		if($totalRows > 0)
			return $gotData;
		else
			return false;
	}
}
