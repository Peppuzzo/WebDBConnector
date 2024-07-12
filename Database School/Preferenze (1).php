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


echo "<title> Preferenze </title>";

$conn = mysqli_connect("localhost", "root", "", "DatabaseScuola");

if(false === $conn){

  echo "Errore di connessione.";
}

$query = "SELECT id, nomeMateria FROM materia;";

$result = mysqli_query($conn, $query);

$query2 = "SELECT id, nome, cognome FROM anagrafica;";

$students = mysqli_query($conn, $query2);

mysqli_close($conn);

//************************************************//

echo "<h2> Seleziona le preferenze </h2>";

echo "<form action=\"SendPreferenza.php\" method=\"post\">";

    echo "<fieldset>";

	    echo "<legend> fai le corrette associazioni" . "</legend>";

	        echo "<label for=\"materia\"> Scegli una materia" . "</label>";

			    echo "<select name=\"id_materia\" id=\"materia\">";

				    while($value = mysqli_fetch_array($result)){

              echo "<option value=".$value['id'].">" . $value['nomeMateria'] . "</option>";

              //"<option value=\"$value['id']\">" . $value['nome'] . "</option>";

            }

				echo "</select>" . " ";

	echo "<a href=\"InsertMateria.php\"> Inserisci una nuova materia" . "</a>";


	echo "<br><br>";


		echo "<label for=\"studente\">Scegli uno studente" . "</label>";

		    echo "<select name=\"id_studente\" id=\"studente\">";

			    while($valueTwo = mysqli_fetch_array($students)){

            echo "<option value=".$valueTwo['id'].">" . $valueTwo['nome'] . " " . $valueTwo['cognome'] . "</option>";

            //"<option value=\"$valueTwo['id']\">" . $value['nome'] . "</option>";
          }

			echo "</select>" . " ";

	echo "<a href=\"NewStudents.php\"> Inserisci un nuovo studente" . "</a>";

	    echo "<br><br>";


	            echo "<input type=\"submit\" value=\"invia\" />";


    echo "</fieldset>";

echo "</form>";



echo "<form action=\"RecuperaPreferenza.php\" method''>";

echo "<input type=\"submit\" value=\"recupera\">";


echo "</form>";

?>
