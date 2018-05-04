# Exercises - Object Oriented Programming

## 1. Klasser, egenskaper och metoder

1 . Skriv en klass med namnet `Book`. Den ska ha två (_publika_) egenskaper: `title` och `author`.

2 . Skapa ett objekt av klassen `Book` och spara det i en variabel med namnet `$book`. Sätt värdet på egenskaperna `title` till _"Främlingen"_ och `author` till _"Albert Camus"_. Testa att du har gjort rätt genom att skriva ut värdet på egenskaperna title och author så här:
```php
echo "Titel: $book->title <br>Författare: $book->author <br>";
```

3 . Skapa ett till objekt av klassen `Book` med `title`: _"Harry Potter and the Philosopher's Stone"_ och `author`: _"J K Rowling"_.

4 . Ändra det senaste objektet så att `title` blir _"Harry Potter and the Order of the Phoenix"_.

5 . Skapa en metod i `Book` med namnet `printTitle`. Metoden ska inte ta några parametrar. När den anropas ska den skriva ut bokens titel med `echo`.

6 . Skapa en klass med namnet `Car`. Den ska ha flera egenskaper: `model`, `color` och `price`. Skapa ett objekt av klassen `Car` och ge det lämpliga värden på egenskaperna.

7 . Lägg till en metod i `Car` med namnet `printInfo`. Metoden ska inte ha några parametrar. När metoden anropas ska den skriva ut information om `Car`-objektet. Till exempel, om `model="Volvo"`, `color="red"` och `price=25000` så ska funktionen skriva:
```
"Det här är en röd Volvo som kostar 25000 kr".
```


8 . Skapa en metod i `Car` med namnet `halfPrice`. När metoden anropas ska den ändra värdet på egenskapen price till hälften.

9 . Skapa en klass med namnet `Product`. Klassen representerar något som man kan sälja i en webbshop. Den ska ha egenskaperna: `name`, `description`, `price`, `imageURL`, `quantity`.

10 . Skriv en klass med namnet `SingleBookLibrary`. Den ska ha egenskaper med namnet `book` och `isBorrowed`. Egenskapen `book` ska vara ett objekt av klassen `Book`. Lägg till en metod med namnet `borrow`, som ändrar värdet på `isBorrowed` till `true`. Metoden ska också skriva ut med echo om det gick att låna, eller om boken redan var utlånad.

11 . Skapa en metod i `Product` med namnet `printInfo`, som fungerar på samma sätt som `printInfo` i uppgift 7.

## 2. Konstruktorer

1 . Lägg till en konstruktor till klassen `Book` från förra stycket. Konstruktorn ska ta två argument och använda dem för att sätta värdet på egenskaperna `title` och `author`.

2 . Lägg till en konstruktor till klassen `Car`. Konstruktorn ska ta tre argument och sätta värdet på egenskaperna `model`, `color` och `price`.

3 . Lägg till en egenskap till klassen `Car`, `sellDate`, som motsvarar när bilen såldes. Konstruktorn ska sätta `sellDate` till dagens datum. Exempel: "2017-03-27".
Tips: använd [`PHP.net: Date`](http://php.net/manual/en/function.date.php)

4 . Skapa en konstruktor till klassen `Product` som tar argumenten `$name` och `$price`. Konstruktorn ska hitta på lämpliga värden på de andra parametrarna.

5 . Ändra konstruktorn för klassen `Product` så att den förutom `name` och `price` även tar `description`, `imageURL` och `quantity`. Men de ska ha lämpliga default-värden.

6 . Ändra konstruktorn för klassen `Car` så att den tar en parameter för varje egenskap som `Car` har. Varje parameter ska ha ett lämpligt default-värde.

## 3. Access modifiers, public/private

1 . Ändra klassen `Book` så att `title` och `author` är `private` i stället för `public`. Försök att skriva ut värdet på title på samma sätt som i uppgift 1.2. Du kommer att få ett felmeddelande. Vad säger meddelandet? Varför får du felet?

2 . Skapa två metoder till klassen `Book` som kan användas för att ändra egenskapen `title`. Den ena metoden ska heta `getTitle` och ska returnera värdet på den privata egenskapen `title`. Den andra metoden ska heta `setTitle(x)` och ska ändra värdet på title till något som man skickar som argument till funktionen.

3 . Skapa `get`- och `set`-metoder till egenskapen `author`.

4 . Gör alla egenskaper för klassen `Car` privata. Behöver du ändra något för att funktionen `printInfo` ska fungera?

5 . Skriv en metod med namnet `changeCar`. Den ska ta tre parametrar: `model`, `color` och `price`. När man anropar den ska den ändra värdet på de privata egenskaperna.

## 4. Statiska egenskaper och metoder

1 . Lägg till en publik statisk variabel i klassen `Car` med namnet `NumberOfCars` som är 0. Varje gång ett `Car` objekt skapas ska `NumberOfCars` räknas upp med 1. Skapa några Car-objekt och kontrollera att variabeln räknas upp korrekt.
[PHP.net: Static Keyword](http://php.net/manual/en/language.oop5.static.php)

2 . Lägg till en statisk egenskap till classen `Product` som innehåller namnet på vilken butik man kan köpa produkten i. Skriv sedan ut namnet på butiken med `echo`. 