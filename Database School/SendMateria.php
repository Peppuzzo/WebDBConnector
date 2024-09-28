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
 * @var string $materia Name of the subject.
 */
$materia = $_POST['materia'];


/**
 * Connection to the database
 */
$open = mysqli_connect("localhost", "root", "", "WebDbConnector");

if ($open === false)
  exit("Error with database connection.") . mysqli_error($open);

else
  echo "<h2> Subject entered correctly!" . "</h2>";


echo "The following subject has been included: " . "<b>$materia</b>";

/**
 * SQL query to insert the subject.
 */
$insert = "INSERT INTO subject(Name) VALUES('$materia')";

echo "<br>";

mysqli_query($open, $insert) or die ("Query not executed!");

echo "<br><br><br>";

/**
 * Link to insert a new subject.
 */

echo "<a href=\"InsertMateria.php\"> If you want to further insert a subject click here!" . "</a>";


/**
 * Close the connection to the database
 */
mysqli_close($open);

