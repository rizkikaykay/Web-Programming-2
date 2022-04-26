<?php
class Web extends CI_Controller
{
    function __construct(){
        parent::__construct();
        //$this->load->helper('url');
    }

    public function index(){ 
        $data['judul'] = "Halaman Depan"; 
        $this->load->view('v_header',$data);
        $this->load->view('view-form-siswa',$data);
        $this->load->view('v_footer',$data);
        
    }
    
    public function about()
    {
        $data['judul'] = "Tugas Kelompok";
        $this->load->view('v_header', $data);
        $this->load->view('v_home', $data);
        $this->load->view('v_footer', $data);
    }
    
    public function cetak()
    {         
        $this->form_validation->set_rules('kode', 'Kode Siswa', 'required|min_length[3]', [
                    'required' => 'Kode Siswa Harus diisi',  'min_lenght' => 'Kode terlalu pendek'
                ]);
        
                $this->form_validation->set_rules('nama', 'Nama Siswa', 'required|min_length[3]', [
                    'required' => 'Nama Siswa Harus diisi', 'min_lenght' => 'Nama terlalu pendek'
                ]);
        
                if ($this->form_validation->run() != true) {
                    $this->load->view('view-form-siswa');
                } else {
                    $data = [
                        'nama' => $this->input->post('nama'),
                        'kode' => $this->input->post('kode'),
                        'kelas' => $this->input->post('kelas'),
                        'tanggal' => $this->input->post('tanggal'),
                        'tempat' => $this->input->post('tempat'),
                        'alamat' => $this->input->post('alamat'),
                        'jk' => $this->input->post('jk'),
                        'agama' => $this->input->post('agama')
                    ];
                    $this->load->view('view-data-siswa', $data);
                }
            }
        }
        