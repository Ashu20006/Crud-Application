<?php
class Login_model extends CI_model
{
    public function isvalidate($username,$password)
    {
    $q=$this->db->where(['username'=>$username,'password'=>$password])
                ->get('users');
                
                // echo "<pre>";
                // print_r($q->result());
                // exit;

            if($q->num_rows())
            {
                return $q->row()->id;
            }
            else{
                return false;
            }

    }
    public function articleList()
    {
      $id=$this->session->userdata('id');
      $this->db->select('artical_tiitle')
           ->from('articals')
           ->where(['id'=>$id])
           ->get();
        print_r($q->result());
        exit;
          
    }
}


?>