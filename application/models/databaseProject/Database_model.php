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
        if ($new_student_data['studentID'] == '' ||
            $new_student_data['studentName'] == '' ||
            $new_student_data['major'] == '') {
            $status = 'Error: all fields must be filled in.';
        }
        else {
            $query = $this->db->insert('Student', $new_student_data);
            $status = 'success';
        }
        return $status;
    }
} ?>
