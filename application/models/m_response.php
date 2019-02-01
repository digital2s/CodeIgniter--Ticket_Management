<?php
	class M_Response extends CI_Model{

		public function createResponse($data){
	        return $this->db->insert("response", $data);
	    }

		public function readResponseByIncident($id){
			$this->db->select('*');
	        $this->db->from('response');
	        $this->db->join('incident ', 'num_incident=id_incident');
	        $this->db->where('id_incident', $id);

	        $query = $this->db->get();


	              if ($query->num_rows()==1) {
	        	return $query->row(); // row_array  row
	        }else{
	        	return false;
	        }
		}


		public function readIncidentsByDepartment($id_department){
			$this->db->select('*');
	        $this->db->from('incident');
	        $this->db->join('department', 'num_department = id_department');
	        $this->db->where('id_department', $id_department);
	        
	        $query = $this->db->get();
			return $query->result();
		}

		/*public function updateIncidentById(){
				$q=$this->db->get_where('incident');
				return $q->result();
		}*/

		public function readDescriptionById($id){
	      	$this->db->select('*');
	        $this->db->from('incident');
	        $this->db->join('user', 'id_user = login_user');
	        $this->db->where('num_incident', $id);
	        
	        $query = $this->db->get();
			return $query->row_array();
	    }

		public function deleteResponseByIncident($id_incident){
			        $this->db->where('id_incident', $id_incident);
	        $this->db->delete("response");

	    }

	    public function deleteAllResponses(){
	        $this->db->empty_table("response");
	    }

	}

?>	