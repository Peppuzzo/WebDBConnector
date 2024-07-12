<?php

echo "<title> InsertMateria" . "</title>";

echo "<body style=\"background-color: #DC143C;\">";

echo "<br><br><br><br><br><br><br>";

echo "<form action=\"SendMateria.php\" method=\"post\">";

    echo "<fieldset style=\"width:33%; margin-left:33%; background-color:white; border-radius:30px;\">";

	echo "<br>";

	   echo "<legend style=\"margin-left:33%;\" for=\"materia\"> <b>INSERISCI MATERIA</b>" . "</legend>";

		    echo "<label style=\"margin-left:5%;\" for=\"materia\"> <b style=\"color:#20B2AA\">Materia </b> <b style=\"color:red;\"> * </b>" . "</label>";
			    echo "<input type=\"text\" name=\"materia\" id=\"materia\" placeholder=\"inserisci la materia..\" />" . "<br>" . "<br>";

	    echo "<input style=\"margin-left:5%;\" type=\"submit\" value=\"invia materia\"/>";

	echo "<br>";
	echo "<br>";

echo "</fieldset>";



echo "</form>";

echo "</body>";

?>
