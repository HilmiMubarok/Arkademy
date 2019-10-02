<?php
	
	$product = [
		'itemId'   => '69696969',
		'itemName' => 'basic t-shirt',
		'price'    => 60000,
		'availableColorAndSize' => [
			[
				'color' => 'pink',
				'size'  => ['S', 'M', 'L']
			],
			[
				'color' => 'solid black',
				'size'  => ['M', 'L']
			]
		],
		'freeShiping' => false
	];

	function json($data)
	{
		return json_encode($data);
	}

	
	echo json($product);