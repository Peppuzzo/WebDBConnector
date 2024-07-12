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

?>

<!Doctype html>
<html lang="English">

    <head>
	    <title> Insert Students </title>
	</head>

<body style="background-color:darkgray">

<form action="SendData.php" method="post">

    <br><b><br><b>
    <br><b><br><b>
    <br><b><br><b>
    <br><b><br>

    <fieldset style="width:30%; margin-left:470px; background-color: whitesmoke; border-color:yellow; border-radius:30px;">

	    <legend  style="margin-left:26.5%;"> INSERT STUDENT </legend>

		<label for="nome"> Nome <b style="color:red;"> * </b> </label>
		    <input style="margin-left:32px;" type="text" name="nome" id="nome" placeholder="inserisci il nome.." required />

	<br>

	    <label for="cognome"> Cognome <b style="color:red;"> * </b> </label>
		    <input style="margin-left:7px;" type="text" name="cognome" id="cognome" placeholder="Inserisci il cognome.." required />

	<br>

	    <label for="eta"> Età <b style="color:red;"> * </b> </label>
		    <input style="margin-left:48px;" type="number" name="eta" id="eta" min="1" max="120" placeholder="età" required />

    <br>

	    <label for="citta"> Città <b style="color:red;"> * </b> </label>
		    <input style="margin-left:37px;" type="text" name="citta" id="citta"  placeholder="inserisci la città.." required />

    <br>


	<h5 style="color:red"> <u>Tutti i campi sono obbligatori!</u> </h5>

	            <input type="submit" value="invia" name="conferma" />
	            <input type="reset" value="cancella" />


    </fieldset>

</form>

</body>
</html>

?>

