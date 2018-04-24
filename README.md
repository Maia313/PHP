# PHP

Man kan skapa array med både `array()` och `[]`:

Ett objekt i PHP är en _Associative Array_



### Skriva ut arrayer snyggt i PHP 

```php
<?php
$values = [10,20,30];

function pretty($array){
  return highlight_string("<?php\n\$data =\n" . var_export($array, true) . ";\n?>");
}

echo pretty($values);
```


### Functions

```php
<?php
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


### Strict types

```php
<?php
declare(strict_types=1);

function add_numbers(int $first_number, int $second_number): int {
  return $first_number + $second_number;
}

function pretty($array){
  return highlight_string("<?php\n\$data =\n" . var_export($array, true) . ";\n?>");
}
```


### Api call

```php
<?php
$response = file_get_contents('YOUR URL TO API');
$json_data = json_decode($response, true);
var_dump($json_data);
```

### GET

Information sent via a form using the GET method is visible to everyone (all variable names and values are displayed in the URL). GET also sets limits on the amount of information that can be sent - about 2000 characters.
However, because the variables are displayed in the URL, it is possible to bookmark the page, which can be useful in some situations.

#### For example:

```php
<form action="actionGet.php" method="get">
  Name: <input type="text" name="name" /><br /><br />
  Age: <input type="text" name="age" /><br /><br />
  <input type="submit" name="submit" value="Submit" />
</form>
```

#### actionGet.php 

```php
<?php
   echo "Hi ".$_GET['name'].". ";
   echo "You are ".$_GET['age']." years old.";
?>
```

### Session Variables

Another page can be created that can access the session variables we set in the previous page: 

```php
<?php
  // Start the session
  session_start();
?>
<!DOCTYPE html>
<html>
  <body>
    <?php
      echo "Your name is " . $_SESSION['name'];
      // Outputs "Your name is John"
    ?>
  </body>
</html>
```


### Cookies

The following example creates a cookie named "user" with the value "John". The cookie will expire after 30 days, which is written as 86,400 * 30, in which 86,400 seconds = one day. The '/' means that the cookie is available throughout the entire website.

We then retrieve the value of the cookie "user" (using the global variable $_COOKIE). We also use the isset() function to find out if the cookie is set: 

```php
<?php
    $value = "John";
    setcookie("user", $value, time() + (86400 * 30), '/'); 

    if(isset($_COOKIE['user'])) {
      echo "Value is: ". $_COOKIE['user'];
    }
    //Outputs "Value is: John"
?>

```

### Appending to a File

Let's create an example of a form that adds filled-in data to a file.

```php
<?php
if(isset($_POST['text'])) {
  $name = $_POST['text'];
  $handle = fopen('names.txt', 'a');
  fwrite($handle, $name."\n");
  fclose($handle); 
}
?>
<form method="post">
  Name: <input type="text" name="text" /> 
  <input type="submit" name="submit" />
</form>
```

Now, each time a name is entered and submitted, it's added to the "names.txt" file, along with a new line.

The isset() function determined whether the form had been submitted, as well as whether the text contained a value.
We did not specify an action attribute for the form, so it will submit to itself.
