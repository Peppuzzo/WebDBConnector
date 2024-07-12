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
