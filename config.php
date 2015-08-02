<?php

	// Infos de connexion
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$bdd_name = 'miageconnect';
	
	/*$connexion = new mysqli($host, $username, $password, $bdd_name);


	if ($connexion->connect_error) {
    	die('Connect Error (' . $connexion->connect_errno . ') '
        	    . $connexion->connect_error);
	}
	
	function executeSelectQuery($connexion, $query) {

		$result = array();

		if ($resultQuery = $connexion->query($query)) {

			 Récupère un tableau associatif 
			while ($row = $resultQuery->fetch_assoc()) {
				array_push($result, $row);			 
			}

			/* Libération des résultats
			$resultQuery->free();
		}
		
    	return $result;
	}
	
	function executeQuery($connexion, $query) {

		if ($connexion->query($query) !== TRUE) {

			echo 'Erreur SQL';
			return false;
		}

		return true;
	}*/

	//Pour les date en fr
	function datefr($Date) { 
		$dates=explode(" ", " ".$Date);
		$Date=$dates[1]; $Time=$dates[2];
		if ($Time!=null) $Time=" $Time";
		$regs=explode("-", "-".$Date);
		return $regs['3']."-".$regs['2']."-".$regs['1']." &agrave;".$Time;
	} 

	// Pour le systhème de templates
	function obtenirTemplate($nomTemplate) {
		$nomFichier = "templates/" . $nomTemplate . ".php";
		include("$nomFichier");
		return $template;
	}
	
	function parserTemplate($template, $array) {
		foreach($array as $a => $b) {
			$template = str_replace("{{{$a}}}", $b, $template);
		}
		return $template;
	}
	
	function obtenirMenu($nomTemplate) {
		$nomFichier = "templates/" . $nomTemplate . ".php";
		include("$nomFichier");
		return $menu;
	}

	function obtenirSousMenu($nomTemplate) {
		$nomFichier = "templates/" . $nomTemplate . ".php";
		include("$nomFichier");
		return $sousMenu;
	}
	
	// template de l'accueil
	function templateSite($contenu) {
		$menu = obtenirMenu("menuSite");
		$template = obtenirTemplate("templateSite");
		$sousMenu = obtenirSousMenu("sousMenuSite");

		if (isset($_GET["page"]) && $_GET["page"] == "videos") {
			$tableauFinal = array(
				"contenu" => $contenu,
				"menu" => '',
				"sousMenu" => $sousMenu
			);
		} else {

			$tableauFinal = array(
				"contenu" => $contenu,
				"menu" => $menu,
				"sousMenu" => ''
			);
		}

		$page = parserTemplate($template, $tableauFinal);
		echo utf8_encode($page);
		die();
	}
?>