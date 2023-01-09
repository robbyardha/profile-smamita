<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules(
            'username',
            'Username or Email',
            'required',
            [
                'required' => '%s is required!',
            ]
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            [
                'required' => '%s is required!'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Auth - Administrator";
            $this->load->view('backend/layout_auth/header', $data);
            $this->load->view('backend/content/auth/login', $data);
            $this->load->view('backend/layout_auth/footer', $data);
        } else {
            $this->func_login();
        }
    }

    private function func_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $akun = $this->db->get_where('akun', ['username' => $username])->row_array();
        $email = $this->db->get_where('akun', ['email' => $username])->row_array();

        if ($akun) {
            if ($akun['is_active'] == 1) {
                if (password_verify($password, $akun['password'])) {
                    unset($akun['password']);
                    $data = [
                        'username' => $akun['username'],
                        'email' => $akun['email'],
                        'nama' => $akun['nama'],
                        'role_id' => $akun['role_id'],
                        'akun_id' => $akun['id'],
                        'set_rules' => "Admin"
                    ];
                    $this->session->set_userdata($data);

                    if ($akun['role_id'] == 1) {
                        redirect('dashboard');
                    } elseif ($akun['role_id'] == 2) {
                        redirect('dashboard');
                    } else {
                        redirect('dashboard');
                    }
                } else {
                    $this->session->set_flashdata('akun_error', 'Username Password Salah');
                    redirect('auth/index');
                }
            } else {
                $this->session->set_flashdata('akun_error', 'Username Tidak Aktif');
                redirect('auth/index');
            }
        } elseif ($email) {
            if ($email['is_active'] == 1) {
                if (password_verify($password, $email['password'])) {
                    unset($email['password']);
                    $data = [
                        'username' => $email['username'],
                        'email' => $email['email'],
                        'nama' => $email['nama'],
                        'role_id' => $email['role_id'],
                        'akun_id' => $email['id'],
                        'set_rules' => "Admin"
                    ];
                    $this->session->set_userdata($data);

                    if ($email['role_id'] == 1) {
                        redirect('dashboard');
                    } elseif ($email['role_id'] == 2) {
                        redirect('profile');
                    } else {
                        redirect('dashboard');
                    }
                } else {
                    $this->session->set_flashdata('akun_error', 'Username Password Salah');
                    redirect('auth/index');
                }
            } else {
                $this->session->set_flashdata('akun_error', 'Username Tidak Aktif');
                redirect('auth/index');
            }
        } else {
            $this->session->set_flashdata('akun_error', 'Username Tidak Ada');
            redirect('auth/index');
            // redirect('auth');
        }
    }

    public function register()
    {
        // $this->session->set_flashdata('akun_error', 'Maaf Fitur ini dinonaktifkan administrator');
        // redirect('auth/index');
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required',
            [
                'required' => 'Name is Required!'
            ]
        );

        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|is_unique[akun.username]',
            [
                'required' => 'Username is required!',
                'is_unique' => 'Username already registered',
            ]
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|is_unique[akun.email]',
            [
                'required' => '%s is required!',
                'is_unique' => '%s already registered',
            ]
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[5]|matches[passwordconfirm]',
            [
                'required' => 'Password is required!',
                'min_length' => 'Password minimum 6 characters',
                'matches' => 'Password not same'
            ]
        );
        $this->form_validation->set_rules(
            'passwordconfirm',
            'Password Confirmation',
            'required|trim|min_length[5]|matches[password]',
            [
                'required' => 'Password Confirmation is required!',
                'min_length' => 'Password minimum 6 characters',
                'matches' => 'Password not same'
            ]
        );

        $this->form_validation->set_rules(
            'pernyataan',
            'Pernyataan',
            'required',
            [
                'required' => 'You must accept this agreement!',
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Auth - Administrator";
            $this->load->view('backend/layout_auth/header', $data);
            $this->load->view('backend/content/auth/register', $data);
            $this->load->view('backend/layout_auth/footer', $data);
        } else {
            date_default_timezone_set('Asia/Jakarta');
            $now = date('Y-m-d H:i:s');
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama')),
                'username' => htmlspecialchars($this->input->post('username')),
                'email' => htmlspecialchars($this->input->post('email')),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'created_date' => $now,
            ];
            // var_dump($data);
            // die;
            $this->db->insert('akun', $data);
            $this->session->set_flashdata('akun', 'Registrasi Berhasil. Silahkan login');
            redirect('auth/index');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('akun_id');
        $this->session->unset_userdata('set_rules');
        $this->session->all_userdata();
        $this->session->set_flashdata('akun', 'Berhasil Logout');
        redirect('auth/index');
    }

    public function update_password_account()
    {
        $this->form_validation->set_rules(
            'new_pass',
            'Password',
            'required|trim|min_length[5]|matches[new_pass_confirm]',
            [
                'required' => 'Password is required!',
                'min_length' => 'Password minimum 5 characters',
                'matches' => 'Password not same'
            ]
        );
        $this->form_validation->set_rules(
            'new_pass_confirm',
            'Password Confirmation',
            'required|trim|min_length[5]|matches[new_pass]',
            [
                'required' => 'Password Confirmation is required!',
                'min_length' => 'Password minimum 5 characters',
                'matches' => 'Password not same'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Error validasi, password minimal 5 karakter, harus sama dan ,tidak boleh kosong');
            redirect('profile');
        } else {
            $id = htmlspecialchars($this->input->post('akun_id'));
            $password = password_hash($this->input->post('new_pass'), PASSWORD_DEFAULT);
            $this->db->where('id', $id);
            $this->db->set('password', $password);
            $this->db->update('akun');
            // var_dump($this->db->last_query());
            // die;
            $this->session->set_flashdata('message', 'Password berhasil dirubah');
            redirect('profile');
        }
    }
}
