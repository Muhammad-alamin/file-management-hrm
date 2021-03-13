<?php 

include("Controller.php");

class ProductDetailsController extends Controller
{
	public function getProductInfo($productId)
	{
		$query = $this->connection->prepare("
			SELECT * FROM `products` WHERE id=:PRODUCT_ID
		");
		
		$valueToBind = array(
			":PRODUCT_ID" => $productId
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