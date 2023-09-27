<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
 class Officer extends CI_Controller{
   
    public function officer_list(){ $data = $this->login_details();
        $data['pagename'] = "All Officer";
        $data['from_date'] ='';
        $data['to_date'] ='';
        $data['from_date'] = $this->input->get('from_date');
        $data['to_date'] = $this->input->get('to_date');
        //echo "<pre>";print_r($data['all_value']);die();
        // $data['globel_branch'] = $this->Main_model->get_globel_branch();
        $data['Designation_dtl'] = $this->Main_model->get_desig_nation_list();
        $data['state_dtl'] = $this->Main_model->get_all_state_list();
        $data['mech_value'] = $this->Main_model->get_officer_list($data['from_date'],$data['to_date']);
        $this->load->view('officer_list', $data);
      
      }

      public function add_officer(){ 

       $data = $this->login_details();
        $data['id'] = $this->input->get('id');
        if(!empty($data['id'] )){ $data['pagename'] = "Edit Officer Details"; }else{
          $data['pagename'] = "Add Officer Details"; 
        }
        $data['state_dtl'] = $this->Main_model->get_all_state_list();
        $data['Designation_dtl'] = $this->Main_model->get_desig_nation_list();
        $data['edit_value'] = $this->Main_model->get_officer_dtl($data['id']);
       
      //  print_r($data['edit_value']);die();
        $this->load->view('add_officer', $data);
      }

      public function insert_officer_dtl(){
        if ($this->ajax_login() === false){ return; }
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          if($data = $this->Main_model->insert_officer_dtl()){
            $info = array( 'status'=>'success',
            'message'=>'Officer  has been Added successfully!'
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

       public function view_officer_dtl(){ $data = $this->login_details();
        $data['pagename'] = "Officer Details";
        $data['id'] = $this->input->get('id');
        $data['edit_value'] = $this->Main_model->get_officer_dtl($data['id']);
        // $data['get_a_student'] = $this->Main_model->get_a_student($data['edit_value'][0]->m_user_id);
        // $data['get_all_plan'] = $this->Main_model->get_all_plan();
       $this->load->view('view_officer', $data);
      
      }
      public function delete_officer_dtl(){ if ($this->ajax_login() === false) { return; }
          if($_SERVER["REQUEST_METHOD"] == "POST"){
            if($info = $this->Main_model->delete_officer_dtl()){
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

