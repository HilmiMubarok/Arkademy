<?php

function count_handshake($people)
{
	$count = [];
	for ($i = 1; $i < $people; $i++) { 
		array_push($count, $people - $i);
	}
	return array_sum($count);
}


echo count_handshake(6);	

