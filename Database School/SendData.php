<?php
/*
 * MIT License
 *
 * Copyright (c) 2024 Giuseppe Calabrese
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

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



