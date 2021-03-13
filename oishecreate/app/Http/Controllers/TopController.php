<?php

include("config/site.php");
include("config/server.php");
include("config/database.php");

class TopController
{
	public $connection;
	
	public function __construct()
	{
		$this->connection = new PDO('mysql:host='.$GLOBALS['DBHOST'].';dbname='.$GLOBALS['DBNAME'].';charset=utf8', $GLOBALS['DBUSER'], $GLOBALS['DBPASS']);
		$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	}
	
	# Cart Controller Function
	public function addToCart($customer_id, $product_id, $product_quantity)
	{
		# CHECK EXISTING CART 
		$checkExistance = $this->checkExistingCart($customer_id, $product_id);
		
		if( $checkExistance > 0 )
		{
			# UPDATE EXISTING CART ITEM
			return $cartAddResult = $this->updateCartItem($customer_id, $product_id, $product_quantity, $checkExistance);
		}
		else
		{
			# INSERT NEW CART ITEM
			return $cartAddResult = $this->insertNewCartItem($customer_id, $product_id, $product_quantity);
		}
	}
	
	# FUNCTION :: CHECK EXISTING CART
	public function checkExistingCart($customer_id, $product_id)
	{
		$query = $this->connection->prepare("
			SELECT `product_quantity`
			FROM shopcart 
			WHERE `customer_id` = :CUSTOMER_ID
			AND `product_id` = :PRODUCT_ID
		");
		
		$valueToBind = array(
			":CUSTOMER_ID" => $customer_id,
			":PRODUCT_ID" => $product_id
		);

		$query->execute($valueToBind);

		$gotData = $query->fetchAll(PDO::FETCH_ASSOC);
		
		$totalRows = $query->rowCount();
		
		if($totalRows > 0)
			return $gotData[0]['product_quantity'];
		else
			return false;
	}
	
	# FUNCTION :: UPDATE EXISTING CART ITEM
	public function updateCartItem($customer_id, $product_id, $product_quantity, $existing_quantity)
	{
		$query = $this->connection->prepare("
			UPDATE `shopcart` SET 
				`product_quantity`=:PRODUCT_QUANTITY, 
				`cart_add_time`=:CART_ADD_TIME 
			WHERE 
				`customer_id`=:CUSTOMER_ID 
				AND `product_id`=:PRODUCT_ID
		");
		
		$valueToBind = array(
				':CUSTOMER_ID' => $customer_id,
				':PRODUCT_ID' => $product_id,
				':PRODUCT_QUANTITY' => ($product_quantity + $existing_quantity),
				':CART_ADD_TIME' => date("Y-m-d H:i:s")
		);

		$query->execute($valueToBind);

		$updatedRowNumber = $query->rowCount();

		$lastInsertId = $this->connection->lastInsertId();

		if($updatedRowNumber > 0)
			return $updatedRowNumber;
		else
			return false;
	}
	
	# FUNCTION :: INSERT NEW CART ITEM
	public function insertNewCartItem($customer_id, $product_id, $product_quantity)
	{
		$query = $this->connection->prepare("
			INSERT INTO `shopcart` (`customer_id`, `product_id`, `product_quantity`, `cart_add_time`) VALUES
			(:CUSTOMER_ID, :PRODUCT_ID, :PRODUCT_QUANTITY, :CART_ADD_TIME)
		");

		$valueToBind = array(
								':CUSTOMER_ID' => $customer_id, 
								':PRODUCT_ID' => $product_id, 
								':PRODUCT_QUANTITY' => $product_quantity, 
								':CART_ADD_TIME' => date("Y-m-d H:i:s")
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
	public function showCartSummary($customer_id)
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
?>