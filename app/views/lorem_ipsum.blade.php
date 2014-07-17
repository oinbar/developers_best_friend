

@extends('master')

@section('header')
<h2>Lorem Ipsum Generator</h2>
@stop

@section('content')

<!-- <h3>Give the number of paragraphs to display:</h3> -->

<?php

/*
echo Form::text('input');
echo Form::submit('submit', 'url'=>lorem_ipsum/2).'<br><br>';
*/



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
$text = array_slice($text, 0, $par_num);
echo implode('<p>', $text);

?>

@stop