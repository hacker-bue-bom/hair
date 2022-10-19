<?php

function helloWorld()
{
	print "Hello World";
}

function todayIs()
{
	$week =	['Domingo', 'Segunda-feira', 'Terça-feira',
		'Quarta-feira', 'Quinta-feira', 'Sexta-feira',
		'Sabado'];
	$dayOfWeek = date('w');
	
	return $week[$dayOfWeek];
}