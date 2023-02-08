<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function checkUtilisateur(){
        $nom=$this->input->post('nom');
        $mdp=$this->input->post('mdp');
        $this->load->model("employer_model");
        $iduser=$this->employer_model->getIdUser($nom,$mdp);
        $user['user'] = $this->employer_model->checkUser($nom,$mdp);
       if ($nom=='admin' && $mdp =='admin'){
           redirect(base_url('welcome/adminPage'));
       }else  if ($user['user']==null){
           redirect(base_url('welcome'));
       }
        $this->load->library('session');
        $this->session->set_userdata('user', ['nom' => $iduser[0]['iduser'], 'mdp' => $mdp]);
        redirect(base_url('welcome/listeProduit'));

    }

    public function deco(){
        $this->load->library('session');
        $this->session->unset_userdata('user');
        redirect(base_url('welcome'));
    }

    public function listeProduit() {
        $this->load->library('session');
        if (!isset($_SESSION['user']))redirect(base_url('welcome'));
        $this->load->model("employer_model");
        $this->load->model("produit_model");
        $data = array();
        $x=array();
        $data['olona']=$this->session->user;
        $data['titre'] = 'Liste Produit';
        $data['utilisateur'] = $this->employer_model->getAllUser();
        $data['allcategorie']=$this->produit_model->getAllCategorie();

        for ($i=0;$i<count($this->produit_model->getAllCategorie());$i++){
            $data[$this->produit_model->getAllCategorie()[$i]['nomcategorie']]=$this->produit_model->getProduitById($this->produit_model->getAllCategorie()[$i]['idcategorie']);
            $x[]=$data[$this->produit_model->getAllCategorie()[$i]['nomcategorie']];
        }
        $data['allproduit']=$x;
        $this->load->view('listeproduit', $data);

    }


    public function adminPage(){
        $this->load->model("produit_model");
        $data[]=array();
        $data['allcategorie']=$this->produit_model->getAllCategorie();
        $this->load->view('admin',$data);
    }



    public function index(){
        $this->load->view('accueil');
    }

}
