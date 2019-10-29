<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Dokter extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dokter_model');
    } 
    
    function export(){
        //Script berikut ini adalah script yang bertuugas untuk meng-export data tadi ke excell
        header("Content-type: aplication/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=Data_Dokter.xls");
        
        $data ['title'] = 'Dokter';
        $data ['dokter'] = $this->Dokter_model->view();
        $this->load->view('export', $data);
    }
    
    function insert_dummy(){
        //jumlah data yang di insert
        $jumlah_data = 1000;
        for($i=1;$i<$jumlah_data;$i++){
            $data = array(
                'kd_dokter' => '111'.$i,
		        'nm_dokter' => 'Bagas',
                'jk' => 'L',
                'tmp_lahir' => 'Depok',
                'tgl_lahir' => '2001-1-15',
                'gol_drh' => 'B',
                'agama' => 'Islam');
           $this->db->insert('dokter', $data);        
        }
         echo $i. 'Data Telah Di insert';

    }
    function json(){
        $this->load->library('Datatables');
        $this->datatables->select('id_dokter , kd_dokter , nm_dokter ,jk , tmp_lahir , tgl_lahir , gol_drh , agama');
        $this->datatables->add_column('edit', anchor('dokter/edit/$1','Edit',array('class'=>'btn btn-warning btn-sm')), 'id_dokter');
        $this->datatables->add_column('remove', anchor('dokter/remove/$1','Hapus',array('class'=>'btn btn-danger btn-sm')), 'id_dokter');
        $this->datatables->from('dokter');
        return print_r($this->datatables->generate());
    }
    /*
     * Listing of dokter
     */
    function index()
    {
        
        $data['title'] = "List Dokter";
        $data['list'] = $this->Dokter_model->get_all_dokter();
        $data['page'] = 'viewDokter';   
        $this->renderDokter($data);
    }
      public function renderDokter($data){
      $this->load->view('partial/header.php',$data);
      $this->load->view('partial/mainDashboard');
      $this->load->view('partial/footer.php');
    }
    /*
     * Adding a new dokter
     */
    function add()
    {   
        $data['title'] = "Tambah Data";
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'kd_dokter' => $this->input->post('kd_dokter'),
				'nm_dokter' => $this->input->post('nm_dokter'),
				'jk' => $this->input->post('jk'),
				'tmp_lahir' => $this->input->post('tmp_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'gol_drh' => $this->input->post('gol_drh'),
				'agama' => $this->input->post('agama'),
            );
            
            $dokter_id = $this->Dokter_model->add_dokter($params);
            redirect('dokter/index');
        }
        else
        {            
        $data['page'] = 'add';   
        $this->renderDokter($data);
        }
    }  

    /*
     * Editing a dokter
     */
    function edit($id_dokter)
    {   
        $data['title'] = "Edit Dokter";
        // check if the dokter exists before trying to edit it
        $data['dokter'] = $this->Dokter_model->get_dokter($id_dokter);
        
        if(isset($data['dokter']['id_dokter']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'kd_dokter' => $this->input->post('kd_dokter'),
					'nm_dokter' => $this->input->post('nm_dokter'),
					'jk' => $this->input->post('jk'),
					'tmp_lahir' => $this->input->post('tmp_lahir'),
					'tgl_lahir' => $this->input->post('tgl_lahir'),
					'gol_drh' => $this->input->post('gol_drh'),
					'agama' => $this->input->post('agama'),
                );

                $this->Dokter_model->update_dokter($id_dokter,$params);            
                redirect('dokter/index');
            }
            else
            {
                $data['page'] = 'edit';   
                $this->renderDokter($data);
            }
        }
        else
            show_error('The dokter you are trying to edit does not exist.');
    } 

    /*
     * Deleting dokter
     */
    function remove($id_dokter)
    {
        $dokter = $this->Dokter_model->get_dokter($id_dokter);

        // check if the dokter exists before trying to delete it
        if(isset($dokter['id_dokter']))
        {
            $this->Dokter_model->delete_dokter($id_dokter);
            redirect('dokter/index');
        }
        else
            show_error('The dokter you are trying to delete does not exist.');
    }

    
}