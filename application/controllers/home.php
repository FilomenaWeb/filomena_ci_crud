<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

		$this->load->model('my_model');

	}

	// List all your items
	public function index( $offset = 0 )
	{
		$data = array(
			'content' => $this->my_model->GetData()->result_array() , 
		);
		$this->load->view('mycrud', $data);
	}

	public function select($id = NULL)
	{
		$data = array(
			'content' => $this->my_model->GetData("where id='$id'")->result_array(), 
		);

		$this->load->view('artikel', $data);
	}

	// Add a new item
	public function add()
	{
		$data = array(
			'status' => 'tambah',
			'id' => '',
			'nama' => '',
			'username' => '' 
		);
		$this->load->view('tambah',$data);
	}

	public function save()
	{
		$data = array(
			'nama' => $_POST['nama'] ,
			'username' => $_POST['username'] 			
		);

		if(strtolower($status) == "edit"){
			$this->my_model->UpdateData('t_admin', $data, array('id' => $_POST['id'] ));
			redirect('index','refresh');
		}else {
			$this->my_model->InsertData('t_admin',$data);
			redirect('index','refresh');
		}

		
	}

	//Update one item
	public function update( $id = NULL )
	{
		$temp = $this->my_model->GetData("where id = '$id'")->result_array();
		$data = array(
			'status' => 'edit',
			'nama' => $temp[0]['nama'],
			'username' => $temp[0]['username'],
			'id' => $temp[0]['id']
		);
		$this->load->view('tambah', $data);
	}

	//Delete one item
	public function delete( $id = NULL )
	{
		$array = array('id' => $id, );
		$this->my_model->DeleteData('t_admin', $array);
		redirect('index','refresh');
	}

	public function search()
	{
		$data = array(
			'content' => $this->my_model->SearchData()->result_array() , 
		);

		if($data['content'] == NULL){
			echo "data tidak ditemukan";
			echo "<br><a href='".base_url()."'>Kembali</a>";
		} else{
			$this->load->view('mycrud', $data);
		}

	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
