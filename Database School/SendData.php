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

/**
 * Parameters for entering data into the Database
 * @var string $nome Name of the student.
 * @var string $cognome Surname of the student.
 * @var int $age Age of the student.
 * @var string $city City of the student.
 */

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$eta = $_POST['eta'];
$citta = $_POST['citta'];

/**
 * Connection to the database
 */

$conn = mysqli_connect("localhost", "root", "", "webdbconnector");

if (mysqli_connect_errno())
  die("Error: Connection failed." . mysqli_error($conn));

else
  echo "<h2 style=\"color:green\"> The connection was successful!" . "</h2>";


echo "The data has been entered correctly." . "<br>";
echo "You have added the following student: " . "<b>$nome</b>" . "<b>$cognome</b>";

$Student = "INSERT INTO anagrafica(nome, cognome, eta, citta) VALUES ('$nome', '$cognome', '$eta', '$citta')" or die ("Error: Query not executed." . "<br>");

mysqli_query($conn, $Student) or die ("The data has not been entered");

echo "<br><br><br>";

echo "<a href=\"NewStudents.php\"> If you want to further insert a student click here!" . "</a>";

/**
 * Close the connection to the database
 */
mysqli_close($conn);

