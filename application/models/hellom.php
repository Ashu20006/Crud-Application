<?php
class Hellom extends CI_model
{
    public function getdata()
    {
    // $this->load->database();
      $this->db->where('first_name','amit');
      
      $a =$this->db->get('users')->result_array();
      return $a;
       
       
      return ['abc'=>'abc value', 'xyz'=>'xyz value'];
    
    }

}


?>


