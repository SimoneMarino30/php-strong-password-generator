<!-- TRACCIA:
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L'esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1 ✔
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all'utente.
Scriviamo tutto (logica e layout) in un unico file *index.php*

Milestone 2 ✔
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file *functions.php* che includeremo poi nella pagina principale

Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all'utente.

Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all'utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. -->

<?php 
// includo partials/functions
include(__DIR__ . "/partials/functions.php"); 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP password generator</title>
    <!-- BOOTSTRAP -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
</head>
<body>
    <form method="GET">
        <div class="container">
            <div class="my-5">
                <label for="custom_length">Choose your password's length(between 8 and 20):</label>
                <input type="number" name="my_length" id="custom_length" min="8" max="20" />
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Generate Password</button>
            </div>
           
            <div for="floatingTextarea">Your password is <?= $length ?> characters long</div>
    <div class="form-floating">
        <textarea class="form-control w-25" placeholder="Your next secure password" id="floatingTextarea">
            <?= random_password($length) ?>
        </textarea>
        <label for="floatingTextarea">Your generated password is:</label>
    </div>
</div>  
        </div>
    </form>
</body>
</html>
 