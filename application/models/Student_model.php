<?php

class Student_model extends CI_Model {
    
    public function getAllStudents(){
        $students = $this->db->select('*')
        ->from('students')
        ->where('id >', 0) 
        ->order_by('id','desc')
        ->get()
        ->result();
        return $students;
    }

    public function storeStudentData($data){
        return $this->db->insert('students',$data);
    }

    public function deleteStudent($id){
        return $this->db->where("id",$id)
        ->delete('students');
    }

    public function getStudentById($id)
    {
        return $this->db->where('id', $id)
        ->get('students')
        ->row();
    }

    public function updateStudent($data,$id){
        return $this->db->where('id',$id)
        ->update('students',$data);
    }
}