<?php
/*
è diventato best practice non utilizzare il tag di chiusura di php perchè 
se c'è uno spazio da errore, vale solo nei framework, model view controller.
-terminal>new terminal - si posiziona gia sulla cartella giusta. Devi installare il php inserendo il percorso di php.exe
in questo caso è C:\xampp\php\php.exe -v (se ti dice could not be opened aggiungi quel -v finale). 
C:\xampp\php\php.exe -S localhost:8000 per aprire la porta 8000.
Per provare due siti dovrò cambiare la porta 8001, ecc.

[Tue Mar  7 16:15:39 2023] PHP 8.1.12 Development Server (http://localhost:8000) started
[Tue Mar  7 16:18:23 2023] [::1]:50801 Accepted
[Tue Mar  7 16:18:23 2023] [::1]:50802 Accepted
[Tue Mar  7 16:18:23 2023] [::1]:50801 [200]: GET / (abbiamo richiesto la uri e ci risponde 200)
[Tue Mar  7 16:18:23 2023] [::1]:50801 Closing
[Tue Mar  7 16:18:23 2023] [::1]:50802 [404]: GET /favicon.ico - No such file or directory (il browser in automatico cerca la favico n ma non c'è e risponde 404)
[Tue Mar  7 16:18:23 2023] [::1]:50802 Closing


echo 'Prova di echo';
*/

/*
guarda gli appunti. Questa struttura dati può essere letta anche da altri linguaggi

header("Content-Type: application/json");

$data = [
    'status' => true,
    'count' => 3,
    'value' => null,
    'values' => [1, 3, 7, 9],
    'title' => "DEMO"
];
/*
echo json_encode(
    $data
);
*/

/*
devo trasformare la struttura dati in una stringa prima 
di fare l'eco, cosi da errore 

echo $data;
*/

/*
questa è una serializzazione dei dati com il json ma è poco intuitiva se faccio una api che butta 
fuori questa struttura dati qui ha vita breve eperchè solo il php la riconosce

echo serialize($data);
*/

/*
qualcuno vuole creare l'utente in json, json decode
orm ti permette di non scrivere sql mappa le tabelle in oggetti
*/