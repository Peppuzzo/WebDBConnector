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

echo "<title> InsertMateria" . "</title>";

echo "<body style=\"background-color: #DC143C;\">";

echo "<br><br><br><br><br><br><br>";

echo "<form action=\"SendMateria.php\" method=\"post\">";

    echo "<fieldset style=\"width:33%; margin-left:33%; background-color:white; border-radius:30px;\">";

	echo "<br>";

	   echo "<legend style=\"margin-left:33%;\" for=\"materia\"> <b>INSERT SUBJECT</b>" . "</legend>";

		    echo "<label style=\"margin-left:5%;\" for=\"materia\"> <b style=\"color:#20B2AA\">Materia </b> <b style=\"color:red;\"> * </b>" . "</label>";
			    echo "<input type=\"text\" name=\"materia\" id=\"materia\" placeholder=\"insert the subject..\" />" . "<br>" . "<br>";

	    echo "<input style=\"margin-left:5%;\" type=\"submit\" value=\"invia materia\"/>";

	echo "<br>";
	echo "<br>";

echo "</fieldset>";


echo "</form>";

echo "</body>";
