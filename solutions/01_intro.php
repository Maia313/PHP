<?php


// 1,2,3

function make_paragraph($hej) {
  echo "<p>" . $hej . "</p>\n";
}

function make_heading($text, $number) {
  echo "<h$number>$text</h$number>\n";
  /*echo "<h" . $number . ">" 
  . $text . "</h" . $number . ">";*/
}
function make_tag($text, $tag) {
  echo "<$tag>$text</$tag>\n";
}


// 4
function make_tag($text, $tag, $style, $href) {
  if( $style === '' && $href === '' )
    echo "<$tag>$text</$tag>\n";
  elseif( $style === '' && $href !== '' )
    echo "<$tag href=\"$href\">$text</$tag>\n";
  elseif( $style !== '' && $href === '' )
    echo "<$tag style=\"$style\">$text</$tag>\n";
  else
    echo "<$tag style=\"$style\" href=\"$href\">$text</$tag>\n";
}


//5
function replace_linebreaks($str) {
  // \n ska bli <br>
  // använda str_replace
  $resultat = str_replace("\n", '<br>', $str);
  return $resultat;
}
$proper_linebreaks = replace_linebreaks(
  "en\nsträng\nmed\nmassa\nradbrytningar");
echo $proper_linebreaks;


//6
function random_number_array_generator() {
  $array = [];
  for( $i=0; $i<5; $i++ ) {
    $slumptal = mt_rand(1, 100);
    array_push($array, $slumptal);
  }
  return $array;
}

//7
function make_list($array) {
  // "<ul> <li>1</li> <li>2</li> </ul>"
  $resultat = "<ul> ";
  foreach( $array as $value ) {
    //$text, $tag, $style, $href
    $li = make_tag($value, "li", "", "");
    $resultat = $resultat . $li;
  }
  return $resultat . " </ul>";
}

$my_array = random_number_array_generator();
$html_list = make_list($my_array);
//var_dump($html_lista);
echo "**$html_lista**";



//8,9
function capitalize($text) {
  $first = substr($text, 0, 1);
  $first = strtoupper($first); 
  $rest = substr($text, 1);
  return $first . $rest;
}


//10
function my_round($x) {
  return (int)($x + 0.5);
}


//11
function float_to_string($float) {
  return str_replace(".", ",", (string)$float);
}

//12
function summa($array) {
  $sum = 0;
  for( $i=0; $i < count($array); $i++ ) {
    $sum = $sum + $sum[$i];
  }
  return $sum;
}


//13
function weekday_to_number($weekday) {
  $weekday = strtolower($weekday);
  switch($weekday) {
    case "måndag": 
      return 1;
    case "tisdag": 
      return 2;
    case "onsdag": 
      return 3;
    case "torsdag": 
      return 4;
    case "fredag": 
      return 5;
    case "lördag": 
      return 6;
    case "söndag": 
      return 7;
    default: 
      return "ERROR!";
  }
}

//14
function double_value(&$x) {
  if( $x < 0 )
    $x = -$x;
  $x = $x * 2;
}
