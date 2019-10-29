<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_model extends CI_Model {
	public function transfer($ammount,$from,$to)
	{
		$sender='UPDATE accounts SET balance=balance-? WHERE user_id=?';
		$receiver='UPDATE accounts SET balance=balance+? WHERE user_id=?';


		$this->db->trans_start();
		$this->db->query($sender,array($ammount,$from));
		$this->db->query($receiver,array($ammount,$to));
		$this->db->trans_complete();

		if ($this->db->trans_start() === FALSE) {
			echo'ROULBSCK';
			# code...
		}else{
			echo'commited';

		}
		# code...
	}
}

/* End of file account.php */
/* Location: ./application/models/account.php */