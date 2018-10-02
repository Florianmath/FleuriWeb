<?php

class Main_model extends CI_Model {

	/*Private $id;
	Private $nom;
	Private $prenom;*/

	function __construct(){
		parent::__construct();
		$this->load->database();
		
	}

	public function afficheProduits(){

		//$code="aut";
		// Mise en place de la requête
		$sql=$this->db->conn_id->prepare ("SELECT * FROM produit");
		$sql->execute(); // Exécution de la requête 
		$donnees=$sql->fetchAll();
		
		return $donnees;
	}
	public function references(){
		
		$sql2=$this->db->conn_id->prepare("SELECT pdt_ref FROM PRODUIT");
		$sql2->execute();
		$test=$sql2->fetchAll();
		
		return $test;	
	}
	
	public function session(){
		
		
	}
}

?>
