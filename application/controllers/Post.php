<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
 class Post extends CI_Controller{
   
    public function post_list(){ $data = $this->login_details();
        $data['pagename'] = "All Post";
        $data['from_date'] ='';
        $data['to_date'] ='';
        $data['from_date'] = $this->input->get('from_date');
        $data['to_date'] = $this->input->get('to_date');
        $data['cat_list'] = $this->Main_model->get_cat_list();
        $data['state_dtl'] = $this->Main_model->get_all_state_list();
        $data['mech_value'] = $this->Main_model->get_post_list($data['from_date'],$data['to_date']);
        $this->load->view('post_list', $data);
      
      }

      public function add_post(){ 

       $data = $this->login_details();
        $data['id'] = $this->input->get('id');
        if(!empty($data['id'] )){ $data['pagename'] = "Edit Post Details"; }else{
          $data['pagename'] = "Add Post Details"; 
        }
        $data['state_dtl'] = $this->Main_model->get_all_state_list();
        $data['cat_list'] = $this->Main_model->get_cat_list();
        $data['edit_value'] = $this->Main_model->get_post_dtl($data['id']);
       
      //  print_r($data['edit_value']);die();
        $this->load->view('add_post', $data);
      }

      public function insert_post_dtl(){
        if ($this->ajax_login() === false){ return; }
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          if($data = $this->Main_model->insert_post_dtl()){
            $info = array( 'status'=>'success',
            'message'=>'Post  has been Added successfully!'
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

       public function view_post_dtl(){ $data = $this->login_details();
        $data['pagename'] = "Post Details";
        $data['id'] = $this->input->get('id');
        $data['edit_value'] = $this->Main_model->get_post_dtl($data['id']);
        // $data['get_a_student'] = $this->Main_model->get_a_student($data['edit_value'][0]->m_user_id);
        // $data['get_all_plan'] = $this->Main_model->get_all_plan();
       $this->load->view('view_post', $data);
      
      }
      public function delete_post_dtl(){ if ($this->ajax_login() === false) { return; }
          if($_SERVER["REQUEST_METHOD"] == "POST"){
            if($info = $this->Main_model->delete_post_dtl()){
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

