<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
 class Users extends CI_Controller{
   
    public function user_list(){ $data = $this->login_details();
        $data['pagename'] = "All User Details";
        $data['from_date'] ='';
        $data['to_date'] ='';
        $data['from_date'] = $this->input->get('from_date');
        $data['to_date'] = $this->input->get('to_date');
        //echo "<pre>";print_r($data['all_value']);die();
        // $data['globel_branch'] = $this->Main_model->get_globel_branch();
        $data['Designation_dtl'] = $this->Main_model->get_desig_nation_list();
        $data['city_dtl'] = $this->Main_model->get_all_city_list();
        $data['mech_value'] = $this->Main_model->get_user_list($data['from_date'],$data['to_date']);
        $this->load->view('user_list', $data);
      
      }

      public function add_user(){ 

       $data = $this->login_details();
        $data['id'] = $this->input->get('id');
        if(!empty($data['id'] )){ $data['pagename'] = "Edit User Details"; }else{
          $data['pagename'] = "Add User Details"; 
        }
        $data['city_dtl'] = $this->Main_model->get_all_city_list();
        $data['Designation_dtl'] = $this->Main_model->get_desig_nation_list();
        $data['edit_value'] = $this->Main_model->get_user_dtl($data['id']);
       
      //  print_r($data['edit_value']);die();
        $this->load->view('add_user', $data);
      }

      public function insert_user_dtl(){
        if ($this->ajax_login() === false){ return; }
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          if($data = $this->Main_model->insert_user_dtl()){
            $info = array( 'status'=>'success',
            'message'=>'User  has been Added successfully!'
            );
          }
          else{ 
            $info = array( 'status'=>'error',
              'message'=>'Some problem Occurred!! please try again'
            );
          } 
          echo json_encode($info);
        }
      }

       public function view_user_dtl(){ $data = $this->login_details();
        $data['pagename'] = "User Details";
        $data['id'] = $this->input->get('id');
        $data['edit_value'] = $this->Main_model->get_user_dtl($data['id']);
        // $data['get_a_student'] = $this->Main_model->get_a_student($data['edit_value'][0]->m_user_id);
        // $data['get_all_plan'] = $this->Main_model->get_all_plan();
       $this->load->view('view_user', $data);
      
      }
      public function delete_user_dtl(){ if ($this->ajax_login() === false) { return; }
          if($_SERVER["REQUEST_METHOD"] == "POST"){
            if($info = $this->Main_model->delete_user_dtl()){
            }
            else{ 
              $info = array( 'status'=>'error',
                'message'=>'Some Problem Occured'
              );
            }
            echo json_encode($info);
          }
        }

//==========================Details===========================//
protected function login_details(){ $this->require_login();
    $data['log_user_dtl'] = $this->Login_model->user_details();
    return $data;
  }
  //=========================/Details===========================//

 
  //======================Login Validation======================//
  protected function require_login(){
    $is_user_in = $this->session->userdata('is_user_in');
    if(isset($is_user_in) || $is_user_in == true){ return;
    } else { redirect('Login'); }
  }
  
  protected function ajax_login($nav_id=''){
    $is_user_in = $this->session->userdata('is_user_in');
    if(isset($is_user_in) || $is_user_in == true){ return true;
    } else { echo json_encode(array( 'status'=>'error', 'message'=>'You are not Logged in Now!! Please login again.')); return false; 
    }
  }
  //=====================/Login Validation======================//
}

?>

