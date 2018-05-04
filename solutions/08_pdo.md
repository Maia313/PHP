# Solutions - PDO

1 . 

```php
$statement = $pdo->prepare("SELECT * FROM laptop WHERE screen > 15");
$statement->execute();
echo "<ul>";
foreach($statement as $row) {
    echo "<li>" . $row['model'] . "</li>";
}

echo "</ul>";
    
```

2 . 
```php
$statement = $pdo->prepare("SELECT model, speed, price FROM pc");
$statement->execute();
echo "<table>";
    echo "<tr><th>Model</th> <th>Speed</th> <th>Price</th> </tr>";
foreach($statement as $row) {
    $model = $row['model'];
    $speed = $row['speed'];
    $price = $row['price'];
    echo "<tr> <td>$model</td> <td>$speed</td> <td>$price</td> </tr>";
}
echo "</table>";
```


3 .
```php
$statement = $pdo->prepare("
SELECT maker, pc.model, speed, ram, hd, price 
FROM pc
INNER JOIN product ON pc.model = product.model");
$statement->execute();
echo "<table>";
echo "<tr> <th>Maker</th> <th>Model</th> <th>Speed</th> <th>RAM</th> <th>HD</th> <th>Price</th> </tr>";
foreach($statement as $row) {
    $maker = $row['maker'];
    $model = $row['model'];
    $speed = $row['speed'];
    $ram = $row['ram'];
    $hd = $row['hd'];
    $price = $row['price'];
    echo "<tr> <td>$maker</td> <td>$model</td> <td>$speed</td> <td>$ram</td> <td>$hd</td> <td>$price</td> </tr>";
}
echo "</table>";
```


4 .

```php
$statement = $pdo->prepare("
SELECT maker, pc.model, speed, ram, hd, price 
FROM pc
INNER JOIN product ON pc.model = product.model
WHERE maker = :maker");
$statement->execute([':maker' => 'E']);
echo "<table>";
echo "<tr><th>Maker</th> <th>Model</th> <th>Speed</th> <th>RAM</th> <th>HD</th> <th>Price</th> </tr>";
foreach($statement as $row) {
    $maker = $row['maker'];
    $model = $row['model'];
    $speed = $row['speed'];
    $ram = $row['ram'];
    $hd = $row['hd'];
    $price = $row['price'];
    echo "<tr><td>$maker</td> <td>$model</td> <td>$speed</td> <td>$ram</td> <td>$hd</td> ";
    
if( $price < 1000 )
        echo "<td class='cheap'>$price</td>"; //create theses classes
    else if( $price > 1500 )
        echo "<td class='expensive'>$price</td>"; //create theses classes
    else
        echo "<td>$price</td>"; echo "</tr>";
}
echo "</table>";
```

5 . 

```php
$statement = $pdo->prepare("
SELECT maker, pc.model, speed, ram, hd, price 
FROM pc
INNER JOIN product ON pc.model = product.model
WHERE maker = 'E' AND pc.ram = 64");
$statement->execute();
echo "<table>";
echo "<tr><th>Maker</th> <th>Model</th> <th>Speed</th> <th>RAM</th> <th>HD</th> <th>Price</th> </tr>";
foreach($statement as $row) {
    $maker = $row['maker'];
    $model = $row['model'];
    $speed = $row['speed'];
    $ram = $row['ram'];
    $hd = $row['hd'];
    $price = $row['price'];
    echo "<tr><td>$maker</td> <td><a href=\"www.google.se/?q=$model\">$model</td> <td>$speed</td> <td>$ram</td> <td>$hd</td> ";
    
if( $price < 1000 )
        echo "<td class='cheap'>$price</td>"; //create theses classes
    else if( $price > 1500 )
        echo "<td class='expensive'>$price</td>"; //create theses classes
    else
        echo "<td>$price</td>"; echo "</tr>";
}
echo "</table>";
```
