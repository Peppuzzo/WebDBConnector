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
 * @var int $materia ID of the subject.
 * @var int $studente ID of the student.
 */

$materia = $_POST['id_materia'];
$studente = $_POST['id_studente'];

$conn = mysqli_connect("localhost", "root", "", "webdbconnector");

if (false === $conn)
  echo "Error: Connection not made!" . mysqli_error();

else
  echo "<h2 style=\"color:green;\" > Database connection made! </h2>";


echo "<br>";

echo "Preference entered correctly.";


$insert = "INSERT INTO preferenza(id_studente, id_materia) VALUES('$studente', '$materia')";

/**
 * @var mysqli_result|bool $result Result of the query execution.
 */
mysqli_query($conn, $insert) or die ("Query not executed!");

/**
 * Close the connection to the database.
 */
mysqli_close($conn);
