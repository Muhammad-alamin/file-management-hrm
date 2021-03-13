<?php 

include("Controller.php");

class SearchController extends Controller
{
	# Read = R
	public function getSearchResult($keyword)
	{
		$tag = str_replace(" ", "|", $keyword);
		
		$query = $this->connection->prepare("
			SELECT * FROM products WHERE product_name REGEXP :TAG
		");
		
		$valueToBind = array(":TAG" => $tag);

		$query->execute($valueToBind);

		$gotData = $query->fetchAll(PDO::FETCH_ASSOC);
		
		$totalRows = $query->rowCount();
		
		if($totalRows > 0)
			return $gotData;
		else
			return false;
	}
	
}