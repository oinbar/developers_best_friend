

@extends('master')

@section('header')

@stop

@section('content')

<h2>Lorem Ipsum Generator</h2>
<h3>Give the number of paragraphs to display:</h3>


<?php
//HANDLE GET PARAMS 
$num_par = Input::get('num_par');
?>

{{ Form::open(array('url'=>'lorem_ipsum', 'method'=>'GET')) }}

{{ Form::label('num_par', 'Number of paragraphs (1-6): ')}}
{{ Form::text('num_par', $num_par) }}
{{ Form::submit('submit') }} <br><br>

{{ Form::close()}}

<?php

if ($num_par != NULL) {
	
	//BUILD LOREM IMPSUM STRING ARRAY
	$text = file("http://websitetips.com/articles/copy/lorem/ipsum.txt");
	$text = array_slice($text, 0, 13);
	
	
	//RESHAPE ARRAY
	$new_text = array();
	foreach ($text as $par){
		if (strlen($par) > 1){
			array_push($new_text, $par);
		}
	}
	$text = $new_text;
	
	/* echo Pre::render($text); */
	
	//RESIZE ARRAY ACCORDING TO INPUT
	if ($num_par > 6) { $num_par = 6;}
	$text = array_slice($text, 0, $num_par);
	echo implode('<p>', $text);

}
?>

@stop