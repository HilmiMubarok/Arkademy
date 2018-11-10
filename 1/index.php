<?php

	$product = [
		'itemId'   => '12341822',
		'itemName' => 'basic t-shirt',
		'price'    => 70000,
		'availableColorAndSize' => [
			[
				'color' => 'red',
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