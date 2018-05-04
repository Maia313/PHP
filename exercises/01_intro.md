<img align="right" height="auto" width="150" src="http://www.cornel1801.com/disney/Jungle-Book-1967/pictures/531.jpg" alt="Elephants!">
# Övningar PHP och SQL

Den mesta informationen finns i dokumentationen: [PHP.net](http://php.net/). Här kan man hitta alla möjliga funktioner som man behöver. Oftast är kommentarerna även ganska bra, dock oftast väldigt gamla. Men för det mesta har det inte hänt massor i själva språket.

---

1 .  Skriv en funktion med namnet `make_paragraph` som skriver ut en sträng som HTML-elementet `<p>`. Exempel: "Elephants!" ska skrivas ut som `<p>Elephants!</p>`. Funktionen ska ha en __parameter__, som är strängen som ska skrivas ut, och funktionen ska inte returnera något.

---

2 . Funktionen `make_paragraph` är lite begränsad. Tänk om vi vill göra `<h1>`-taggar? Eller h2, h3 osv. Skriv en ny funktion med namnet `make_heading`. Funktionen behöver två parametrar: strängen som ska skrivas ut och vilken heading det ska vara.

---

3 . Nu har vi två funktioner som vi kan använda för att skapa HTML-paragrafer och headings. Men det blir väldigt många funktioner om vi ska ha en funktion för varje möjligt HTML-element. Vi behöver en funktion som kan göra flera sorters element. Skriv en funktion `make_tag` som kan göra alla sorters HTML-element.

---

4 . Förbättra `make_tag` så att man kan ange inline styles (`style=""`) samt länkar (`href=""`).

Exempel: <a href="http://vignette1.wikia.nocookie.net/disney/images/3/30/Junglebook-disneyscreencaps.com-1218.jpg/revision/latest?cb=20150917045618" style="color: #9e7cac;">Elephants!</a>

---

5 . Skriv en funktion som gör om alla nyrader i en sträng till `<br>`-element. Funktionen ska ta strängen som parameter och returnera en ny sträng. En nyrad i PHP skrivs `'\n'`.

---

6 . Skriv en funktion som returnerar en array med slumptal. Använd [`mt_rand`](http://php.net/manual/en/function.mt-rand.php) för att göra slumptal.

---

7 . Skriv en funktion som gör om en array till en lista i HTML.

```php
make_list( [1, 2] ) → "<ul> <li>1</li> <li>2</li> </ul>"
```

---

8 . Skriv en funktion med namnet `capitalize` som gör om ett användarnamn till stora bokstäver.

---

9 . Förbättra funktionen `capitalize` så att den bara gör första bokstaven stor.

---

10 . Skriv en funktion som avrundar en float till närmaste heltal med hjälp av typecast.
```php
Exempel: round(3.9) → 3, round(5.5) → 6.
```


---

11 . Skriv en funktion som gör om ett decimaltal till en sträng. Strängen ska använda decimalkomma i stället för decimalpunkt. 
```
Exempel: float_to_string(75.5) → "75,5".
```

---

12 . Skriv en funktion som räknar ut summan av alla tal i en array. Skriv en annan som räknar ut medelvärdet.

---

13 . Skriv en funktion som tar en sträng som motsvarar en veckodag som parameter och returnerar en siffra. Om strängen är "måndag" ska funktionen returnera 1, "tisdag" ska bli 2 och "söndag" ska bli 7.
Funktionen ska fungera oavsett om veckodagen står med små eller stora bokstäver.

---

14 .  Skriv en funktion som dubblerar värdet på en variabel som innehåller ett tal och gör det positivt. Funktionen ska inte returnera ett värde. 

```
Exempel: 5 → 10, -3 → 6.
```

---

15 . Skriv en funktion som skriver ut en tre `<div>` med varsin random färg.

### Extra 

Om man är färdig med dessa kan man se tillbaka på JavaScript-övningar från JS1 & JS2 och försöka implementera några av dessa fast i PHP. Ni kommer att upptäcka att själva språket är ganska likt.
