<?php

echo "<title> Preferenze </title>";

$conn = mysqli_connect("localhost", "root", "", "Database Scuola");

if(false === $conn){
	
	echo "Errore di connessione.";
}

$query = "SELECT id, nomeMateria FROM materia;";

$result = mysqli_query($conn, $query);

$query2 = "SELECT id, nome, cognome FROM anagrafica;";

$students = mysqli_query($conn, $query2);

mysqli_close($conn);

//************************************************//

echo "<h2> Seleziona le preferenze </h2>";

echo "<form action=\"SendPreferenza.php\" method=\"post\">";

    echo "<fieldset>";
	
	    echo "<legend> fai le corrette associazioni" . "</legend>";
		
	        echo "<label for=\"materia\"> Scegli una materia" . "</label>";
			
			    echo "<select name=\"id_materia\" id=\"materia\">";
				
				    while($value = mysqli_fetch_array($result)){

				    echo "<option value=".$value['id'].">" . $value['nomeMateria'] . "</option>";

                    //"<option value=\"$value['id']\">" . $value['nome'] . "</option>";	
					
					}

				echo "</select>" . " ";
				
	echo "<a href=\"InsertMateria.php\"> Inserisci una nuova materia" . "</a>";
				
				
	echo "<br><br>";
	
				
		echo "<label for=\"studente\">Scegli uno studente" . "</label>";
		
		    echo "<select name=\"id_studente\" id=\"studente\">";
			
			    while($valueTwo = mysqli_fetch_array($students)){
					
					echo "<option value=".$valueTwo['id'].">" . $valueTwo['nome'] . " " . $valueTwo['cognome'] . "</option>";
					
					//"<option value=\"$valueTwo['id']\">" . $value['nome'] . "</option>";	
				}
		
			echo "</select>" . " ";
			
	echo "<a href=\"NewStudents.php\"> Inserisci un nuovo studente" . "</a>";
	
	    echo "<br><br>";
	
	
	            echo "<input type=\"submit\" value=\"invia\" />";


    echo "</fieldset>";

echo "</form>";



echo "<form action=\"RecuperaPreferenza.php\" method''>";

echo "<input type=\"submit\" value=\"recupera\">";


echo "</form>";

?>