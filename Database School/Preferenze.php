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

/**
 * @author Giuseppe Calarese
 * @version 1.0
 */


echo "<title> Preference </title>";

/**
 * Connection to the database.
 */

$conn = mysqli_connect("localhost", "root", "", "WebDbConnector");

if(false === $conn)
  echo "Connection error.";


$query = "SELECT ID AS ID_Subject, Name AS subject_name FROM subject;";

$materia = mysqli_query($conn, $query);

$query2 = "SELECT ID AS ID_Student, Name AS student_name, Surname FROM student;";

/**
 * @var mysqli_result|bool $students Result of the query execution.
 */

$studente = mysqli_query($conn, $query2);

mysqli_close($conn);


echo "<h2> Select your preferences </h2>";

echo "<form action=\"SendPreferenza.php\" method=\"post\">";

    echo "<fieldset>";

	    echo "<legend> make the correct associations" . "</legend>";

	        echo "<label for=\"materia\"> Scegli una materia" . "</label>";

          /**
           * @var array $value Array containing the result of the query.
           */

			    echo "<select name=\"id_materia\" id=\"materia\">";

				    while($value = mysqli_fetch_array($materia)){

              echo "<option value=".$value['ID_Subject'].">" . $value['subject_name'] . "</option>";
            }

				echo "</select>" . " ";

	echo "<a href=\"InsertMateria.php\"> Inserisci una nuova materia" . "</a>";


	echo "<br><br>";


		echo "<label for=\"studente\">Scegli uno studente" . "</label>";

		    echo "<select name=\"id_studente\" id=\"studente\">";

			    while($valueTwo = mysqli_fetch_array($studente)){

            echo "<option value=".$valueTwo['ID_Student'].">" . $valueTwo['student_name'] . " " . $valueTwo['Surname'] . "</option>";

          }

			echo "</select>" . " ";

	echo "<a href=\"NewStudents.php\"> Insert a new student" . "</a>";

	    echo "<br><br>";


	            echo "<input type=\"submit\" value=\"invia\" />";


    echo "</fieldset>";

echo "</form>";



echo "<form action=\"RecuperaPreferenza.php\" method''>";

echo "<input type=\"submit\" value=\"recupera\">";


echo "</form>";
