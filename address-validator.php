<?php

if(isset($_POST)){ 
	$address_line1 = $_POST['address_line1'];
	$address_line2 = $_POST['address_line2'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zipcode = $_POST['zipcode'];

	$original = '<p>Address Line 1: '.$address_line1.'</p>
	<p>Address Line 2: '.$address_line2.'</p>
	<p>City: '.$city .'</p>
	<p>State: '.$state.'</p>
	<p>Zip Code: '.$zipcode.'</p>';

	$original_array =  array('Address1' => $address_line1, "Address2"=>$address_line2, "City"=>	$city,'State'=>$state,'Zip5'=>$zipcode); 
	$response_array['status'] = 'ok';
	$response_array['original'] = $original;
	$response_array['original_array'] = $original_array;

        // // set up the API endpoint and user ID
	$endpoint = "https://secure.shippingapis.com/ShippingAPI.dll";
	$user_id = "566TESTI5273";

		// set up the address data
	$address = array(
		'Address1' => $address_line1,
		'Address2' => $address_line2,
		'City' => $city ,
		'State' => $state,
		'Zip5' => $zipcode,
		'Zip4' => ''
	);

		// create the XML request
	$xml = new SimpleXMLElement("<AddressValidateRequest/>");
	$xml->addAttribute("USERID", $user_id);
	$address_xml = $xml->addChild("Address");
	$address_xml->addAttribute("ID", "0");
	$address_xml->addChild("Address1", $address['Address1']);
	$address_xml->addChild("Address2", $address['Address2']);
	$address_xml->addChild("City", $address['City']);
	$address_xml->addChild("State", $address['State']);
	$address_xml->addChild("Zip5", $address['Zip5']);
	$address_xml->addChild("Zip4", $address['Zip4']);
	$xml_string = $xml->asXML();

		// make the API request
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $endpoint);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "API=Verify&XML=" . urlencode($xml_string));
	$response = curl_exec($ch);
	curl_close($ch);

		// print the response
	$standardize_array = json_decode(json_encode(simplexml_load_string($response)), true);
	
	if(isset($standardize_array['Address']['Error']))
	{
		$standardize_array_final['error'] = $standardize_array['Address']['Error']['Description'];
	}
	else{
		$standardize_array_final = array(
			'Address1' => $standardize_array['Address']['Address1'],
			'Address2' => $standardize_array['Address']['Address2'],
			'City' => $standardize_array['Address']['City'] ,
			'State' => $standardize_array['Address']['State'],
			'Zip5' =>$standardize_array['Address']['Zip5'],
		);
	}
	

	$standardize = '<p>Address Line 1: '.$standardize_array['Address']['Address1'].'</p>
	<p>Address Line 2: '.$standardize_array['Address']['Address2'].'</p>
	<p>City: '.$standardize_array['Address']['City'].'</p>
	<p>State: '.$standardize_array['Address']['State'].'</p>
	<p>Zip Code: '.$standardize_array['Address']['Zip5'].'</p>'; 
	$response_array['standardize'] = $standardize;
	$response_array['standardize_array'] = $standardize_array_final; 
	echo json_encode($response_array);
}

