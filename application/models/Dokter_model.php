<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Dokter_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function view() {
        return $this->db->get('dokter')->result();
        
    }
    /*
     * Get dokter by id_dokter
     */
    function get_dokter($id_dokter)
    {
        return $this->db->get_where('dokter',array('id_dokter'=>$id_dokter))->row_array();
    }
        
    /*
     * Get all dokter
     */
    function get_all_dokter()
    {
        $this->db->order_by('id_dokter', 'desc');
        return $this->db->get('dokter')->result_array();
    }
        
    /*
     * function to add new dokter
     */
    function add_dokter($params)
    {
        $this->db->insert('dokter',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update dokter
     */
    function update_dokter($id_dokter,$params)
    {
        $this->db->where('id_dokter',$id_dokter);
        return $this->db->update('dokter',$params);
    }
    
    /*
     * function to delete dokter
     */
    function delete_dokter($id_dokter)
    {
        return $this->db->delete('dokter',array('id_dokter'=>$id_dokter));
    }
}
