<?php

function helloWorld()
{
	print "Hello World";
}

function todayIs()
{
	$week =	['Domingo', 'Segunda-feira', 'Ter�a-feira',
		'Quarta-feira', 'Quinta-feira', 'Sexta-feira',
		'Sabado'];
	$dayOfWeek = date('w');
	
	return $week[$dayOfWeek];
}