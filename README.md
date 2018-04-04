# PHP

Man kan skapa array med både `array()` och `[]`:

Ett objekt i PHP är en _Associative Array_



+ Skriva ut arrayer snyggt i PHP 

```
<?php
$values = [10,20,30];

function pretty($array){
  return highlight_string("<?php\n\$data =\n" . var_export($array, true) . ";\n?>");
}

echo pretty($values);
```


+ Functions

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

### GET

Information sent via a form using the GET method is visible to everyone (all variable names and values are displayed in the URL). GET also sets limits on the amount of information that can be sent - about 2000 characters.
However, because the variables are displayed in the URL, it is possible to bookmark the page, which can be useful in some situations.

#### For example:

```
<form action="actionGet.php" method="get">
  Name: <input type="text" name="name" /><br /><br />
  Age: <input type="text" name="age" /><br /><br />
  <input type="submit" name="submit" value="Submit" />
</form>
```

#### actionGet.php 

```
<?php
   echo "Hi ".$_GET['name'].". ";
   echo "You are ".$_GET['age']." years old.";
?>
```

