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

echo "<!DOCTYPE html>";

echo "<html lang=\"en\">";

echo "<head> <title> RecoverPreference </title> </head>";

echo "<body style=\"background-color: #b0c4de\">";

/**
 * @var mysqli $conn Database connection object.
 */
$conn = mysqli_connect("localhost", "root", "", "WebDBConenctor");


if (mysqli_connect_errno())
  die ("Database connection failed!" . mysqli_error($conn));

/**
 * SQL query to retrieve preferences.
 */
$preference = "SELECT STU.ID AS ID_student, STU.Name AS Name_Student, STU.Surname AS Surname_Student, S.Name AS Name_Subject FROM student STU, subject S, preference F WHERE STU.ID = F.id_Student AND S.ID = F.id_Subject;";


/**
 * @var mysqli_result|bool $query Result of the query execution.
 */

$query = mysqli_query($conn, $preference) or die ("Error: Query not executed!");

echo "<h2 style=\"color:red; text-align:center;  margin-left:550px;\"> Preference entered: &#128071" . "</h2>";

echo "<table style=\"border-color: black; margin-left:490px;\" >";

    echo "<tr>";

	    echo "<th style='background-color:darkgrey;'> <i>ID</i>" . "</th>";
	    echo "<th style='background-color:darkgrey;'> <i>Name</i>" . "</th>";
	    echo "<th style='background-color:darkgrey;'> <i>Surname</i>" . "</th>";
	    echo "<th style='background-color:darkgrey;'> <i>Subject</i>" . "</th>";

	  echo "</tr>";

/**
 * @var mysqli $values Fetching the values from the query.
 */
	foreach($query as $values){

	echo "<tr>";

		echo "<td style='background-color:whitesmoke;'>" . $values['ID_student'] . "</td>";
		echo "<td style='background-color:whitesmoke;'>" . $values['Name_Student'] . "</td>";
		echo "<td style='background-color:whitesmoke;'>" . $values['Surname_Student'] . "</td>";
		echo "<td style='background-color:whitesmoke;'>" . $values['Name_Subject'] . "</td>";


	echo "</tr>";

	}

echo "</table>";

    echo "<br><br>";

echo "<a href=\"NewStudents.php\"> Insert a new student" . "</a>" . "<br>" . "<br>";
echo "<a href=\"InsertMateria.php\"> Insert a subject" . "</a>" . "<br>" . "<br>";
echo "<a href=\"http://localhost/file/Database%20scuola/Preferenze%20(1).php\"> Enter a new preference " . "</a>" . "<br>" . "<br>";

mysqli_close($conn);

echo "</body>";

echo "</html>";
