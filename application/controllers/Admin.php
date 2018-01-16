<?php 

/**
* 
*/
class Admin extends CI_Controller
{
    
    public function index()
    {
        if (!$this->session->userdata('logged_in')) {
            # code...
            redirect('login');
        }
        $data['title'] = 'hello '.$this->session->userdata('username').'!';
        $this->load->view('templates/adminheader');
        $this->load->view('admin/index', $data);
        $this->load->view('templates/adminfooter');
        
    }
    public function view($page = NULL)
    {
        if (!$this->session->userdata('logged_in')) {
            # code...
            redirect('login');
        }
        if (!file_exists(APPPATH.'views/admin/'.$page.'.php')) {
            show_404();
        }
        $data['keuangan'] = $this->post_model->uang();
        $data['keuang'] = $this->post_model->uangLimit();
        $data['pembangunan'] = $this->post_model->bangun();
        $data['bangun'] = $this->post_model->bangunLimit();
        $data['agenda'] = $this->post_model->agen();
        $data['feedback'] = $this->post_model->feedback();
        $data['admin'] = $this->post_model->admin();
        $data['title'] = 'pembangunan';
        $this->load->view('templates/adminheader');
        $this->load->view('admin/'.$page, $data);
        $this->load->view('templates/adminfooter');
        
    }
    public function login(){
            $data['title'] = 'Sign In';

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() === FALSE){
                
                $this->load->view('admin/login', $data);
                
            } else {
                
                // Get username
                $username = $this->input->post('username');
                // Get and encrypt the password
                $password = md5($this->input->post('password'));

                // Login user
                $user_id = $this->post_model->login($username, $password);

                if($user_id){
                    // Create session
                    $user_data = array(
                        'user_id' => $user_id,
                        'username' => $username,
                        'password' => $password,
                        'logged_in' => true
                    );

                    $this->session->set_userdata($user_data);

                    // Set message
                    $this->session->set_flashdata('user_loggedin', 'You are now logged in');

                    redirect('admin');
                } else {
                    // Set message
                    $this->session->set_flashdata('login_failed', 'Login is invalid');

                    redirect('login');
                }       
            }
        }
    public function logout(){
            // Unset user data
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('username');

            // Set message
            $this->session->set_flashdata('user_loggedout', 'You are now logged out');

            redirect('login');
        }
    public function profile()
    {
        # code...
        $id = $this->session->userdata('user_id');
        $data['biodata'] = $this->post_model->profile($id);

        $this->load->view('templates/adminheader');
        $this->load->view('admin/profile', $data);
        $this->load->view('templates/adminfooter');
    }

    public function delete($id)
    {
        if (!$this->session->userdata('logged_in')) {
            # code...
            redirect('login');
        }
        $this->post_model->delete($id);
        redirect('admin/feedback');
    }
    public function changePassword()
    {
        $id_admin = $this->session->userdata('user_id');
        $old_pass = $this->session->userdata('password');
        $password = md5($this->input->post('old_password'));
        $password1 = $this->input->post('password');
        $password2 = $this->input->post('confirm');
        $new_pass = md5($password1);
        if ($old_pass != $password) {
            $this->session->set_flashdata('wrong_pass', 'password lama anda tidak cocok');

            redirect('admin/pass');
        }
        if ($password1 != $password2) {
            $this->session->set_flashdata('wrong_confirm', 'Kombinasi password tidak cocok');

            redirect('admin/pass');
        }else {
            $this->post_model->ubah_password($id_admin, $new_pass);
            $this->session->set_flashdata('success', 'password berhasil di ubah');
            $this->session->set_userdata('password', $new_pass);

            redirect('admin/profile');
        }

    }
}