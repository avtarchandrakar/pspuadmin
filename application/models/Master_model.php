<?php date_default_timezone_set('Asia/Kolkata');
class Master_model extends CI_model{
  	//State
	public function get_all_state(){
		$this->db->select('*');
	  	$this->db->order_by('m_state_name');
	  	$res = $this->db->get('master_state_tbl')->result();
	  	return $res;
	}


	  public function getstateById1($m_state_id)   //state validation
  {

    // print_r($id);die();
     $m_state_name = $this->db->select('m_state_name,m_state_id')->where('m_state_name',$m_state_id)->get('master_state_tbl')->result();
         
      return $m_state_name;
  }
	public function get_a_state($edid){
		$this->db->select('*');
		$this->db->where('m_state_id',$edid);
    $res = $this->db->get('master_state_tbl')->result();
	  	return $res;
	}
  	public function insert_state(){
    	$data = array();
      	$s_data = array(
        "m_state_name" => $this->input->post('m_state_name'),
        "m_state_country" => 1,
        "m_state_status" => $this->input->post('m_state_status'),
        "m_state_added_on" => date('Y-m-d H:i'),
      );
      $set = $this->db->insert('master_state_tbl',$s_data);
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Inserted Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }
    public function update_state(){
    $data = array();
      $s_data = array(
        "m_state_name" => $this->input->post('m_state_name'),
        "m_state_country" => 1,
        "m_state_status" => $this->input->post('m_state_status'),
      );
      $this->db->where('m_state_id',$this->input->post('m_state_id'));
      $set = $this->db->update('master_state_tbl',$s_data);
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Update Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }
    public function delete_state(){
      $this->db->where('m_state_id', $this->input->post('delete_id'));
      $set = $this->db->delete('master_state_tbl');
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Deleted Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }
    //City
	public function get_all_city(){
		$this->db->select('*');
		$this->db->join('master_state_tbl', 'master_state_tbl.m_state_id = master_city_tbl.m_city_state','left');
	  	$this->db->order_by('m_city_name');
	  	$res = $this->db->get('master_city_tbl')->result();
	  	return $res;
	}
	public function get_a_city($edid){
		$this->db->select('*');
		$this->db->where('m_city_id',$edid);
	  	$res = $this->db->get('master_city_tbl')->result();
	  	return $res;
	}
  	public function insert_city(){
    	$data = array();
      	$s_data = array(
	        "m_city_name" => $this->input->post('m_city_name'),
	        "m_city_state" => $this->input->post('m_city_state'),
	        "m_city_country" => 1,
	        "m_city_status" => $this->input->post('m_city_status'),
	        "m_city_added_on" => date('Y-m-d H:i'),
	      );
      $set = $this->db->insert('master_city_tbl',$s_data);
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Inserted Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }
    public function update_city(){
    $data = array();
      $s_data = array(
        "m_city_name" => $this->input->post('m_city_name'),
        "m_city_state" => $this->input->post('m_city_state'),
        "m_city_country" => 1,
        "m_city_status" => $this->input->post('m_city_status'),
      );
      $this->db->where('m_city_id',$this->input->post('m_city_id'));
      $set = $this->db->update('master_city_tbl',$s_data);
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Update Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }
    public function delete_city(){
      $this->db->where('m_city_id', $this->input->post('delete_id'));
      $set = $this->db->delete('master_city_tbl');
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Deleted Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }

