<?php
class update_ctrl extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('login_database');
    }
    function show_student_id() {
        $id = $this->uri->segment(3);
        $data['username'] = $this->login_database->show_username();
        $data['password'] = $this->login_database->show_password();
        $this->load->view('update_view', $data);
    }
    function update_student_id1() {
        $id= $this->input->post('did');
        $data = array(
            'Username' => $this->input->post('username'),
            'Password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone')
        );
        $this->login_database->update_student_id1($id,$data);
        $this->show_student_id();
    }
}
?>