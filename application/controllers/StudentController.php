<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Student_model');
        //$this->load->model(array("Student_model"));
        //$this->load->library('session');
    }

	public function index()
	{
        $data['students'] = $this->Student_model->getAllStudents();
		//$this->load->view('students/index',$data);

        /* using master layout */
        $data['title'] = "Student List";
        $data['content'] = "students/index";
        $this->load->view('layouts/master',$data);
	}

    public function create()
    {
        //$this->load->view('students/create');

        /* using master layout */
        $data['title'] = "Add Student";
        $data['content'] = "students/create";
        $this->load->view('layouts/master',$data);
    }

    public function store()
    {
        //request data
        $data = [
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone')
        ];
        
        $response = $this->Student_model->storeStudentData($data);
        if($response){
            $this->session->set_flashdata('success','Student data saved successfully.');
        }else{
            $this->session->set_flashdata('success','Failed saved data!');
        }
        redirect('student');
    }

    public function edit($id)
    {
        $data['student'] = $this->Student_model->getStudentById($id);
        //$this->load->view('students/edit',$data);

        /* using master layout */
        $data['title'] = "Edit Student";
        $data['content'] = "students/edit";
        $this->load->view("layouts/master",$data);
    }

    public function delete($id)
    {
        $this->Student_model->deleteStudent($id);
        redirect('student');
    }

    public function update()
    {
        $data = [
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone')
        ];
        $id = $this->input->post('student_id');
        $response = $this->Student_model->updateStudent($data,$id);
        if($response){
            $this->session->set_flashdata('success','Update data successfullty.');
        }else{
            $this->session->set_flashdata('error','Failed to update data');
        }
        redirect('student');
    }
}