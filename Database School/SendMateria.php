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




