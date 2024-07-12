<?php

$materia = $_POST['materia'];

$open = mysqli_connect("localhost", "root", "", "DatabaseScuola");

if ($open === false){

	exit("Errore con la connessione al database.") . mysqli_error($open);
}

else {

	echo "<h2> Materia inserita correttamente!" . "</h2>";
}

echo "E' stata inserita la seguente materia: " . "<b>$materia</b>";

$insert = "INSERT INTO materia(nomeMateria) VALUES('$materia')";

echo "<br>";

mysqli_query($open, $insert) or die ("Query non eseguita!");

echo "<br><br><br>";

echo "<a href=\"InsertMateria.php\"> Se vuoi inserire ulteriormente una materia clicca qui!" . "</a>";

mysqli_close($open);

?>
