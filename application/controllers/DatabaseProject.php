<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatabaseProject extends CI_Controller {

	public function index()
	{
        if($this->input->post('one')) {
            log_message('debug', 'test_one');
            redirect('/databaseProject/add_student');
        } else if ($this->input->post('two')) {
            redirect('/databaseProject/add_course');
        } else if ($this->input->post('three')) {
            redirect('/databaseProject/add_enrollment');
        } else if ($this->input->post('four')) {
            redirect('/databaseProject/view_students');
        } else if ($this->input->post('five')) {
            redirect('/databaseProject/view_courses_by_department');
        } else if ($this->input->post('six')) {
            redirect('/databaseProject/view_student_schedule');
        }

		$this->load->view('templates/header');
        $this->load->view('databaseProject/home');
        $this->load->view('templates/footer');
	}

    public function add_student()
    {
        if($this->input->post('home')) {
            redirect('/databaseProject');
        }
        $this->load->view('templates/header');
        $this->load->view('databaseProject/add_student');
        $this->load->view('templates/footer');
    }

    public function add_course()
    {
        if($this->input->post('home')) {
            redirect('/databaseProject');
        }
        $this->load->view('templates/header');
        $this->load->view('databaseProject/add_course');
        $this->load->view('templates/footer');
    }

    public function add_enrollment()
    {
        if($this->input->post('home')) {
            redirect('/databaseProject');
        }
        $this->load->view('templates/header');
        $this->load->view('databaseProject/add_enrollment');
        $this->load->view('templates/footer');
    }

    public function view_students()
    {
        if($this->input->post('home')) {
            redirect('/databaseProject');
        }
        $this->load->view('templates/header');
        $this->load->view('databaseProject/view_students');
        $this->load->view('templates/footer');
    }

    public function view_courses_by_department()
    {
        if($this->input->post('home')) {
            redirect('/databaseProject');
        }
        $this->load->view('templates/header');
        $this->load->view('databaseProject/view_courses_by_department');
        $this->load->view('templates/footer');
    }

    public function view_student_schedule()
    {
        if($this->input->post('home')) {
            redirect('/databaseProject');
        }
        $this->load->view('templates/header');
        $this->load->view('databaseProject/view_student_schedule');
        $this->load->view('templates/footer');
    }
}
 ?>
