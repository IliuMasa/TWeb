SITE RESTAURANTE ÎN CHIȘINĂU - VERSIUNE CU AJAX

Fișiere incluse:
1. index.html - structura site-ului
2. style.css - designul site-ului
3. script.js - JavaScript + AJAX
4. restaurante.json - datele restaurantelor
5. README.txt - instrucțiuni

Ce este AJAX în acest proiect?
- Restaurantele NU sunt scrise direct în HTML.
- Ele sunt salvate în restaurante.json.
- JavaScript folosește fetch("restaurante.json") pentru a încărca datele.
- Cardurile sunt create automat în pagină cu JavaScript.

Important:
Pentru că AJAX citește un fișier JSON, proiectul trebuie rulat printr-un server local.

Varianta simplă recomandată:
1. Deschide folderul în Visual Studio Code.
2. Instalează extensia Live Server.
3. Click dreapta pe index.html.
4. Alege "Open with Live Server".

Variantă cu Python:
1. Deschide Command Prompt în folderul proiectului.
2. Rulează:
   python -m http.server 8000
3. Deschide în browser:
   http://localhost:8000

De ce nu merge mereu cu dublu click?
- Dacă deschizi index.html direct, browserul poate bloca încărcarea fișierului restaurante.json.
- De aceea, pentru AJAX este recomandat Live Server sau alt server local.
