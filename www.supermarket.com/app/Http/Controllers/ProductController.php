<?php 

include("Controller.php");

class ProductController extends Controller
{
	# Read = R
	public function getProductPageDetails($productId)
	{
		$query = $this->connection->prepare("
			SELECT 
				categories.id, 
				categories.category_name, 
				subcategories.id, 
				subcategories.subcategory_name, 
				products.*
			FROM products
				INNER JOIN categories
					ON products.category_id = categories.id
				INNER JOIN subcategories
					ON products.subcategory_id = subcategories.id
			WHERE products.id = :PRODUCT_ID
		");
		
		$valueToBind = array(":PRODUCT_ID" => $productId);

		$query->execute($valueToBind);

		$gotData = $query->fetchAll(PDO::FETCH_ASSOC);
		
		$totalRows = $query->rowCount();
		
		if($totalRows > 0)
			return $gotData[0];
		else
			return false;
	}
	
	# Read = R
	public function getRelatedProducts($productId, $subcategoryId)
	{
		$query = $this->connection->prepare("
			SELECT * FROM products 
			WHERE subcategory_id = :SUBCAT_ID
			AND id != :PROD_ID
			ORDER BY id DESC
			LIMIT 6
		");
		
		$valueToBind = array(
			":SUBCAT_ID" => $subcategoryId,
			":PROD_ID" => $productId
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