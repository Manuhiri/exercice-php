<?php

//Exercice 1

	//créer la fonction fusion
	function fusion($tab,$sep){
		//créer une boucle pour la concaténation
		for($i=0;$i<count($tab);$i++){
			echo $tab[$i].$sep;
		}
	}
	//test de notre fonction
	echo (fusion(array("Paris","Venise","Amalfi","Le Caire")," // " ));



//Exercice 2
	
	//création de la fonction palindrome
	function palindrome($string){
		
		//On inverse la premère chaine de caractère
		$string1 = strrev($string);
		//On fait la vérification
		if($string==$string1){
			return true;
		}else{
			return false;
		}
	}

// Pour un booléen echo n'afficche acun résultat si celui ci est false
var_dump(palindrome("kayak"));
echo (palindrome("kayak"));
var_dump(palindrome("kaya"));
echo (palindrome("kaya"));
?>