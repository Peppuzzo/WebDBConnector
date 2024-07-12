<?php

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$eta = $_POST['eta'];
$citta = $_POST['citta'];

$conn = mysqli_connect("localhost", "root", "", "DatabaseScuola");

if (mysqli_connect_errno()){

	echo "Errore: La connessione non è stata effetuata." . mysqli_error($conn);
	die();
}

else {

	echo "<h2 style=\"color:green\"> La connessione è avvenuta con successo!" . "</h2>";
}

echo "I dati sono stati inseriti correttamente." . "<br>";
echo "Hai aggiunto il seguente studente " . "<b>$nome</b> " . " <b>$cognome</b>";

$Student = "INSERT INTO anagrafica(nome, cognome, eta, citta) VALUES ('$nome', '$cognome', '$eta', '$citta')" or die ("Errore: Query non eseguita." . "<br>");

mysqli_query($conn, $Student) or die ("I dati non sono stati inseriti");

echo "<br><br><br>";

echo "<a href=\"NewStudents.php\"> Se vuoi inserire ulteriormente uno studente clicca qui!" . "</a>";

mysqli_close($conn);

?>
