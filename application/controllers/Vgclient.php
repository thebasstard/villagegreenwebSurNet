<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vgclient extends CI_Controller{

	public function __construct() {
        parent::__construct();
        $this->load->library('session');
		$this->load->helper('url');
    }
	
	public function index(){
		$this->load->database();
		
		//connexion employé		
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$u = $this->input->post("usercom");
			$p = $this->input->post("passcom");
			if ($u=="dolu" && $p=="dolu") {
				$this->session->set_userdata("connexion", "ok");
				redirect (site_url("vgclient/vgrecapitulatif"));
				return;
			}
		}

		//connexion client
		//$this->load->library('session');
		//$this->load->helper('url');
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
		$this->session->unset_userdata('connexion');
		$this->load->view("vgclient/vglogout");
	}

	public function vgrecapitulatif(){
		if ($this->session->userdata("connexion") == "ok") {
		
			$this->load->database();

			$model["vgrecapitulatif"] = $this->db->query("select * from client");

			$this->load->view('vgclient/vgrecapitulatif', $model);
		}
		else {
			redirect(site_url("vgclient/index"));
		}
	}

	public function vgformulaire(){

		
		$this->load->view('vgclient/vgformulaire');		
	}



	public function script_vgformulaire(){
		$data = $this->input->post(); //récupère les données envoyées par le formulaire
		$this->load->database();//connexion à la base de données
		$str = $this->db->insert_string('client',$data);//crée une chaîne de caractères qui représente une requête insert
		$this->db->simple_query($str);//exécute la requête

		
		redirect(site_url("vgclient/vgformulaire"));//redirection vers le récapitulatif
	}

	public function vgajout(){

		
		if ($this->session->userdata("connexion") == "ok") {
			$this->load->view('vgclient/vgajout');		
		}
		else {
			redirect(site_url("vgclient/index"));
		}
	}



	public function script_vgajout(){
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

		$vgrecapitulatif = $this->db->query("select * from client where id=".$id);
		$model["client"] = $vgrecapitulatif->row();//première ligne du résultat

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
		
		$vgrecapitulatif = $this->db->query("select * from client where id=".$id);
		$model["client"] = $vgrecapitulatif->row();
		$this->load->view('vgclient/vgsupprime', $model);
	}

	public function script_vgsupprime(){
		$id = $this->input->post("id");
		$this->load->database();
		$this->db->query("delete from client where id=".$id);

		$this->load->helper('url');
		redirect(site_url("vgclient/vgrecapitulatif"));
	}



}

?>