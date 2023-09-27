<?php date_default_timezone_set('Asia/Kolkata');

class Main_model extends CI_model{
    public function get_all_city_list()
    {
        $res = $this->db->get('master_city_tbl')->result();
        return $res;
    }  
    public function get_desig_nation_list()
    {
        $res = $this->db->get('master_designation_tbl')->result();
        return $res;
    }
    public function get_all_state_list()
    {
        $res = $this->db->get('master_state_tbl')->result();
        return $res;
    }

    public function get_shop_cat_list()
    {
        $res = $this->db->get('master_category_tbl')->result();
        return $res;
    }

    public function get_cat_list()
    {
        $res = $this->db->get('master_category_tbl')->result();
        return $res;
    }
    public function get_user_list($from_date,$to_date)
    {
        // if(!empty($branch)){
        //   $this->db->where('m_student_curr_branch',$branch);
        // }
        if(!empty($from_date) && !empty($to_date))
        {
            $this->db->where('DATE_FORMAT(m_user_added_on,"%Y-%m-%d")>=',$from_date);
            $this->db->where('DATE_FORMAT(m_user_added_on,"%Y-%m-%d")<=',$to_date);
        }
        $res = $this->db->get('master_user_tbl')->result();
        return $res;
    }



    public function insert_user_dtl(){
        $userid = $this->input->post('m_user_id');

            // for 1st image upload code.
            if(!empty($_FILES['m_user_image']['name'])){
              $config['file_name'] = $_FILES['m_user_image']['name'];
              $config['upload_path'] = 'uploads/user';
              $config['allowed_types'] = 'jpg|jpeg|png';
              $config['remove_spaces'] = TRUE;
              $config['file_name'] = $_FILES['m_user_image']['name'];
              //Load upload library and initialize configuration
              $this->load->library('upload',$config);
              $this->upload->initialize($config);
              if($this->upload->do_upload('m_user_image')){
                $uploadData = $this->upload->data();  
                if (!empty($update_data['m_user_image'])) { 
                  if(file_exists($config['m_user_image'].$update_data['m_user_image'])){
                  unlink($config['upload_path'].$update_data['m_user_image']); /* deleting Image */
                  } 
                }
                $m_user_image = $uploadData['file_name'];
              }
            }
            else{
    $m_user_image = $this->input->post('m_user_image1');
  }
  $data = array(
    "m_user_name" => $this->input->post('m_user_name'),
    "m_user_mobile" => $this->input->post('m_user_mobile'),
    "m_user_image" => $m_user_image,
    "m_user_city" => $this->input->post('m_user_city'),
    // "m_student_area" => $this->input->post('m_student_area'),
    "m_user_email" => $this->input->post('m_user_email'),
    "m_user_address" => $this->input->post('m_user_address'),
    "m_user_gender" => $this->input->post('m_user_gender'),
    "m_user_des" => $this->input->post('m_user_des'),
    "m_user_added_on"=>date('Y-m-d H:i:s'),
    "m_user_status" => $this->input->post('m_user_status'),
     
  );
if(!empty($userid)){
$this->db->where('m_user_id',$userid)->update('master_user_tbl', $data);
}else{
$this->db->insert('master_user_tbl', $data);
}
 
  return true;
}


public function get_user_dtl($id){
  $this->db->select('*');
  $this->db->where('m_user_id', $id);
   // $this->db->join('master_state_tbl','master_state_tbl.m_state_id = master_state_tbl.m_student_state','left');
  $this->db->join('master_city_tbl','master_city_tbl.m_city_id = master_user_tbl.m_user_city','left');
  $this->db->join('master_designation_tbl','master_designation_tbl.m_designation_id = master_user_tbl.m_user_des','left');
  $res = $this->db->get('master_user_tbl')->result();
//  echo "<pre>";print_r($res);die();
  return $res;
}

public function delete_user_dtl(){
  $this->db->where('m_user_id', $this->input->post('delete_id'));
  $this->db->delete('master_user_tbl');
  return array( 'status'=>'success',
    'message'=>'Data has been Deleted Successfully!'
  );
}



