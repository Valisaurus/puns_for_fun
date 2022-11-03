INSERT MANDATORY GIF

# Project Title

A website that contains self written puns. I made this website because i love puns and love writing my own.
https://vali-al-osachi.se/puns_for_fun/

<!-- Text about the project and why it exists. This would also be a great place to link the project on One.com. -->

# Installation

Add the installation instructions.

# Code Review

Code review written by [Niklas](https://github.com/tgkelit).

1. `functions.php:22-33` - Det genereras två div:ar i varje varv av loopen, det borde räcka med den inre diven vilket skulle ge tydligare struktur och halvera mängden div:ar som genereras.
2. `functions.php:22-33` - Istället för att loopa igenom en array med foreach som alternerar mellan ettor och nollor, hade man kunnat göra en for-loop med rätt längd som har en variabel som sätts till 1 eller 0 beroende på if-satserna, på så sätt hade man kunnat göra bordern godtyckligt stor utan att behöva spara mer data i en array.
3. `functions.php:5` - I varje page requireas både data.php och functions.php, då functions.php också requirear data.php läses data.php två gånger på varje page. Det hade räckt att endast require data.php i functions.php alternativt att inte requirea den i functions.php men istället requirea data.php innan functions.php i varje page.
4. `functions.php:8-18` - Om du hade velat "faktiskt" slumpa ordvitsarna snarare än att gå igenom ordvitsarna i ordning hade du kunnat använda rand(0, count($punsArray)) för att välja index.
5. `index.php:30-33` - Istället för att använda flera br-taggar hade du kunnat använda css för att göra så att elementen hamnade över varandra och med rätt spacing.

# Testers

Tested by the following people:

1. Emma Hedlund
2. Filip Jonasson
