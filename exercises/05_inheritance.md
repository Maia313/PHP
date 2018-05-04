# Exercises - Inheritance

## 1. Arv

1 . Skriv en klass som ärver från en annan klass. Basklassen ska vara något generellt och subklassen något mer specifikt. Skapa objekt av båda klasserna för att kontrollera att du har gjort rätt. Det vet du om subklassen kan allt som basklassen kan.

2 . Skapa två publika metoder i basklassen från förra uppgiften. Metoderna ska skriva ut något så att man ser att de körs. Lägg till en av metoderna i subklassen. Skapa ett objekt av subklassen och testa vad som händer när du anropar båda funktionerna från basklassen.

3 . Ändra metoden i subklassen så att den även anropar metoden i basklassen med hjälp av parent.

4 . Skriv minst fyra klasser som motsvarar olika djur. Alla djur ska ha `Animal` som första basklass. Andra basklasser som kan vara bra att ha med är `Bird`, `Mammal`, `Fish` osv. Se till att de ärver från `Animal` och att klasserna för respektive djur ärver från rätt klass.

5 . Implementera `Vehicle`-hierarkin som finns på slides. `Vehicle` ska ha samma egenskaper som i tidigare övningar, men nu ska de vara `protected`. Du ska ha klasserna `Vehicle`, `Bicycle`, `Boat`, `Car`, `Motorboat` och `Sail`. `Vehicle` ska ha en metod som heter `goTo`, som tar en parameter. Funktionen ska skriva ut _"Färdas till [parametern] <br>"_ med `echo`. Skapa ett objekt av varje klass och anropa `goTo` med ditt favoritresmål.

6 . Gör så att klasserna som ärver från `Vehicle` skriver över `goTo` från `Vehicle` med egna metoder. De ska skriva ut liknande saker som `Vehicle::goTo`, men det ska framgå vilket fordon man åker med. Till exempel _"Färdas med bil till [resmål] <br>"_. Dessutom ska funktionerna anropa basklassens `goTo`.

7 . Använd konstruktorfunktioner i `Vehicle ` och alla subklasser. Observera att en subklass ska anropa basklassens konstruktor innan den gör något annat.

## 2. Abstrakta klasser och interface

1 . Skapa en abstrakt klass med minst en abstrakt metod. Skapa en klass som ärver från den och implementerar den abstrakta metoden.

2 . Gör `Vehicle` och `Animal` abstrakta. Kontrollera att det inte går att skapa objekt av klasserna `Vehicle` och `Animal`.

3 . Skapa ett `interface` och en klass som implementerar det.

4 . Skapa ett interface med namnet `iNoiseMaker`. Det ska innehålla en metod med namnet `makeNoise`. Ändra minst två djurklasser så att de implementerar interfacet. Lägg till en klass `Robot` som implementerar `iNoiseMaker` men inte ärver från `Animal`.

## Extra

###### Skapa en Todo-list

Testa att implementera en Todo-list med PHP-classes. Du behöver nog inte använda något arv men måste få två klasser att synka med varandra, liknande `SingleBookLibrary`.

Du behöver alltså skapa minst två klasser `Tasks`/`Todos` och `Task/Todo`. `Tasks` ska hantera de olika `Task` och spara dessa i en array. Men alla `Task` ska vara en instans av klassen `Task`. 

Man tänka sig följande upplägg på `Task`:

```php
class Task
{
    private $title;
    private $createdAt;
    private $complete = false;
}
```
