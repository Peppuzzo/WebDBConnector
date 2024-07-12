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

echo "<!Doctipe html>";

echo "<html>";

echo "<head> <title> RecuperaPreferenza </title> </head>";

echo "<body style=\"background-color: #b0c4de\">"; //#b0c4de

$conn = mysqli_connect("localhost", "root", "", "DatabaseScuola");

if (mysqli_connect_errno()){

	echo "Connessione al database fallia!" . mysqli_error($conn);
}

$preferenze = "SELECT A.id, A.nome, A.cognome, M.nomeMateria FROM anagrafica A, materia M, preferenza F WHERE A.id = F.id_studente AND M.id = F.id_materia;";

$query = mysqli_query($conn, $preferenze) or die ("Errore: Query non eseguita!");

echo "<h2 style=\"color:red; float:center; margin-left:550px;\"> Preferenze inserite: &#128071" . "</h2>";

echo "<table border='1' style=\"border-color: black; margin-left:490px;\" >";

    echo "<tr>";

	    echo "<th style='background-color:darkgrey;'> <i>ID</i>" . "</th>";
	    echo "<th style='background-color:darkgrey;'> <i>Nome</i>" . "</th>";
	    echo "<th style='background-color:darkgrey;'> <i>Cognome</i>" . "</th>";
	    echo "<th style='background-color:darkgrey;'> <i>Materia</i>" . "</th>";
	echo "</tr>";

	foreach($query as $values){

	echo "<tr>";

		echo "<td style='background-color:whitesmoke;'>" . $values['id'] . "</td>";
		echo "<td style='background-color:whitesmoke;'>" . $values['nome'] . "</td>";
		echo "<td style='background-color:whitesmoke;'>" . $values['cognome'] . "</td>";
		echo "<td style='background-color:whitesmoke;'>" . $values['nomeMateria'] . "</td>";


	echo "</tr>";
	}



echo "</table>";

    echo "<br><br>";

echo "<a href=\"NewStudents.php\"> Inserisci un nuovo studente" . "</a>" . "<br>" . "<br>";
echo "<a href=\"InsertMateria.php\"> Inserisci una nuova materia" . "</a>" . "<br>" . "<br>";
echo "<a href=\"http://localhost/file/Database%20scuola/Preferenze%20(1).php\"> Inserisci una nuova preferenza" . "</a>" . "<br>" . "<br>";

mysqli_close($conn);

echo "</body>";

echo "</html>";

?>





