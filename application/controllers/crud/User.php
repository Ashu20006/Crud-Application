<?php
class User extends CI_controller
{
   public function __construct()
   {
       parent::__construct();

       $this->load->model('crud_model/User_model');
   }
 function create()
 {
    
    $this->form_validation->set_rules('user','Name','required');
    $this->form_validation->set_rules('mail','Email','required');
   if($this->form_validation->run())
    {
     $formArray=array();
     $formArray['name']=$this->input->post('user'); 
     $formArray['email']=$this->input->post('mail');
     $formArray['created_at']=date('y-m-d');
     $this->User_model->create($formArray);
     $this->session->set_flashdata('success','Record added successfully!');
    //  redirect(base_url().'index.php/crud/user/index');
     return redirect('crud/user/index');
   
     }
    else{
    $this->load->view('crud_view/create');
    }
}
   
  function index()
   {
   $usevar= $this->User_model->all();
   $data= array();
    $data['users']= $usevar;
    $this->load->view('crud_view/list',$data);
   
   }
    function edit($userid)
   {
      $user= $this->User_model->getUser($userid);
      $data=array();
      $data['user']=$user;

      $this->form_validation->set_rules('user','Name','required');
     $this->form_validation->set_rules('mail','Email','required|valid_email');
       if($this->form_validation->run())
   
      {
         $formArray =array();
         $formArray['name']=$this->input->post('user');
         $formArray['email']=$this->input->post('mail');
         $this->User_model->updateUser($userid,$formArray);
         $this->session->set_flashdata('success','Record Updated successfully!');
         return redirect('crud/user/index');
      }
      else{
    $this->load->view('crud_view/edit',$data);
      }
   
   }
   public function delete($userId)
   {
    $user=$this->User_model->getUser($userId);
    if(empty($user))
    {
      $this->session->set_flashdata('failure','Record not found in database !');
      return redirect('crud/user/index');
    }
    else{
      $this->User_model->deleteUser($userId);
      $this->session->set_flashdata('success','Record Updated successfully!');
      return redirect('crud/user/index');
    }
   }
}

?>