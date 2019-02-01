<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_User extends CI_Model {


    public function createUser($data){
        return $this->db->insert("user", $data);
    }

    public function readUsersByType($id_type){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('department', 'num_department = id_department');
        $this->db->where('id_type',$id_type);
        $query = $this->db->get();

        return $query->result();
    }


    public function verif_connexion($data){

        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('department', 'num_department = id_department');
        $this->db->where('login_user', $data['login']);
        $this->db->where('pw_user', $data['pass']);
        $query = $this->db->get();

        if($query->num_rows()==1)
        {
            $row=$query->result_array();
            $data_resultat=$row[0];
            return $data_resultat;
        }
        else
            return false;
    }


    public function updateAccount($data){
        $this->db->where("login_user", $data['login_user']);
        $this->db->update("user", $data);
    }


    public function deleteAccount($id){
     //  var_dump($id) ;
     // echo  $imp = implode(", ", $id);
        $this->db->where_in("login_user", $id);
        $this->db->delete("user");
    }
}