<?php
defined('BASEPATH') OR exit ('No Direct Script access allowed');
class Web extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('m_data');
        $this->load->library('form_validation');
    }
    public function index(){

        $this->load->view('v_index');
    }

    public function bio(){
        // $data['bio']=$this->m_data->ambil_data()->result();
        $data=array(
            'judul'=>"Halaman Data",
            'bio'=>$this->m_data->ambil_data()->result()
        );
        $this->load->view('v_data', $data);
    }
    public function create(){
        $data=array(
            'judul'=>"Halaman Booking",
        );
        $this->load->view('v_create', $data);
    }
    public function save(){
        
    
        $this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('no_telepon','No Telepon','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('tgl_booking','Tanggal Booking','required');
        
        if ($this->form_validation->run()==true) {
            $data['nama'] = $this->input->post('nama');
			$data['no_telepon'] = $this->input->post('no_telepon');
            $data['alamat'] = $this->input->post('alamat');
			$data['tgl_booking'] = $this->input->post('tgl_booking');
			$this->m_data->save($data);
			redirect('web/bio');
        }else {
            $this->load->view('v_create');
        
        }
    }
    function hapus($id){
        $where = array('id' => $id);
        $this->m_data->hapus_data($where,'booking');
        redirect('web/bio');
    }
    function edit($id){
        $data=array(
            'judul'=>"Edit Data",
        );
		$data['booking'] = $this->m_data->getById($id);
		$this->load->view('v_edit',$data);
	}

	public function update()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('no_telepon','No Telepon','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('tgl_booking','Tanggal Booking','required');

		if ($this->form_validation->run()==true)
        {
		 	$id = $this->input->post('id');
			$data['nama'] = $this->input->post('nama');
			$data['no_telepon'] = $this->input->post('no_telepon');
			$data['alamat'] = $this->input->post('alamat');
            $data['tgl_booking'] = $this->input->post('tgl_booking');
			$this->m_data->update($data,$id);
			redirect('web/bio');
		}
		else
		{
			$id = $this->input->post('id');
			$data['web'] = $this->m_data->getById($id);
			
			$this->load->view('v_edit',$data);
			
		}
	}

}