# PHP

Man kan skapa array med både `array()` och `[]`:

Ett objekt i PHP är en _Associative Array_

css:
    echo "<h1 style='color:red'>Red red wine</h1>";
    echo "<h1 class='title'>Green grass and high tides </h1>";

++ Skriva ut arrayer snyggt i PHP 

```<?php
$values = [10,20,30];

function pretty($array){
  return highlight_string("<?php\n\$data =\n" . var_export($array, true) . ";\n?>");
}

echo pretty($values);
```


++ Functions

```<?php
$my_value = 10;

function add_numbers($a, $b){
  global $my_value;
  $my_value = 10;
  return $a + $b;
};

$add_numbers_anon = function($a, $b){
  return $a + $b;
};

add_numbers(10, 10);
echo $add_numbers_anon(10,10);
```


+ Strict types

```<?php
declare(strict_types=1);

function add_numbers(int $first_number, int $second_number): int {
  return $first_number + $second_number;
}

function pretty($array){
  return highlight_string("<?php\n\$data =\n" . var_export($array, true) . ";\n?>");
}
```


+ Api call

```<?php
$response = file_get_contents('YOUR URL TO API');
$json_data = json_decode($response, true);
var_dump($json_data);
```
