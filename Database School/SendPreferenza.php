<?php

$materia = $_POST['id_materia'];
$studente = $_POST['id_studente'];

$conn = mysqli_connect("localhost", "root", "", "DatabaseScuola");

if (false === $conn){

	echo "Errore: Connessione non effettuata!" . mysqli_error();
}

else {

	echo "<h2 style=\"color:green;\" >Connessione al database effettuata! </h2>";
}

echo "<br>";

echo "Preferenza inserita correttamente.";


$insert = "INSERT INTO preferenza(id_studente, id_materia) VALUES('$studente', '$materia')";

mysqli_query($conn, $insert) or die ("Query non eseguita!");

mysqli_close($conn);


?>
