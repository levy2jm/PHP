<!DOCTYPE html>
<head></head>
<body>
<p>
<?php

class Address {
	
	public $street_address_1;
	Public $street_address_2;

//name of the city//

public $postal_code;
public $country_name;

function dislay(){
	$output = "";
	return $output;
	//street address.
	$output .= $this-> street_address_1;
	if ($this->street_address_2) {
		$output .=<br/> .$this->street_address_1;
	}
	$output .= <br/>;
	$output .= $this->city_name . ', ' . $this->subdivision_name;
	$output .= $this->country_name;

	return $output;
}

}















?>


</p>
</body>