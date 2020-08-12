<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pages extends CI_Controller
{
	public function load_data()
	{

		$data = $this->page_model->advisement_list();
		echo json_encode($data);
	}

	public function load_my_schedule()
	{

		$data = $this->page_model->subject_offering_list();
		echo json_encode($data);
	}

	public function fetchSubjectName()
	{
		if ($this->input->post('subject_code')) {
			echo $this->page_model->fetchSubjectName($this->input->post('subject_code'));
		}
	}

	public function view_semester()
	{
		$data['setting'] = $this->page_model->view_semester();
		$this->load->view('template/header_1');
		$this->load->view('pages/chairperson/view_semester', $data);
	}





	public function addSchedule()
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('pages/login');
		}
		$department_id  = $this->session->userdata('department_id');
		$data['teacher'] = $this->page_model->teacher_list($department_id);
		$data['day'] = $this->page_model->fetch_day();
		$data['time_start'] = $this->page_model->fetch_time_start();
		$data['time_end'] = $this->page_model->fetch_time_end();
		$data['advisement'] = $this->page_model->fetchSubject();
		$data['room'] = $this->page_model->fetch_room();
		$data['faculty'] = $this->page_model->fetch_faculty();
		$this->load->view('template/header_1');
		$this->load->view('pages/chairperson/add_schedule', $data);
	}

	public function fetch_time_start()
	{
		if ($this->input->post('day_id')) {
			echo $this->page_model->fetch_time_start($this->input->post('day_id'));
		}
	}

	public function fetch_time_end()
	{
		if ($this->input->post('time_id')) {
			echo $this->page_model->fetch_time_end($this->input->post('time_id'));
		}
	}

	public function fetch_day()
	{
		if ($this->input->post('day_id')) {
			echo $this->page_model->fetch_day($this->input->post('day_id'));
		}
	}

	public function fetch_faculty()
	{
		if ($this->input->post('faculty_id')) {
			echo $this->page_model->fetch_faculty($this->input->post('faculty_id'));
		}
	}

	public function view_data($faculty_id)
	{
		$data['teachers'] = $this->page_model->teacher_data($faculty_id);
		$this->load->view('template/header_1');
		$this->load->view('pages/chairperson/add_schedule', $data);
	}

	public function teacherpreferred()
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('pages/login');
		}
		$data['subject_list'] = $this->page_model->fetchSubject();
		$this->load->view('template/header');
		$this->load->view('pages/teacher/teacher_preferred', $data);
	}


	public function view($page)
	{

		if ($this->session->userdata('faculty_type') == 'Teacher') {
			if ($page == "teacher_preferred") {
				redirect('teacherpreferred');
			} else {
				$this->load->view('template/header');
				$this->load->view('pages/teacher/' . $page);
			}
		}

		if ($this->session->userdata('faculty_type') == 'Chairperson') {
			if ($page == "add_schedule") {
				redirect('addSchedule');
			} else {
				$this->load->view('template/header');
				$this->load->view('pages/chairperson/' . $page);
			}
		}
	}

	public function faculty_data()
	{


		$data = $this->page_model->fuculty_list();
		echo json_encode($data);
	}


	public function insert_validation()
	{
		$this->form->set_rules('faculty_name', 'name', 'required|trim');
		$this->form->set_rules('email_address', 'email', 'required|valid_email');
		$this->form->set_rules('password', 'password', 'required');

		if ($this->form_validation->run()) {
			$array = array(
				'success' => '<div class="alert alert-success">Faculty Member Added</div>'
			);
		} else {
			$array = array(
				'error' => true,
				'name_error' => form_error('name'),
				'email_error' => form_error('email'),
				'password_error' => form_error('password'),
			);
		}
		echo json_encode($array);
	}

	public function insert_faculty()
	{
		$data = $this->page_model->insert_facultydata();
		echo json_encode($data);
	}

	public function delete_faculty()
	{

		$data = $this->page_model->delete_facultydata();
		echo json_encode($data);
	}

	public function update_faculty()
	{
		$data = $this->page_model->update_facultydata();
		echo json_encode($data);
	}

	public function profile_data()
	{
		$data = $this->page_model->profile_list();
		echo json_encode($data);
	}

	public function active_semester()
	{
		$data = $this->page_model->semester_data();
		echo json_encode($data);
	}
	public function subject_data()
	{
		$data = $this->page_model->subject_list();
		echo json_encode($data);
	}


	public function insert_subject()
	{
		$data = $this->page_model->insert_subjectdata();
		echo json_encode($data);
	}


	public function insert_subject_offering()
	{
		$data = $this->page_model->insert_subject_offeringdata();
		echo json_encode($data);
	}


	public function insert_semester()
	{
		$data = $this->page_model->insert_semesterdata();
		echo json_encode($data);
	}

	public function delete_subject()
	{
		$data = $this->page_model->delete_subjectdata();
		echo json_encode($data);
	}
	
	public function delete_subject_offering()
	{

		$data = $this->page_model->delete_subject_offeringdata();
		echo json_encode($data);
	}

	public function update_subject()
	{
		$data = $this->page_model->update_subjectdata();
		echo json_encode($data);
	}

	public function update_profile()
	{
		$data = $this->page_model->update_profiledata();
		echo json_encode($data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('pages/login');
	}



	public function import()
	{
		$filename = $_FILES["file"]["tmp_name"];
		if ($_FILES["file"]["size"] > 0) {
			$flag = true;
			$file = fopen($filename, "r");
			while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE) {
				if ($flag) {
					$flag = false;
					continue;
				}


				if ($emapData[2] <= 25) {
					$no_section = "1";
				}

				if ($emapData[2] >  25 && $emapData[2] < 50) {
					$no_section = "2";
				}
				if ($emapData[2] > 50 && $emapData[2] < 75) {
					$no_section = "3";
				}
				if ($emapData[2] > 75 && $emapData[2] < 100) {
					$no_section = "4";
				}
				if ($emapData[2] > 100 && $emapData[2] < 125) {
					$no_section = "5";
				}
				if ($emapData[2] > 125 && $emapData[2] < 150) {
					$no_section = "6";
				}
				$data = array(
					'subject_code' => $emapData[0],
					'subject_name' => $emapData[1],
					'advisement_count' => $emapData[2],
					'suggested_section' => $no_section,
				);

				$this->page_model->insertImport($data);
			}
			fclose($file);
			$this->session->set_flashdata('import', 'Imported Successfully');
			redirect('chairperson_dashboard');
		}
	}



	public function login()
	{


		$this->form_validation->set_rules('email_address', 'email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'required');


		if ($this->form_validation->run() === FALSE) {

			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
			$this->load->view('pages/login_view');
		} else {
			$email_address = $this->input->post('email_address');
			$password = md5($this->input->post('password'));

			$faculty_id = $this->page_model->login($email_address, $password);
			$faculty_info = $this->page_model->faculty_info($faculty_id);
			$faculty_name = $faculty_info[0]['faculty_name'];
			$faculty_type = $faculty_info[0]['faculty_type'];
			$department_id = $faculty_info[0]['department_id'];
			$department_name = $faculty_info[0]['department_name'];

			if ($faculty_id) {
				if ($faculty_type == "Teacher") {
					$userdata = array(
						'faculty_id' => $faculty_id,
						'faculty_name' => $faculty_name,
						'faculty_type' => $faculty_type,
						'department_id' => $department_id,
						'email_address' => $email_address,
						'department_name' => $department_name,
						'logged_in' => true
					);
					$this->session->set_userdata($userdata);



					redirect('teacher_dashboard');
				}


				if ($faculty_type == "Chairperson") {

					$userdata = array(
						'faculty_id' => $faculty_id,
						'faculty_name' => $faculty_name,
						'faculty_type' => $faculty_type,
						'department_id' => $department_id,
						'email_address' => $email_address,
						'department_name' => $department_name,
						'logged_in' => true
					);
					$this->session->set_userdata($userdata);

					redirect('chairperson_dashboard');
				}
			} else {
				//set message
				$this->session->set_flashdata('error', 'Login Invalid');

				redirect('login');
			}
		}
	}
}
