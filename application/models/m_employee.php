<?php
	class M_Employee extends CI_Model{


		public function readUs(){
			$this->db->select('*');
	        $this->db->from('incident');
	        $this->db->join('department ', 'num_department=id_department');

	        $query = $this->db->get();
	        return $query->result();
		}

		/*public function updateIncidentById(){
				$q=$this->db->get_where('incident');
				return $q->result();
		}*/

		public function deleteIncidentById($id){
	        $this->db->delete("incident", array("num_incident" => $id));
	    }

	}

?>	