<?php

class Employer_model extends CI_Model {


    public function getAllUser(){
        $query = $this->db->query('select * from user');
        $array=[];
        foreach ($query->result_array() as $row){
            $array[]=$row;
        }
        return $array;
    }

    public function checkUser($email,$mdp){
        $string=sprintf("select * from user where email='%s' and mdp='%s'",$email,$mdp);
        $query = $this->db->query($string);
        $array=[];
        foreach ($query->result_array() as $row){
            $array[]=$row;
        }
        return $array;
    }

    public function getIdUser($email,$mdp){
        $string=sprintf("select iduser from user where email='%s' and mdp='%s'",$email,$mdp);
        $query = $this->db->query($string);
        $array=[];
        foreach ($query->result_array() as $row){
            $array[]=$row;
        }
        return $array;
    }

    public function insertProduit($idcategorie,$iduser,$nom,$photo,$estimation){
        $string=sprintf("insert into produit values (default,%d,%d,'%s','%s',%d)",$idcategorie,$iduser,$nom,$photo,$estimation);
        echo $string;
        $this->db->query($string);
    }

    public function updatePd($idcategorie,$iduser,$nomproduit,$photo,$estimation, $idpd){
        $string=sprintf("update produit set idcategorie=%d, iduser=%d, nomproduit='%s', photo='%s', estimation=%d where idproduit=%d ",$idcategorie,$iduser,$nomproduit,$photo,$estimation,$idpd);
        echo $string;
        $this->db->query($string);
    }



    public function upload_image($nom_image) {
        $config['upload_path'] = 'C:\xampp\htdocs\ci306\image';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($nom_image)) {
            return $this->upload->display_errors();
        } else {
            $data = $this->upload->data();
            return $data['file_name'];
        }
    }


}