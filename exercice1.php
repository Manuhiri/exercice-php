<?php

//Exercice 1

	//cr�er la fonction fusion
	function fusion($tab,$sep){
		//cr�er une boucle pour la concat�nation
		for($i=0;$i<count($tab);$i++){
			echo $tab[$i].$sep;
		}
	}
	//test de notre fonction
	echo (fusion(array("Paris","Venise","Amalfi","Le Caire")," // " ));



//Exercice 2
	
	//cr�ation de la fonction palindrome
	function palindrome($string){
		
		//On inverse la prem�re chaine de caract�re
		$string1 = strrev($string);
		//On fait la v�rification
		if($string==$string1){
			return true;
		}else{
			return false;
		}
	}

// Pour un bool�en echo n'afficche acun r�sultat si celui ci est false
var_dump(palindrome("kayak"));
echo (palindrome("kayak"));
var_dump(palindrome("kaya"));
echo (palindrome("kaya"));
?>