<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vgclient extends CI_Controller{
	
	public function index(){
		$this->load->helper('url');
		$this->load->view('vgclient/vgpagedaccueil');

		//connexion employé
		$this->load->library('session');
		$this->load->helper('url');
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$u = $this->input->post("username");
			$p = $this->input->post("password");
			if ($u=="toto@toto.com" && $p=="toto") {
				$this->session->set_userdata("connexion", "ok");
				redirect (site_url("vgclient/vgrecapitulatif"));
				return;
			}
		}
		$this->load->view('vgclient/vgpagedaccueil');

		//connexion client
		$this->load->library('session');
		$this->load->helper('url');
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$u = $this->input->post("username");
			$p = $this->input->post("password");
			if ($u=="ludo@ludo.com" && $p=="ludo") {
				$this->session->set_userdata("connexion", "ok");
				redirect (site_url("vgclient/vgformulaire"));
				return;
			}
		}
		$this->load->view('vgclient/vgpagedaccueil');
	}

	
	public function vglogout()
	{
		$this->load->library('session');
		$this->load->helper('url');
		$this->session->unset_userdata('connexion');
		redirect (site_url("vgclient/vglogout"));
	}

	public function vgrecapitulatif(){
		$this->load->database();
		$this->load->helper('url');

		$model["recapitulatif"] = $this->db->query("SELECT * FROM client");

		$this->load->view('vgclient/vgrecapitulatif', $model);
	}

	public function vgformulaire(){

		// $this->load->library('session');
		$this->load->helper('url');
		$this->load->view('vgclient/vgformulaire');
		// if ($this->session->userdata("connexion")=="ok")// l'utilisateur est correctement authentifié
			
		// 	$this->load->view('vgclient/vgformulaire');
		// else 
		// 	redirect ("vgclient/vgpagedaccueil");

	}



	public function script_vgformulaire(){
		$data = $this->input->post(); //récupère les données envoyées par le formulaire
		$this->load->database();//connexion à la base de données
		$str = $this->db->insert_string('client',$data);//crée une chaîne de caractères qui représente une requête insert
		$this->db->simple_query($str);//exécute la requête

		$this->load->helper('url');// charge le module permettant d’utiliser la fonction redirect
		redirect(site_url("vgclient/vgrecapitulatif"));//redirection vers le récapitulatif
	}

	public function vgmodif($id){
		$this->load->database();
		$this->load->helper('url');

		$recapitulatif = $this->db->query("SELECT * FROM client WHERE id=".$id);
		$model["client"] = $recapitulatif->row();//première ligne du résultat

		$this->load->view('vgclient/vgmodif', $model);
	}

	public function script_vgmodif(){
		$data = $this->input->post();
		$this->load->database();//connexion base de données
		$id = $this->input->post("id");//récupère les données des input en post

		$str = $this->db->update_string('client', $data, "id=".$id);

		$this->db->query($str);
		$this->load->helper('url');
		redirect(site_url("vgclient/vgrecapitulatif"));

	}

	public function vgsupprime($id){
		$this->load->database();
		$this->load->helper('url');
		
		$recapitulatif = $this->db->query("SELECT * FROM client where id=".$id);
		$model["client"] = $recapitulatif->row();
		$this->load->view('vgclient/vgsupprime', $model);
	}

	public function script_vgsupprime(){
		$id = $this->input->post("id");
		$this->load->database();
		$this->db->query("DELETE FROM client where id=".$id);

		$this->load->helper('url');
		redirect(site_url("vgclient/vgrecapitulatif"));
	}



}

?>