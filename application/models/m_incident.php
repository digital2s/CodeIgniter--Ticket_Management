<?php
	class M_Incident extends CI_Model{

		public function addIncident($data){
	        return $this->db->insert("incident", $data);
	    }

		public function readIncidents(){
			$this->db->select('*');
	        $this->db->from('incident');
	        $this->db->join('department ', 'num_department=id_department');

	        $query = $this->db->order_by('num_incident', 'DESC')->get();
	        return $query->result();
		}

		public function readIncidentsWidthResponse(){
			$this->db->select('*');
	        $this->db->from('incident');
	        $this->db->join('department ', 'num_department=id_department');
	        $this->db->join('response', 'id_incident=num_incident');
	             $this->db->join('user', 'id_user = login_user');

	        $query = $this->db->get();
	        return $query->result();
		}

				public function readIncidentsWidthResponseById($id){
			$this->db->select('*');
	        $this->db->from('incident');
	        $this->db->join('department ', 'num_department=id_department');
	        $this->db->join('response', 'id_incident=num_incident');
	             $this->db->join('user', 'id_user = login_user');
	               $this->db->where('id_incident', $id);

	        $query = $this->db->get();
	        return $query->row();
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
			return $query->row();
	    }

	    public function readDescription($id){
	      	$this->db->select('*');
	        $this->db->from('incident');
	        $this->db->where('num_incident', $id);
	        
	        $query = $this->db->get();
			return $query->row();
	    }

		//  read / unread ticket
	    public function updateReadIncident($id, $read){
	    	$this->db->set('read_incident', $read);
			$this->db->where("num_incident",$id);
       		$this->db->update("incident");
		}

		public function deleteIncidentById($id){
			     $this->db->where("num_incident", $id);
	        $this->db->delete("incident");

	    }

	    public function deleteAllIncidents(){
	        $this->db->empty_table("incident");
	    }

	}

?>	