<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatabaseProject extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('databaseProject/database_model');
    }

	public function index()
	{
        if($this->input->post('add_student')) {
            redirect('/databaseProject/add_student');
        } else if ($this->input->post('add_course')) {
            redirect('/databaseProject/add_course');
        } else if ($this->input->post('add_enrollment')) {
            redirect('/databaseProject/add_enrollment');
        } else if ($this->input->post('view_students')) {
            redirect('/databaseProject/view_students');
        } else if ($this->input->post('view_courses_by_department')) {
            redirect('/databaseProject/view_courses_by_department');
        } else if ($this->input->post('view_student_schedule')) {
            redirect('/databaseProject/view_student_schedule');
        }

        $data['title'] = 'Home';
		$this->load->view('templates/header', $data);
        $this->load->view('databaseProject/home');
        $this->load->view('templates/footer');
	}

    public function add_student()
    {
        $data['title'] = 'Add New Student';
        $data['status'] = '';

        if ($this->input->post('home')) {
            redirect('/databaseProject');
        }
        if ($this->input->post('submit')) {
            $new_id = $this->input->post('new_student_id');
            $new_name = $this->input->post('new_student_name');
            $new_major = $this->input->post('new_student_major');
            $data['new_student_data'] = array (
                'studentID'     =>      (!empty($new_id)    ? $new_id       : NULL),
                'studentName'   =>      (!empty($new_name)  ? $new_name     : NULL),
                'major'         =>      (!empty($new_major) ? $new_major    : NULL)
            );
            $data['status'] = $this->database_model->insert_student($data['new_student_data']);
        }

        $this->load->view('templates/header', $data);
        $this->load->view('databaseProject/add_student', $data);
        $this->load->view('templates/footer');
    }

    public function add_course()
    {
        $data['title'] = 'Add New Course';
        $data['status'] = '';

        if($this->input->post('home')) {
            redirect('/databaseProject');
        }
        if ($this->input->post('submit')) {
            $new_department_code = $this->input->post('new_department_code');
            $new_course_number = $this->input->post('new_course_number');
            $new_course_title = $this->input->post('new_course_title');
            $new_credit_hours = $this->input->post('new_credit_hours');
            $data['new_course_data'] = array (
                'deptCode'      =>      (!empty($new_department_code)   ? $new_department_code      : NULL),
                'courseNum'     =>      (!empty($new_course_number)     ? $new_course_number        : NULL),
                'title'         =>      (!empty($new_course_title)      ? $new_course_title         : NULL),
                'creditHours'   =>      (!empty($new_credit_hours)      ? $new_credit_hours         : NULL)
            );
            $data['status'] = $this->database_model->insert_course($data['new_course_data']);
        }

        $this->load->view('templates/header', $data);
        $this->load->view('databaseProject/add_course', $data);
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

        $data['students'] = $this->database_model->get_student_by_id();
        $data['title'] = 'All Students';

        $this->load->view('templates/header', $data);
        $this->load->view('databaseProject/view_students', $data);
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
