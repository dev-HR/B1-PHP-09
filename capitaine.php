<?php

	$capitaine = array(
	
		"nom" => "RULF" ,
		"prénom" => "Olaf" ,
		"âge" => 48 ,
		"marié" => FALSE
		
	) ;
	
	
	// Exo2
	function visualiserInfos( $membreEquipage ){
		
		echo "\n\nExercice 2\n" ;
		
		$champs = array_keys( $membreEquipage ) ;
		foreach( $champs as $unChamp ){
			// Votre code ici
		}
		
	}
	
	// Exo3
	function consulterInfos( $membreEquipage ){
		
		echo "\n\nExercice 3\n" ;
		
		foreach( $membreEquipage as $unChamp => $uneValeur ){
			// Votre code ici
		}
		
	}
	
	// Exo4
	function toListHTML( $membreEquipage ){
		
		echo "\n\nExercice 4\n" ;
		
		$html = "<ul>" ;
		
		// Votre code ici
		
		$html = $html . "</ul>" ;
		
		return $html ;
		
	}
	
	// Exo5
	function toTableHTML( $membreEquipage ){
		
		echo "\n\nExercice 5\n" ;
		
		$html = "<table>" ;
		
		// Votre code ici
		
		$html = $html . "</table>" ;
		
		return $html ;
		
	}
	
	
	// Fonction principale
	function main(){
		// Exo1 - Q1
		global $capitaine ;
		
		// Exo1 - Q2
		echo "Exercice 1 - Question 2\n" ;
		print_r( $capitaine ) ;
		
		// Exo1 - Q3
		echo "\n\nExercice 1 - Question 3\n" ;
		echo $capitaine["prénom"] . "\n" ;
		
		// Exo1 - Q4
		echo "\n\nExercice 1 - Question 4\n" ;
		echo count( $capitaine ) . "\n" ;
		
		// Exo1 - Q5
		echo "\n\nExercice 1 - Question 5\n" ;
		$capitaine["marié"] = TRUE ;
		print_r( $capitaine ) ;
		
		// Exo1 - Q6
		echo "\n\nExercice 1 - Question 6\n" ;
		$capitaine["nbEnfants"] = 3 ;
		print_r( $capitaine ) ;
		
		// Exo1 - Q7
		echo "\n\nExercice 1 - Question 7\n" ;
		unset( $capitaine["marié"] ) ;
		print_r( $capitaine ) ;
		
		// Exo1 - Q8
		echo "\n\nExercice 1 - Question 8\n" ;
		$champs = array_keys( $capitaine ) ;
		print_r( $champs ) ;
		
		// Exo1 - Q9
		echo "\n\nExercice 1 - Question 9\n" ;
		$valeurs = array_values( $capitaine ) ;
		print_r( $valeurs ) ;
		
		// Exo1 - 10
		echo "\n\nExercice 1 - Question 10\n" ;
		
		if( in_array( "Olaf" , $capitaine ) ){
			print "La valeur 'Olaf' est présente.\n" ;
		}
		else{
			print "La valeur 'Olaf' est absente.\n" ;
		}
		
		if( in_array( "Louise" , $capitaine ) ){
			print "La valeur 'Louise' est présente.\n" ;
		}
		else{
			print "La valeur 'Louise' est absente.\n" ;
		}
		
		// Exo1 - Q11
		echo "\n\nExercice 1 - Question 11\n" ;
		
		$champ = array_search( "Olaf" , $capitaine ) ;
		if( $champ !== FALSE ){
			print "La valeur 'Olaf' se trouve à la clé '$champ'.\n" ;
		}
		else{
			print "La valeur 'Olaf' est absente.\n" ;
		}
		
		$champ = array_search( "Louise" , $capitaine ) ;
		if( $champ !== FALSE ){
			print "La valeur 'Louise' se trouve à la clé '$champ'.\n" ;
		}
		else{
			print "La valeur 'Louise' est absente.\n" ;
		}
		
		// Exo1 - Q12
		echo "\n\nExercice 1 - Question 12\n" ;
		
		if( array_key_exists( "nbEnfants" , $capitaine ) ){
			print "Le champ 'nbEnfants' est présent.\n" ;
		}
		else{
			print "Le champ 'nbEnfants' est absent.\n" ;
		}
		
		if( array_key_exists( "adresse" , $capitaine ) ){
			print "Le champ 'adresse' est présent.\n" ;
		}
		else{
			print "Le champ 'adresse' est absent.\n" ;
		}
		
		// Exo2
		visualiserInfos( $capitaine ) ;
		
		// Exo3
		consulterInfos( $capitaine ) ;
		
		// Exo4
		$htmlList = toListHTML( $capitaine ) ;
		echo "$htmlList\n" ;
		
		// Exo5
		$htmlTable = toTableHTML( $capitaine ) ;
		echo "$htmlTable\n" ;
	}


	// Programme principal
	main() ;
	

?>
