<?php
class Page_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }


    public function insertImport($data)
    {
        $this->db->insert('advisement', $data);
    }

    public function fetchSubject()
    {
        $query = $this->db->get('advisement');
        return $query->result();
    }
    

    public function fetchSubjectName($subject_code)
    {
        $this->db->where('subject_name', $subject_code);
        $query = $this->db->get('advisement');
        $output = "";
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->advisement_id . '">' . $row->subject_code . '</option>';
        }
        return $query->result();
    }


    public function fetch_day()
    {
        $query = $this->db->get("day");
        return $query->result();
    }


    function fetch_time_start()
    {
        #$this->db->where('time_start_id');
        $query = $this->db->get('time_start');

        #$output = '<option value="">Select Time Start</option>';
        #foreach($query->result() as $row)
        #{
        #$output .= '<option value="'.$row->time_id.'">'.$row->time_start.'</option>';
        #}

        return $query->result();
    }

    public function fetch_time_end()
    {
        #$this->db->where('time_end_id');
        $query = $this->db->get('time_end');

        return $query->result();
    }

    public function fetch_room()
    {
        #$this->db->where('time_end_id');
        $query = $this->db->get('room');

        return $query->result();
    }

    public function fetch_faculty()
    {
        #$this->db->where('time_end_id');
        $query = $this->db->get('faculty');

        return $query->result();
    }



    #public function fetch_time_end($time_id)
    #{
    #  $this->db->where('time_id',$time_id);
    # $query = $this->db->get('time');
    #$output = '<option value="">Select Time End</option>';
    #foreach($query->result() as $row)
    #{
    #$output .= '<option value="'.$row->time_id.'">'.$row->time_end.'</option>';
    #}
    #return $output;
    #}

    //login user
    public function login($email_address, $password)
    {
        //validate
        $this->db->where('email_address', $email_address);
        $this->db->where('password', $password);

        $result = $this->db->get('faculty');

        if ($result->num_rows() == 1) {
            return $result->row(0)->faculty_id;
        } else {
            return false;
        }
    }


    public function insert_facultydata()
    {
        $department_id = $this->session->userdata('department_id');
        $faculty_type = "Teacher";
        $data = array(
            'faculty_name' => $this->input->post('faculty_name'),
            'email_address' => $this->input->post('email_address'),
            'password' => md5($this->input->post('password')),
            'faculty_type' => $faculty_type,
            'department_id' => $department_id,
        );

        $result = $this->db->insert('faculty', $data);
        return $result;
    }

    public function add_subjectdata()
    {
        $faculty_id = $this->session->userdata('faculty_id');
        $data = array(
            'faculty_id' => $this->input->post('faculty_id'),
            'subject_id' => $this->input->post('subject_id'),
        );

        $result = $this->db->insert('preferred_subject', $data);
        return $result;
    }

    public function insert_subject_offeringdata()
    {
        $data = array(
            'faculty_id' => $this->input->post('faculty_id'),
            'Day' => $this->input->post('day'),
            'subject_id' => $this->input->post('subject_id'),
            'room_id' => $this->input->post('room_id'),
            'time_start' => $this->input->post('time_start'),
            'time_end' => $this->input->post('time_start'),
        );

        $result = $this->db->insert('subject_offering', $data);
        return $result;
    }

    public function insert_semesterdata()
    {
        $status = "2";
        $data = array(
            'school_year' => $this->input->post('school_year'),
            'semester' => $this->input->post('semester'),
            'status' => $status,
        );

        $result = $this->db->insert('setting', $data);
        return $result;
    }

    public function insert_subjectdata()
    {
        $department_id = $this->session->userdata('department_id');
        $semester_id = "1";
        $curriculum_id = "2";
        $data = array(
            'subject_code' => $this->input->post('subject_code'),
            'subject_name' => $this->input->post('subject_name'),
            'subject_year' => $this->input->post('subject_year'),
            'credit_units' => $this->input->post('credit_units'),
            'lec_units'    => $this->input->post('lec_units'),
            'lab_units'    => $this->input->post('lab_units'),
            'semester_offered' => $semester_id,
            'curriculum_id' => $curriculum_id,
            'department_id' => $department_id,
        );

        $result = $this->db->insert('subject', $data);
        return $result;
    }




    public function delete_facultydata()
    {
        $faculty_name = $this->input->post('faculty_name');
        $this->db->where('faculty_name', $faculty_name);
        $result = $this->db->delete('faculty');
        return $result;
    }

    public function delete_subjectdata()
    {
        $subject_code = $this->input->post('subject_code');
        $this->db->where('subject_code', $subject_code);
        $result = $this->db->delete('subject');
        return $result;
    }

    function update_facultydata()
    {
        $faculty_type_a = $this->session->userdata('faculty_type');
        $faculty_type_b = "Teacher";
        $faculty_name_a = $this->session->userdata('faculty_name');
        $faculty_name_b = $this->input->post('faculty_name');

        $data = array(
            array(
                'faculty_name' => $faculty_name_a,
                'faculty_type' => $faculty_type_b
            ),
            array(
                'faculty_name' => $faculty_name_b,
                'faculty_type' => $faculty_type_a

            )
        );

        return $this->db->update_batch('faculty', $data, 'faculty_name');
    }

    function update_subjectdata()
    {
        $subject_code = $this->input->post('subject_code');
        $subject_year = $this->input->post('subject_year');
        $subject_name = $this->input->post('subject_name');
        $credit_units = $this->input->post('credit_units');
        $lec_units    = $this->input->post('lec_units');
        $lab_units    = $this->input->post('lab_units');

        $this->db->set('subject_name', $subject_name);
        $this->db->set('subject_year', $subject_year);
        $this->db->set('credit_units', $credit_units);
        $this->db->set('lec_units', $lec_units);
        $this->db->set('lab_units', $lab_units);
        $this->db->where('subject_code', $subject_code);
        $result = $this->db->update('subject');
        return $result;
    }



    function update_profiledata()
    {
        $faculty_id = $this->session->userdata('faculty_id');
        $faculty_name = $this->input->post('faculty_name');
        $faculty_type = $this->input->post('faculty_type');
        $email_address = $this->input->post('email_address');
        $department_name = $this->input->post('department_name');

        $this->db->set('faculty_name', $faculty_name);
        $this->db->set('faculty_type', $faculty_type);
        $this->db->set('department_name', $department_name);
        $this->db->set('email_address', $email_address);
        $this->db->where('faculty_id', $faculty_id);
        $result = $this->db->update('faculty');
        return $result;
    }

    public function faculty_info($faculty_id)
    {

        $query = $this->db->select('*')
            ->from('faculty')
            ->where('faculty_id', $faculty_id)
            ->join('department', 'department.department_id = faculty.department_id')
            ->get();
        return $query->result_array();
    }

    public function getSubject_id($subject_code)
    {

        $this->db->where('subject_code', $subject_code);
        $result = $this->db->get('subject');

        return $result;
    }

    public function teacher_list($department_id)
    {
        $faculty_type = "Teacher";
        $query = $this->db->select('*')
            ->from('faculty')
            ->where('department_id', $department_id)
            ->where('faculty_type', $faculty_type)
            ->get();
        return $query->result_array();
    }

    public function semester_data()
    {
        $active = 1;
        $query = $this->db->select('*')
            ->from('setting')
            ->where('status', $active)
            ->get();
        return $query->result_array();
    }

    public function teacher_data($faculty_id)
    {
        $query = $this->db->select('*')
            ->from('faculty')
            ->where('faculty_id', $faculty_id)
            ->get();
        return $query->result_array();
    }

    public function fuculty_list()
    {
        $department_id = $this->session->userdata('department_id');
        $query = $this->db->select('*')
            ->from('faculty')
            ->where('department_id', $department_id)
            ->get();
        return $query->result();
    }

    public function subject_list()
    {
        $department_id = $this->session->userdata('department_id');
        $query = $this->db->select('*')
            ->from('subject')
            ->where('department_id', $department_id)
            ->get();
        return $query->result();
    }

    public function profile_list()
    {
        $faculty_name = $this->session->userdata('faculty_name');

        $query = $this->db->select('*')
            ->from('faculty')
            ->where('faculty_name', $faculty_name)
            ->join('department', 'department.department_id = faculty.department_id')
            ->get();
        return $query->result();
    }




    public function view_semester()
    {
        $query = $this->db->select('*')
            ->from('setting')
            ->order_by('setting_id', 'ASC')
            ->get();
        return $query->result();
    }


    public function advisement_list()
    {
        $query = $this->db->select('*')
            ->from('advisement')
            ->order_by('subject_name', 'ASC')
            ->get();
        return $query->result();
    }

    public function subject_offering_list()
    {
        $query = $this->db->select('*')
            ->from('subject_offering')
            ->join('advisement', 'advisement.id=subject_offering.subject_id', 'left')
            ->join('faculty', 'faculty.faculty_id=subject_offering.faculty_id', 'left')
            ->join('time_start', 'time_start.time_start_id=subject_offering.time_start', 'left')
            ->join('time_end', 'time_end.time_end_id=subject_offering.time_end', 'left')
            ->join('room', 'room.room_id=subject_offering.room_id', 'left')
            
            //->join('advisement', 'advisement.advisement_id=subject_offering.subject_id', 'left')
            ->order_by('offering_id', 'ASC')
            ->get();
        return $query->result();

    }
}