  //=================== shop section==============================//
  public function get_shop_list($from_date,$to_date){
    // if(!empty($branch)){
    //   $this->db->where('m_student_curr_branch',$branch);
    // }
    if(!empty($from_date) && !empty($to_date)){
      $this->db->where('DATE_FORMAT(m_shop_added_on,"%Y-%m-%d")>=',$from_date);
      $this->db->where('DATE_FORMAT(m_shop_added_on,"%Y-%m-%d")<=',$to_date);
    }
    $res = $this->db->get('master_shop_tbl')->result();
    return $res;
  }

  public function insert_shop_dtl(){
   $shop_day = $this->input->post('shop1');

   $sdata  = array();

   //exit(0);
  
  $shopid = $this->input->post('m_shop_id');
 
   // for 1st image upload code.
    if(!empty($_FILES['m_shop_adhar_f']['name'])){
    $config['file_name'] = $_FILES['m_shop_adhar_f']['name'];
    $config['upload_path'] = 'uploads/shop';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['remove_spaces'] = TRUE;
    $config['file_name'] = $_FILES['m_shop_adhar_f']['name'];
    //Load upload library and initialize configuration
    $this->load->library('upload',$config);
    $this->upload->initialize($config);
    if($this->upload->do_upload('m_shop_adhar_f')){
      $uploadData = $this->upload->data();  
      if (!empty($update_data['m_shop_adhar_f'])) { 
        if(file_exists($config['m_shop_adhar_f'].$update_data['m_shop_adhar_f'])){
        unlink($config['upload_path'].$update_data['m_shop_adhar_f']); /* deleting Image */
        } 
      }
      $m_shop_adhar_f = $uploadData['file_name'];
    }
  }
  else{
    $m_shop_adhar_f = $this->input->post('m_shop_adhar_f1');
  }

   // for 1st adhar font image upload code.
    if(!empty($_FILES['m_shop_image']['name'])){
    $config['file_name'] = $_FILES['m_shop_image']['name'];
    $config['upload_path'] = 'uploads/shop';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['remove_spaces'] = TRUE;
    $config['file_name'] = $_FILES['m_shop_image']['name'];
    //Load upload library and initialize configuration
    $this->load->library('upload',$config);
    $this->upload->initialize($config);
    if($this->upload->do_upload('m_shop_image')){
      $uploadData = $this->upload->data();  
      if (!empty($update_data['m_shop_image'])) { 
        if(file_exists($config['m_shop_image'].$update_data['m_shop_image'])){
        unlink($config['upload_path'].$update_data['m_shop_image']); /* deleting Image */
        } 
      }
      $m_shop_image = $uploadData['file_name'];
    }
  }
  else{
    $m_shop_image = $this->input->post('m_shop_image1');
  }
   // for 1st adhar back image upload code.
    if(!empty($_FILES['m_shop_adhar_b']['name'])){
    $config['file_name'] = $_FILES['m_shop_adhar_b']['name'];
    $config['upload_path'] = 'uploads/shop';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['remove_spaces'] = TRUE;
    $config['file_name'] = $_FILES['m_shop_adhar_b']['name'];
    //Load upload library and initialize configuration
    $this->load->library('upload',$config);
    $this->upload->initialize($config);
    if($this->upload->do_upload('m_shop_adhar_b')){
      $uploadData = $this->upload->data();  
      if (!empty($update_data['m_shop_adhar_b'])) { 
        if(file_exists($config['m_shop_adhar_b'].$update_data['m_shop_adhar_b'])){
        unlink($config['upload_path'].$update_data['m_shop_adhar_b']); /* deleting Image */
        } 
      }
      $m_shop_adhar_b = $uploadData['file_name'];
    }
  }
  else{
    $m_shop_adhar_b = $this->input->post('m_shop_adhar_b1');
  }



   // for 1st pan image upload code.
    if(!empty($_FILES['m_shop_pan_img']['name'])){
    $config['file_name'] = $_FILES['m_shop_pan_img']['name'];
    $config['upload_path'] = 'uploads/shop';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['remove_spaces'] = TRUE;
    $config['file_name'] = $_FILES['m_shop_pan_img']['name'];
    //Load upload library and initialize configuration
    $this->load->library('upload',$config);
    $this->upload->initialize($config);
    if($this->upload->do_upload('m_shop_pan_img')){
      $uploadData = $this->upload->data();  
      if (!empty($update_data['m_shop_pan_img'])) { 
        if(file_exists($config['m_shop_pan_img'].$update_data['m_shop_pan_img'])){
        unlink($config['upload_path'].$update_data['m_shop_pan_img']); /* deleting Image */
        } 
      }
      $m_shop_pan_img = $uploadData['file_name'];
    }
  }
  else{
    $m_shop_pan_img = $this->input->post('m_shop_pan_img1');
  }
   //$days = $this->input->post('shop1');

    //$new_day = implode(",",$days);

  $data = array(
    "m_shop_name" => $this->input->post('m_shop_name'),
    "m_shop_contact" => $this->input->post('m_shop_contact'),
    "m_shop_alt_contact" => $this->input->post('m_shop_alt_contact'),
    "m_shop_image" => $m_shop_image,
     "m_shop_city" => $this->input->post('m_shop_city'),
    "m_shop_state" => $this->input->post('m_shop_state'),
    "m_shop_email" => $this->input->post('m_shop_email'),
    "m_shop_address" => $this->input->post('m_shop_address'),
     "m_shop_pincode" => $this->input->post('m_shop_pincode'),
    "m_shop_category" => $this->input->post('m_shop_category'),
     // "m_shop1" => $this->input->post('shop1'),
    "m_shop_adhar_no" => $this->input->post('m_shop_adhar_no'),
    " m_shop_pan_no" => $this->input->post('m_shop_pan_no'),
    "m_shop_adhar_f" => $m_shop_adhar_f,
    "m_shop_adhar_b" => $m_shop_adhar_b,
    "m_shop_pan_img" => $m_shop_pan_img,
     
    "m_shop_open" => $this->input->post('m_shop_open_time'),
    "m_shop_close" => $this->input->post('m_shop_close_time'),
    "m_shop_added_on"=>date('Y-m-d H:i:s'),
    "m_shop_status" => $this->input->post('m_shop_status'),
     
  );
  // print_r($data); die();
  $this->db->insert('master_shop_tbl', $data);
  $last_id = $this->db->insert_id();
   // print_r($data); die();


  if(!empty($shop_day)){
    foreach($shop_day as $s_day){
      $upddata = array(
        "m_working_shop" => $last_id,
        "m_working_shop_day" => $s_day,
        "created_at" =>date('Y-m-d H:i')
      );
      $this->db->insert('master_shop_working_day',$upddata);
    }
  }

/*if(!empty($shopid)){
  $this->db->where('m_shop_id',$shopid)->update('master_shop_tbl', $data);
}else{
  $this->db->insert('master_shop_tbl', $data);
}*/
 
  return true;
}

//=============== update shop =======================///
public function update_shop(){
//=============ADHAR FRONT IMAGE====================//
if(!empty($_FILES['m_shop_adhar_f']['name'])){
    $config['file_name'] = $_FILES['m_shop_adhar_f']['name'];
    $config['upload_path'] = 'uploads/shop';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['remove_spaces'] = TRUE;
    $config['file_name'] = $_FILES['m_shop_adhar_f']['name'];
    //Load upload library and initialize configuration
    $this->load->library('upload',$config);
    $this->upload->initialize($config);
    if($this->upload->do_upload('m_shop_adhar_f')){
      $uploadData = $this->upload->data();  
      if (!empty($update_data['m_shop_adhar_f'])) { 
        if(file_exists($config['m_shop_adhar_f'].$update_data['m_shop_adhar_f'])){
        unlink($config['upload_path'].$update_data['m_shop_adhar_f']); /* deleting Image */
        } 
      }
      $m_shop_adhar_f = $uploadData['file_name'];
    }
  }
  else{
    $m_shop_adhar_f = $this->input->post('m_shop_adhar_f1');
  }
//=============ADHAR BACK IMAGE====================//
if(!empty($_FILES['m_shop_adhar_b']['name'])){
    $config['file_name'] = $_FILES['m_shop_adhar_b']['name'];
    $config['upload_path'] = 'uploads/shop';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['remove_spaces'] = TRUE;
    $config['file_name'] = $_FILES['m_shop_adhar_b']['name'];
    //Load upload library and initialize configuration
    $this->load->library('upload',$config);
    $this->upload->initialize($config);
    if($this->upload->do_upload('m_shop_adhar_b')){
      $uploadData = $this->upload->data();  
      if (!empty($update_data['m_shop_adhar_b'])) { 
        if(file_exists($config['m_shop_adhar_b'].$update_data['m_shop_adhar_b'])){
        unlink($config['upload_path'].$update_data['m_shop_adhar_b']); /* deleting Image */
        } 
      }
      $m_shop_adhar_b = $uploadData['file_name'];
    }
  }
  else{
    $m_shop_adhar_b = $this->input->post('m_shop_adhar_b1');
  }

//=============PAN IMAGE====================//
 if(!empty($_FILES['m_shop_pan_img']['name'])){
    $config['file_name'] = $_FILES['m_shop_pan_img']['name'];
    $config['upload_path'] = 'uploads/shop';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['remove_spaces'] = TRUE;
    $config['file_name'] = $_FILES['m_shop_pan_img']['name'];
    //Load upload library and initialize configuration
    $this->load->library('upload',$config);
    $this->upload->initialize($config);
    if($this->upload->do_upload('m_shop_pan_img')){
      $uploadData = $this->upload->data();  
      if (!empty($update_data['m_shop_pan_img'])) { 
        if(file_exists($config['m_shop_pan_img'].$update_data['m_shop_pan_img'])){
        unlink($config['upload_path'].$update_data['m_shop_pan_img']); /* deleting Image */
        } 
      }
      $m_shop_pan_img = $uploadData['file_name'];
    }
  }
  else{
    $m_shop_pan_img = $this->input->post('m_shop_pan_img1');
  }

      $data = array();
      $s_data = array(
        "m_shop_adhar_no" => $this->input->post('m_shop_adhar_no'),
        "m_shop_adhar_f" =>$m_shop_adhar_f,
        "m_shop_adhar_b" =>$m_shop_adhar_b,
        "m_shop_pan_no" => $this->input->post('m_shop_pan_no'),
        "m_shop_pan_img" => $m_shop_pan_img,
      );
      $this->db->where('m_shop_id',$this->input->post('m_shop_id'));
      $set = $this->db->update('master_shop_tbl',$s_data);
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

//============ SHOP UPDATE CLOSE=====================//


public function get_shop_dtl($id){
  $this->db->select('*');
  $this->db->where('m_shop_id', $id);
   $this->db->join('master_category_tbl','master_category_tbl.m_category_id = master_shop_tbl.m_shop_category','left');
  $this->db->join('master_state_tbl','master_state_tbl.m_state_id = master_shop_tbl.m_shop_state','left');
   $this->db->join('master_city_tbl','master_city_tbl.m_city_id = master_shop_tbl.m_shop_city','left');
  $res = $this->db->get('master_shop_tbl')->result();
  //  echo "<pre>";print_r($res);die();
  return $res;
  }

  public function delete_shop_dtl(){
  $this->db->where('m_shop_id', $this->input->post('delete_id'));
  $this->db->delete('master_shop_tbl');
  return array( 'status'=>'success',
    'message'=>'Data has been Deleted Successfully!'
  );
 }


  public function getContactById1($m_shop_id)
  {

    // print_r($id);die();
     $shop_contact = $this->db->select('m_shop_contact,m_shop_id')->where('m_shop_contact',$m_shop_id)->get('master_shop_tbl')->result();
         
      return $shop_contact;
  }
  public function getshopNameById1($m_shop_id)
  {
     $m_shop_name = $this->db->select('m_shop_name,m_shop_id')->where('m_shop_name',$m_shop_id)->get('master_shop_tbl')->result();
         
      return $m_shop_name;
  }

//-------- category start -------------//



public function get_category_list($from_date,$to_date){
    // if(!empty($branch)){
    //   $this->db->where('m_student_curr_branch',$branch);
    // }
    if(!empty($from_date) && !empty($to_date)){
      $this->db->where('DATE_FORMAT(m_category_added_on,"%Y-%m-%d")>=',$from_date);
      $this->db->where('DATE_FORMAT(m_category_added_on,"%Y-%m-%d")<=',$to_date);
    }
    $res = $this->db->get('master_category_tbl')->result();
    return $res;
  }



public function insert_category_dtl(){

  $categoryid = $this->input->post('m_category_id');
   // for 1st image upload code.
    if(!empty($_FILES['m_category_image']['name'])){
    $config['file_name'] = $_FILES['m_category_image']['name'];
    $config['upload_path'] = 'uploads/category';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['remove_spaces'] = TRUE;
    $config['file_name'] = $_FILES['m_category_image']['name'];
    //Load upload library and initialize configuration
    $this->load->library('upload',$config);
    $this->upload->initialize($config);
    if($this->upload->do_upload('m_category_image')){
      $uploadData = $this->upload->data();  
      if (!empty($update_data['m_category_image'])) { 
        if(file_exists($config['m_category_image'].$update_data['m_category_image'])){
        unlink($config['upload_path'].$update_data['m_category_image']); /* deleting Image */
        } 
      }
      $m_category_image = $uploadData['file_name'];
    }
  }
  else{
    $m_category_image = $this->input->post('m_category_image1');
  }
$data = array(
    "m_category_title" => $this->input->post('m_category_title'),
    "m_category_image" => $m_category_image,
    "m_category_des" => $this->input->post('m_category_des'),
    "m_category_added_on"=>date('Y-m-d H:i:s'),
    "m_category_status" => $this->input->post('m_category_status'),
     
  );
   // print_r($data); die();
if(!empty($categoryid)){
$this->db->where('m_category_id',$categoryid)->update('master_category_tbl', $data);
}else{
$this->db->insert('master_category_tbl', $data);
}
 
  return true;
}

 public function get_category_dtl($id){
  $this->db->select('*');
  $this->db->where('m_category_id', $id);
  // $this->db->join('master_state_tbl','master_state_tbl.m_state_id = master_state_tbl.m_student_state','left');
  // $this->db->join('master_city_tbl','master_city_tbl.m_city_id = master_user_tbl.m_user_city','left');
  $res = $this->db->get('master_category_tbl')->result();
  //  echo "<pre>";print_r($res);die();
  return $res;
  }

  public function delete_category_dtl(){
  $this->db->where('m_category_id', $this->input->post('delete_id'));
  $this->db->delete('master_category_tbl');
  return array( 'status'=>'success',
    'message'=>'Data has been Deleted Successfully!'
  );
 }
//-------- category end -------------//

   //------- designation -----====//



public function get_designation_list($from_date,$to_date){
    // if(!empty($branch)){
    //   $this->db->where('m_student_curr_branch',$branch);
    // }
    if(!empty($from_date) && !empty($to_date)){
      $this->db->where('DATE_FORMAT(m_designation_added_on,"%Y-%m-%d")>=',$from_date);
      $this->db->where('DATE_FORMAT(m_designation_added_on,"%Y-%m-%d")<=',$to_date);
    }
    $res = $this->db->get('master_designation_tbl')->result();
    return $res;
  }

public function insert_designation_dtl(){

  $designationid = $this->input->post('m_designation_id');
   // for 1st image upload code.
    // if(!empty($_FILES['m_category_image']['name'])){
    // $config['file_name'] = $_FILES['m_category_image']['name'];
    // $config['upload_path'] = 'uploads/category';
    // $config['allowed_types'] = 'jpg|jpeg|png';
    // $config['remove_spaces'] = TRUE;
    // $config['file_name'] = $_FILES['m_category_image']['name'];
    // //Load upload library and initialize configuration
    // $this->load->library('upload',$config);
    // $this->upload->initialize($config);
    // if($this->upload->do_upload('m_category_image')){
    //   $uploadData = $this->upload->data();  
    //   if (!empty($update_data['m_category_image'])) { 
    //     if(file_exists($config['m_category_image'].$update_data['m_category_image'])){
  //       unlink($config['upload_path'].$update_data['m_category_image']); /* deleting Image */
  //       } 
  //     }
  //     $m_category_image = $uploadData['file_name'];
  //   }
  // }
  // else{
  //   $m_category_image = $this->input->post('m_category_image1');
  // }
$data = array(
    "m_designation_title" => $this->input->post('m_designation_title'),
    // "m_category_image" => $m_category_image,
    // "m_category_des" => $this->input->post('m_category_des'),
    "m_designation_added_on"=>date('Y-m-d H:i:s'),
    "m_designation_status" => $this->input->post('m_designation_status'),
     
  );
   // print_r($data); die();
if(!empty($designationid)){
$this->db->where('m_designation_id',$designationid)->update('master_designation_tbl', $data);
}else{
$this->db->insert('master_designation_tbl', $data);
}
 
  return true;
}

 public function get_designation_dtl($id){
  $this->db->select('*');
  $this->db->where('m_designation_id', $id);
  // $this->db->join('master_state_tbl','master_state_tbl.m_state_id = master_state_tbl.m_student_state','left');
  // $this->db->join('master_city_tbl','master_city_tbl.m_city_id = master_user_tbl.m_user_city','left');
  $res = $this->db->get('master_designation_tbl')->result();
  //  echo "<pre>";print_r($res);die();
  return $res;
  }

  public function delete_designation_dtl(){
  $this->db->where('m_designation_id', $this->input->post('delete_id'));
  $this->db->delete('master_designation_tbl');
  return array( 'status'=>'success',
    'message'=>'Data has been Deleted Successfully!'
  );
 }
//-------- officer end -------------//


    public function get_officer_list($from_date,$to_date)
    {
        // if(!empty($branch)){
        //   $this->db->where('m_student_curr_branch',$branch);
        // }
        if(!empty($from_date) && !empty($to_date))
        {
            $this->db->where('DATE_FORMAT(m_officer_added_on,"%Y-%m-%d")>=',$from_date);
            $this->db->where('DATE_FORMAT(m_officer_added_on,"%Y-%m-%d")<=',$to_date);
        }
        $res = $this->db->get('master_officer_tbl')->result();
        return $res;
    }

    public function insert_officer_dtl(){
        $officerid = $this->input->post('m_officer_id');

            // for 1st image upload code.
            if(!empty($_FILES['m_officer_image']['name'])){
              $config['file_name'] = $_FILES['m_officer_image']['name'];
              $config['upload_path'] = 'uploads/officer';
              $config['allowed_types'] = 'jpg|jpeg|png';
              $config['remove_spaces'] = TRUE;
              $config['file_name'] = $_FILES['m_officer_image']['name'];
              //Load upload library and initialize configuration
              $this->load->library('upload',$config);
              $this->upload->initialize($config);
              if($this->upload->do_upload('m_officer_image')){
                $uploadData = $this->upload->data();  
                if (!empty($update_data['m_officer_image'])) { 
                  if(file_exists($config['m_officer_image'].$update_data['m_officer_image'])){
                  unlink($config['upload_path'].$update_data['m_officer_image']); /* deleting Image */
                  } 
                }
                $m_officer_image = $uploadData['file_name'];
              }
            }
            else{
    $m_officer_image = $this->input->post('m_officer_image1');
  }
  $data = array(
    "m_officer_name" => $this->input->post('m_officer_name'),
    "m_officer_mobile" => $this->input->post('m_officer_mobile'),
    "m_officer_image" => $m_officer_image,
    "m_officer_state" => $this->input->post('m_officer_state'),
    // "m_student_area" => $this->input->post('m_student_area'),
    "m_officer_email" => $this->input->post('m_officer_email'),
    "m_officer_address" => $this->input->post('m_officer_address'),
    "m_officer_gender" => $this->input->post('m_officer_gender'),
    "m_officer_des" => $this->input->post('m_officer_des'),
    "m_officer_added_on"=>date('Y-m-d H:i:s'),
    "m_officer_status" => $this->input->post('m_officer_status'),
     
  );
if(!empty($officerid)){
$this->db->where('m_officer_id',$officerid)->update('master_officer_tbl', $data);
}else{
$this->db->insert('master_officer_tbl', $data);
}
 
  return true;
}


public function get_officer_dtl($id){
  $this->db->select('*');
  $this->db->where('m_officer_id', $id);
   // $this->db->join('master_state_tbl','master_state_tbl.m_state_id = master_state_tbl.m_student_state','left');
  $this->db->join('master_state_tbl','master_state_tbl.m_state_id = master_officer_tbl.m_officer_state','left');
  $this->db->join('master_designation_tbl','master_designation_tbl.m_designation_id = master_officer_tbl.m_officer_des','left');
  $res = $this->db->get('master_officer_tbl')->result();
//  echo "<pre>";print_r($res);die();
  return $res;
}


public function delete_officer_dtl(){
  $this->db->where('m_officer_id', $this->input->post('delete_id'));
  $this->db->delete('master_officer_tbl');
  return array( 'status'=>'success',
    'message'=>'Data has been Deleted Successfully!'
  );
}



// -------- Post 

    public function get_post_list($from_date,$to_date)
    {
        $this->db->select('master_post_tbl.*,master_category_tbl.m_category_title as category_name');
        if(!empty($from_date) && !empty($to_date))
        {
            $this->db->where('DATE_FORMAT(m_post_added_on,"%Y-%m-%d")>=',$from_date);
            $this->db->where('DATE_FORMAT(m_post_added_on,"%Y-%m-%d")<=',$to_date);
        }
        $this->db->join('master_category_tbl','master_category_tbl.m_category_id = master_post_tbl.category','left');
        $res = $this->db->get('master_post_tbl')->result();

        return $res;
    }

    public function insert_post_dtl(){
        $postid = $this->input->post('id');

            // for 1st image upload code.
            if(!empty($_FILES['m_post_image']['name'])){
              $config['file_name'] = $_FILES['m_post_image']['name'];
              $config['upload_path'] = 'uploads/post';
              $config['allowed_types'] = 'jpg|jpeg|png';
              $config['remove_spaces'] = TRUE;
              $config['file_name'] = $_FILES['m_post_image']['name'];
              //Load upload library and initialize configuration
              $this->load->library('upload',$config);
              $this->upload->initialize($config);
              if($this->upload->do_upload('m_post_image')){
                $uploadData = $this->upload->data();  
                if (!empty($update_data['m_post_image'])) { 
                  if(file_exists($config['m_post_image'].$update_data['m_post_image'])){
                  unlink($config['upload_path'].$update_data['m_post_image']); /* deleting Image */
                  } 
                }
                $m_post_image = $uploadData['file_name'];
              }
            }
            else{
    $m_post_image = $this->input->post('m_post_image1');
  }
  $data = array(
    "category" => $this->input->post('category'),
    "title" => $this->input->post('title'),
    "image" => $m_post_image,
    "slug" => $this->input->post('slug'),
    "visibility" => $this->input->post('visibility'),
    "right_column" => $this->input->post('right_column'),
    "addtoslider" => $this->input->post('addtoslider'),
    "created_date" => date("Y-m-d", strtotime($this->input->post('created_date'))),
    "comments" => $this->input->post('comments'),
    "mainhead" => $this->input->post('mainhead'),
    "description" => $this->input->post('description'),
    "m_post_added_on"=>date('Y-m-d H:i:s'),
    "m_post_status" => $this->input->post('m_post_status'),
     
  );
if(!empty($postid)){
$this->db->where('id',$postid)->update('master_post_tbl', $data);
}else{
$this->db->insert('master_post_tbl', $data);
}
 
  return true;
}


public function get_post_dtl($id){
  $this->db->select('*');
  $this->db->where('id', $id);
  $this->db->join('master_category_tbl','master_category_tbl.m_category_id = master_post_tbl.category','left');
  $res = $this->db->get('master_post_tbl')->result();
//  echo "<pre>";print_r($res);die();
  return $res;
}


public function delete_post_dtl(){
  $this->db->where('id', $this->input->post('delete_id'));
  $this->db->delete('master_post_tbl');
  return array( 'status'=>'success',
    'message'=>'Data has been Deleted Successfully!'
  );
}
}
