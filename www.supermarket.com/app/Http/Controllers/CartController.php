<?php 

include("Controller.php");

class CartController extends Controller
{
	# Read = R
	public function getCartDetails($customer_id)
	{
		$query = $this->connection->prepare("
			SELECT 
				shopcart.*, 
				products.id,
				products.product_name,
				products.regular_price,
				products.discounted_price,
				products.discount_end_date,
				products.product_default_image
			FROM shopcart
				INNER JOIN products
					ON shopcart.product_id = products.id
			WHERE shopcart.customer_id = :CUSTOMER_ID
		");
		
		$valueToBind = array(":CUSTOMER_ID" => $customer_id);

		$query->execute($valueToBind);

		$gotData = $query->fetchAll(PDO::FETCH_ASSOC);
		
		$totalRows = $query->rowCount();
		
		if($totalRows > 0)
			return $gotData;
		else
			return 0;
	}
	
}