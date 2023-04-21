<?php defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Shops extends CI_Controller
{
    
  public function shop_list(){ $data = $this->login_details();
        $data['pagename'] = "All shop Details";
        $data['from_date'] ='';
        $data['to_date'] ='';
        $data['from_date'] = $this->input->get('from_date');
        $data['to_date'] = $this->input->get('to_date');
        //echo "<pre>";print_r($data['all_value']);die();
        // $data['globel_branch'] = $this->Main_model->get_globel_branch();
        $data['state_dtl'] = $this->Main_model->get_all_state_list();
        $data['city_dtl'] = $this->Main_model->get_all_city_list();
        $data['mech_value'] = $this->Main_model->get_shop_list($data['from_date'],$data['to_date']);
        $this->load->view('shop_list', $data);
      
      }

     public function add_shop(){ 

       $data = $this->login_details();
        $data['id'] = $this->input->get('id');
        if(!empty($data['id'] )){ $data['pagename'] = "Edit shop Details"; }else{
          $data['pagename'] = "Add shop Details"; 
        }
        $data['category_dtl'] = $this->Main_model->get_shop_cat_list();
        $data['city_dtl'] = $this->Main_model->get_all_city_list();
        $data['state_dtl'] = $this->Main_model->get_all_state_list();
        //$data['edit_value'] = $this->Main_model->get_shop_dtl($data['id']);
       
      //  print_r($data['edit_value']);die();
        $this->load->view('add_shop', $data);
      }

public function edit_shop(){ 

       $data = $this->login_details();
        $data['id'] = $this->input->get('id');
        if(!empty($data['id'] )){ $data['pagename'] = "Edit shop Details"; }else{
          $data['pagename'] = "Add shop Details"; 
        }
        $data['category_dtl'] = $this->Main_model->get_shop_cat_list();
        $data['city_dtl'] = $this->Main_model->get_all_city_list();
        $data['state_dtl'] = $this->Main_model->get_all_state_list();
        $data['edit_value'] = $this->Main_model->get_shop_dtl($data['id']);
       
      //  print_r($data['edit_value']);die();
        $this->load->view('edit_shop', $data);
      }

    public function insert_shop_dtl(){
        if ($this->ajax_login() === false){ return; }
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          if($data = $this->Main_model->insert_shop_dtl()){
            $info = array( 'status'=>'success',
            'message'=>'shop  has been Added successfully!'
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

      public function view_shop_dtl(){ $data = $this->login_details();
        $data['pagename'] = "User Details";
        $data['id'] = $this->input->get('id');
        $data['edit_value'] = $this->Main_model->get_shop_dtl($data['id']);
        // $data['get_a_student'] = $this->Main_model->get_a_student($data['edit_value'][0]->m_user_id);
        // $data['get_all_plan'] = $this->Main_model->get_all_plan();
       $this->load->view('view_shop', $data);
      
      }
      public function delete_shop_dtl(){ if ($this->ajax_login() === false) { return; }
          if($_SERVER["REQUEST_METHOD"] == "POST"){
            if($info = $this->Main_model->delete_shop_dtl()){
            }
            else{ 
              $info = array( 'status'=>'error',
                'message'=>'Some Problem Occured'
              );
            }
            echo json_encode($info);
          }
      }

      public function update_shop(){
    echo $this->Main_model->update_shop();
  }

       public function getContactById()
       {

         $m_shop_id = $this->input->post('m_shop_contact');
         $m_shop_contact= $this->Main_model->getContactById1($m_shop_id);
         if ($m_shop_contact) {
             echo json_encode([
                          'status'=>true,
                          'message'=>'Contect number already exits'
             ]);
         }else{
            echo json_encode([
                          'status'=>false,
                          'message'=>'Contect number not exits'
             ]);
         }
       }
       public function getShopNameById()
       {

         $m_shop_id = $this->input->post('m_shop_name');
         $m_shop_name= $this->Main_model->getshopNameById1($m_shop_id);
         if ($m_shop_name) {
             echo json_encode([
                          'status'=>true,
                          'message'=>'Contect number already exits'
             ]);
         }else{
            echo json_encode([
                          'status'=>false,
                          'message'=>'Contect number not exits'
             ]);
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