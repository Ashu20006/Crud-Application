<?php
class User_model extends CI_model
{
    function create($formArray)
    {
        $this->db->insert('user',$formArray);
    }
    function all()
    {
        $result= $this->db->get('user')->result_array();
        return $result;
       
    }
    function getUser($userId)
    {
       $this->db->where('user_id',$userId);
       return $arr= $this->db->get('user')->row_array();
    }
    function updateUser($userId,$formArray)
    {
        $this->db->where('user_id',$userId);
        $this->db->update('user',$formArray);
    }
    function deleteUser($userId)
    {
        $this->db->where('user_id',$userId);
     $this->db->delete('user');
    }
}
?>