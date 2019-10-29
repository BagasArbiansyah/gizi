<?php

class Makanan_model extends CI_Model
{
    var $table = 'makanan'; //nama tabel dari database
    var $column_order = array(null, 'nm_makanan','kandungangizi','komposisi'); //field yang ada di table user
    var $column_search = array('nm_makanan','kandungangizi','komposisi'); //field yang diizin untuk pencarian 
    var $order = array('kd_makanan' => 'asc'); // default order 
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    private function _get_datatables_query()
    {
         
        $this->db->from($this->table);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // looping awal
        {
            if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {
                 
                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }
         
        if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
    
    /*
     * Get makanan by kd_makanan
     */
    function get_makanan($kd_makanan)
    {
        return $this->db->get_where('makanan',array('kd_makanan'=>$kd_makanan))->row_array();
    }
        
    /*
     * Get all makanan
     */
    function get_all_makanan()
    {
        $this->db->order_by('kd_makanan', 'desc');
        return $this->db->get('makanan')->result_array();
    }
        
    /*
     * function to add new makanan
     */
    function add_makanan($params)
    {
        $this->db->insert('makanan',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update makanan
     */
    function update_makanan($kd_makanan,$params)
    {
        $this->db->where('kd_makanan',$kd_makanan);
        return $this->db->update('makanan',$params);
    }
    
    /*
     * function to delete makanan
     */
    function delete_makanan($kd_makanan)
    {
        return $this->db->delete('makanan',array('kd_makanan'=>$kd_makanan));
    }
}
