<?php
	class M_Department extends CI_Model{

		public function createDepartment($data){
	        return $this->db->insert("department", $data);
	    }

		public function readDepartments(){
				$q=$this->db->get('department');
				return $q->result();
		}

		public function readDepartmentById($id){
	

				  return $this->db->get_where('department', array('num_department' => $id), 1, 0)->row_array();
		}


		public function updateDepartmentById($data){
			$this->db->where("num_department",$data['num_department']);
       		$this->db->update("department", $data);
		}

		public function deleteDepartmentById($id){
			$impid = implode(", ", $id);
	     //return    $this->db->delete("department", array("num_department" => $id));*/

	     $this->db->where_in('num_department', $id);
		$this->db->delete('department');
	    }


	    public function readDepartmentsDropdown(){
	    	$result = $this->db->from("department")->group_by('num_department')->get();
	        $rtrn = array();
	        if($result->num_rows() > 0){
	            $rtrn[''] = 'Select the department';
	            foreach($result->result_array() as $row){
	                $rtrn[$row['num_department']] = $row['label_department'];
	            }
	        }
	        return $rtrn;
	    }

	}

?>	