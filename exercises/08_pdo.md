# Exercises - PDO

Använd tabellerna från gårdagen (`Products`) för att lösa övningarna nedan.
Alla queries som du kan köra i SQL kan du använda i ett `PDO`-objekt och i __PHP__.

* [PHP.net: PDO construct](http://php.net/manual/en/pdo.construct.php)
* [PHP.net: PDO prepare](http://php.net/manual/en/pdo.prepare.php)
* [PHP.net: Superglobals](http://php.net/manual/en/language.variables.superglobals.php)

##### Create PDO-object

```php
//Always check your own details for connecting
$pdo = new PDO(
    "mysql:host=localhost;dbname=products;charset=utf8",
    "root", 
    "root"
);
```

##### Fetch Associative Array

```php
$statement = $pdo->prepare("SELECT * FROM laptop");
$statement->execute();
$laptops = $statement->fetchAll(PDO::FETCH_ASSOC);
```

##### Post with parameters

```php
$statement = $pdo->prepare("SELECT * FROM laptop WHERE id=:id");
$statement->execute([ 
    ":id" => $_POST['id']
]);
$laptops = $statement->fetchAll(PDO::FETCH_ASSOC);
```

##### Display errors

Om du inte ser något, lägg till detta längst upp i `php`-filen.

```php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
```

##### Pretty print

```php
highlight_string("<?php\n\$data =\n" . var_export($data, true) . ";\n?>");
```



#### Övningar

1 . Hämta alla `laptops` som har minst `15` i skärmstorlek och skriv ut modellerna (`model`) som en lista i `index.html`

2 . Skriv PHP-kod som skriver ut information från pc-tabellen på `index.php`, inuti ett `<table>`-element eller på ett snyggt sätt med `<div>`-ar. Kolumnerna som ska hämtas är `model`, `speed` och `price`. Tänk på att ge tabellen en rad med kolumnrubriker.

3 . Ändra koden så att den hämtar `maker`, `model`, `speed`, `ram`, `hd` och `price` från `product`- och `pc`-tabellerna.

4 . Ändra koden så att tabellen från förra uppgiften använder CSS. Tabellen ska ha en bakgrundsfärg. Datorer som är billigare än 1000 ska ha en annan färg, datorer som är dyrare än 1500 ska ha ytterligare en annan. Tabellen ska bara innehålla produkter från tillverkare A, B, C och D.

5 . Ändra koden så att det i stället för model-siffran är en länk till valfri sökmotor, där model-siffran ingår. Så här, om model-siffran är 12345: 
`<a href="www.google.se/?q=12345">12345</a>`
Dessutom ska bara de rader visas som har mer RAM än 64.

#### Extra

* Se över de övningarna du gjorde igår med `Products` och testa att visa den informationen från de övningarna i PHP, behöver inte vara alla övningar, välj ut någon "rolig" eller svår.
* Testa att uppdatera en viss row eller ta bort en row med `PDO`. Tips: `DELETE` och `UPDATE` fungerar på samma sätt som i SQL.
