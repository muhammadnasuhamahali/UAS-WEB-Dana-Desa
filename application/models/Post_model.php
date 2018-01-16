<?php
class Post_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
    public function uang()
    {
    	
        $this->db->order_by('id', 'DESC');
        $query=$this->db->get('keuangan');
        return $query->result();
    }
    public function uangLimit()
    {
        $this->load->database();
        
        $query=$this->db->query("SELECT saldo FROM keuangan ORDER BY id DESC LIMIT 1");
        return $query->result();
    }
    public function bangun()
    {
    	
        $this->db->order_by('id', 'DESC');
    	$query=$this->db->get('pembangunan');
        return $query->result();
    }
    public function bangunLimit()
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM pembangunan ORDER BY id DESC LIMIT 1");
        return $query->result();
    }
    
    public function agen1()
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM agenda ORDER BY id DESC LIMIT 1");
        return $query->result();
    }

    public function agen()
    {
    	
        $this->db->order_by('id', 'DESC');
    	$query=$this->db->get('agenda');
        return $query->result();
    }
    public function feedback()
    {
        
        $this->db->order_by('id', 'DESC');
        $query=$this->db->get('feedback');
        return $query->result();
    }
    public function insert()
    {
        $data = array(
        'nama' => $this->input->post('nama'),
        'email' => $this->input->post('email'),
        'pesan' => $this->input->post('pesan') );
        return $this->db->insert('feedback', $data);
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('feedback');
        return true;
    }
    public function sesion()
    {
        $login = array('username' => $this->input->post('username'), 'password' => md5($this->input->post('password')) );
        $query = $this->db->get_where('user', $login);
        return $query->result();
        
    }
    public function login($username, $password){
            // Validate
            $this->db->where('username', $username);
            $this->db->where('password', $password);

            $result = $this->db->get('user');

            if($result->num_rows() == 1){
                return $result->row(0)->id;
            } else {
                return false;
            }
        }

    public function profile($id)
    {
        # code...
        $this->db->where('id', $id);
        $query=$this->db->get('user');
        return $query->result();
    }

    public function viewBangun($id_bangun)
    {
        $this->db->where('id', $id_bangun);
        $query=$this->db->get('pembangunan');
        return $query->result();
    }

    public function viewAgenda($id_agenda)
    {
        $this->db->where('id', $id_agenda);
        $query=$this->db->get('agenda');
        return $query->result();
    }

    public function admin()
    {
        $this->db->order_by('id', 'DESC');
        $query=$this->db->get('user');
        return $query->result();
    }
    public function ubah_password($id_admin, $new_pass)
    {
        $data = array('password' => $new_pass, );
        $this->db->where('id', $id_admin);
        return $this->db->update('user', $data);
    }
    public function pencarian1($cari)
    { 
        $query = $this->db->query("SELECT * FROM pembangunan WHERE bangun LIKE '%$cari%'");
        return $query->result_array();
    }
    public function pencarian2($cari)
    { 
        $query = $this->db->query("SELECT * FROM agenda WHERE agenda LIKE '%$cari%'");
        return $query->result_array();
    }


}