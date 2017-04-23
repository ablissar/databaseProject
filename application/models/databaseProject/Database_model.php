<?php
class Database_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function get_student_by_id($id = FALSE)
    {
        if ( $id == FALSE )
        {
            $query = $this->db->get('Student');
            return $query->result_array();
        }

        $query = $this->db->get_where('Student', array('StudentID' => $id));
        return $query->result_array();
    }

    public function insert_student($new_student_data)
    {
        if ($new_student_data['studentID'] == NULL ||
            $new_student_data['studentName'] == NULL ||
            $new_student_data['major'] == NULL) {
            $status = 'Error: all fields must be filled in.';
        }
        else {
            $query = $this->db->insert('Student', $new_student_data);
            $status = 'success';
        }
        return $status;
    }

    public function insert_course($new_course_data)
    {
        if ($new_course_data['deptCode'] == NULL ||
            $new_course_data['courseNum'] == NULL ||
            $new_course_data['title'] == NULL ||
            $new_course_data['creditHours'] == NULL) {
            $status = 'Error: all fields must be filled in.';
        }
        else {
            $query = $this->db->insert('Course', $new_course_data);
            $status = 'success';
        }
        return $status;
    }

    public function insert_enrollment($new_enrollment_data)
    {
        if ($new_enrollment_data['deptCode'] == NULL ||
            $new_enrollment_data['courseNum'] == NULL ||
            $new_enrollment_data['studentID'] == NULL) {
            $status = 'Error: all fields must be filled in.';
        }
        else if (! $this->db->insert('Enrollment', $new_enrollment_data) ){
            $code = $this->db->error()['code'];
            $message = $this->db->error()['message'];
            switch($code) {
                case 1062:
                    $status = 'Error: student is already enrolled in this course.';
                    break;
                case 1452:
                    $status = 'Error: invalid keys.';
                    break;
                default:
                    $status = 'Error: enrollment failed with error code '.$code;
                    $status .=' and message '.$message;
            }
        }
        else {
            $status = 'success';
        }
        return $status;
    }

    public function get_courses_by_department($department_code)
    {
        $query = $this->db->get_where('Course', array('deptCode' => $department_code));
        return $query->result_array();
    }

    public function get_courses_by_student($student_id)
    {
        $query = $this->db->get_where('Enrollment', array('studentID' => $student_id));
        $courses = $query->result_array();


        $schedule = [];
        foreach ($courses as $course):
            $query = $this->db->get_where('Course', array(
                    'deptCode' => $course['deptCode'],
                    'courseNum' => $course['courseNum']
                ));
            $schedule[] = $query->result_array();
        endforeach;
        return $schedule;
    }
} ?>
