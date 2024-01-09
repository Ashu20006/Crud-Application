<?php
class My_controller extends CI_controller
{
    public function index()
    {
        
        $this->load->view('users/articallist');
    }
    
}

?>