    public function getcityById1($m_city_id)
  {

    // print_r($id);die();
     $m_city_name = $this->db->select('m_city_name,m_city_id')->where('m_city_name',$m_city_id)->get('master_city_tbl')->result();
         
      return $m_city_name;
  }
  	//Country State City
  	public function get_active_country(){
		$this->db->select('*');
    	$this->db->where('m_country_status','1');
    	$this->db->order_by('m_country_name');
    	$res = $this->db->get('master_country_tbl')->result();
    	return $res;
	}
	public function get_active_state(){
		$this->db->select('*');
    	$this->db->where('m_state_status','1');
    	$this->db->where('m_state_country','1');
    	$this->db->order_by('m_state_name');
    	$res = $this->db->get('master_state_tbl')->result();
    	return $res;
	}
	public function get_active_city(){
		$this->db->select('*');
    	$this->db->where('m_city_status','1');
    	$this->db->where('m_city_state','1');
    	$this->db->order_by('m_city_name');
    	$res = $this->db->get('master_city_tbl')->result();
    	return $res;
	}
	public function get_active_area(){
		$this->db->select('*');
    	$this->db->where('m_area_status','1');
    	$this->db->where('m_area_city',$this->input->post('m_branch_city'));
    	$this->db->order_by('m_area_name');
    	$res = $this->db->get('master_area_tbl')->result();
    	return json_encode($res);
	}
	public function get_all_slider(){
		$this->db->select('*');
    	$this->db->order_by('m_slider_id','DESC');
    	$res = $this->db->get('master_slider_tbl')->result();
    	return $res;
	}
	public function get_a_slider($edid){
		$this->db->select('*');
		$this->db->where('m_slider_id',$edid);
    	$res = $this->db->get('master_slider_tbl')->result();
    	return $res;
	}
	public function insert_slider(){
		$data = array();
		if (!empty($_FILES['m_slider_image']['name'])) {
	      $config['file_name'] = $_FILES['m_slider_image']['name'];
	      $config['upload_path'] = 'uploads/slider';
	      $config['allowed_types'] = 'jpg|jpeg|png';
	      $config['remove_spaces'] = false;
	      //Load upload library and initialize configuration
	      $this->load->library('upload', $config);
	      $this->upload->initialize($config);
	      if ($this->upload->do_upload('m_slider_image')) {
	        $m_slider_image = $config['file_name'];
	      }
	    } 
	    else{
	      $m_slider_image = '';
	    }
	    $s_data = array(
	      "m_slider_title" => $this->input->post('m_slider_title'),
	      "m_slider_status" => $this->input->post('m_slider_status'),
	      "m_slider_image" => $m_slider_image,
	      "m_slider_added_on" => date('Y-m-d H:i'),
	    );
	    $set = $this->db->insert('master_slider_tbl',$s_data);
	    if(!empty($set)){
	    	$data['status'] = 'success';
	    	$data['message'] = 'Inserted Successfully!';
	    }
	    else{
	    	$data['status'] = 'fail';
	    	$data['message'] = 'Somthing went wrong!';
	    }
    	return json_encode($data);
  	}
  	public function update_slider(){
		$data = array();
		if (!empty($_FILES['m_slider_image']['name'])){
	      $config['file_name'] = $_FILES['m_slider_image']['name'];
	      $config['upload_path'] = 'uploads/slider';
	      $config['allowed_types'] = 'jpg|jpeg|png';
	      $config['remove_spaces'] = false;
	      //Load upload library and initialize configuration
	      $this->load->library('upload', $config);
	      $this->upload->initialize($config);
	      if ($this->upload->do_upload('m_slider_image')) {
	        $m_slider_image = $config['file_name'];
	      }
	    } 
	    else{
	      $m_slider_image = $this->input->post('m_slider_images');
	    }
	    $s_data = array(
	      "m_slider_title" => $this->input->post('m_slider_title'),
	      "m_slider_status" => $this->input->post('m_slider_status'),
	      "m_slider_image" => $m_slider_image,
	    );
	    $this->db->where('m_slider_id ',$this->input->post('m_slider_id'));
	    $set = $this->db->update('master_slider_tbl',$s_data);
	    if(!empty($set)){
	    	$data['status'] = 'success';
	    	$data['message'] = 'Update Successfully!';
	    }
	    else{
	    	$data['status'] = 'fail';
	    	$data['message'] = 'Somthing went wrong!';
	    }
    	return json_encode($data);
  	}
  	public function delete_slider(){
    	$this->db->where('m_slider_id', $this->input->post('delete_id'));
    	$set = $this->db->delete('master_slider_tbl');
    	if(!empty($set)){
	    	$data['status'] = 'success';
	    	$data['message'] = 'Deleted Successfully!';
	    }
	    else{
	    	$data['status'] = 'fail';
	    	$data['message'] = 'Somthing went wrong!';
	    }
	    return json_encode($data);
  	}
}
?>