<?php 

include("Controller.php");

class CheckoutController extends Controller
{

	public function acceptOrder($customer_id, $cart_total, $delivery_charge)
	{
		####### SAVE ORDER DETAILS ON THE orders TABLE
		$query = $this->connection->prepare("
			INSERT INTO `orders` (`customer_id`, `order_date`, `transaction_type`, `cart_total`, `delivery_charge`) VALUES
			(:CUSTOMER_ID, :ORDER_DATE, :TRANSACTION_TYPE, :CART_TOTAL, :DELIVERY_CHARGE)
		");

		$valueToBind = array(
			':CUSTOMER_ID' => $customer_id, 
			':ORDER_DATE' => date("Y-m-d H:i:s"),
			':TRANSACTION_TYPE' => 'COD',
			':CART_TOTAL' => $cart_total,
			':DELIVERY_CHARGE' => $delivery_charge
		);

		$query->execute($valueToBind);

		$rowNumber = $query->rowCount(); # Whether Order is Saved on `orders` Table or not
		$createdOrderId = $this->connection->lastInsertId(); # Last Inserted `id` on `orders` Table
		$_SESSION['SMCH_customer_last_order_id'] = $createdOrderId;
		
		####### CHECK IF ORDER IS SAVED ON orders TABLE
		if($rowNumber > 0)
		{
			####### SELECT CART ADDED DATA FROM shopcart TABLE
			$query = $this->connection->prepare("
				SELECT 
					shopcart.*, 
					products.regular_price,
					products.discounted_price,
					products.discount_end_date
				FROM shopcart
					INNER JOIN products
						ON shopcart.product_id = products.id
				WHERE shopcart.customer_id = :CUSTOMER_ID
			");
			
			$valueToBind = array(":CUSTOMER_ID" => $customer_id);

			$query->execute($valueToBind);

			$shopcartData = $query->fetchAll(PDO::FETCH_ASSOC);
			
			####### SAVING ITEMS FROM shopcart TO order_items
			$cartTotalItem = count($shopcartData);
			$loopCounter = 0;
			
			foreach($shopcartData AS $eachCartItem)
			{
				$loopCounter++;
				
				$query = $this->connection->prepare("
					INSERT INTO `order_items` (`order_id`, `customer_id`, `product_id`, `product_price`, `product_quantity`) VALUES
					(:ORDER_ID, :CUSTOMER_ID, :PRODUCT_ID, :PRODUCT_PRICE, :PRODUCT_QUANTITY)
				");
				
				$valueToBind = array(
					':ORDER_ID' => $createdOrderId, 
					':CUSTOMER_ID' => $customer_id, 
					':PRODUCT_ID' => $eachCartItem['product_id'],
					':PRODUCT_PRICE' => $eachCartItem['regular_price'],
					':PRODUCT_QUANTITY' => $eachCartItem['product_quantity']
				);
				
				$query->execute($valueToBind);

				$rowNumber = $query->rowCount(); 
				$createdLastItemId = $this->connection->lastInsertId(); 
				
				if($cartTotalItem == $loopCounter)
				{
					# DELETE ALL ITEMS FOR THIS CUSTOMER FROM shopcart TABLE
					$delQuery = $this->connection->prepare("DELETE FROM shopcart WHERE customer_id=:CUSTOMER_ID");

					$delQuery->bindValue(':CUSTOMER_ID', $customer_id, PDO::PARAM_INT);

					$delQuery->execute(); 
					
					$deletedRow = $delQuery->rowCount();

					if($deletedRow > 0)
						return "ORDER_SAVED";
					else
						return "CART_DELETE_FAILED";
				}
			}
			
		}
		else
		{
			return "ORDER_SAVE_FAILED";
		}	
	}
	
	public function updatePaymentStatus($order_id)
	{
		# Update = U
		
		$query = $this->connection->prepare("
			UPDATE `orders` SET `payment_status`=:PAYMENT_STATUS WHERE `id` = :ID
		");
		
		$valueToBind = array(
				':ID' => $order_id,
				':PAYMENT_STATUS' => "Paid"
		);
		
		$query->execute($valueToBind);
		
		$updatedRowNumber = $query->rowCount();
		
		$lastInsertId = $this->connection->lastInsertId();
		
		if($updatedRowNumber > 0)
			return $updatedRowNumber;
		else
			return false;
	}
	
}