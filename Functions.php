<?php
function getPriceFromBd(){
	include("connection.php");
	$result=mysqli_query($connection,"SELECT * FROM `$base`.`moneyforservice`;");

	while($prices_from_table=mysqli_fetch_assoc($result)){
		
		$price.=$prices_from_table["typeofservice"].":".$prices_from_table["money"]."$ \n";
	}
	mysqli_close($connection);
	return $price;
}

	