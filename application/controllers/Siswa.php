<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author USER
 */
class Siswa extends CI_Controller {
       
    //put your code here
    function __construct() {
        parent::__construct();
    
        $this->load->model('SiswaModel');
    }
    function index(){
        $data['siswa'] = $this->SiswaModel->view();
        $this->load->view('view', $data);   
    }
    function export(){
        //Script berikut ini adalah script yang bertuugas untuk meng-export data tadi ke excell
        header("Content-type: aplication/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=Data_Siswa.xls");
        
        $data ['siswa'] = $this->SiswaModel->view();
        $this->load->view('export', $data);
    }

}
