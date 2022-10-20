<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model {
	
	public function cek_login($username,$password)
	{

	$hasil= $this->db->where('username', $username)
					 ->where('password', $password)
					 ->limit(1)
					 ->get('tbl_user');
					 
	if($hasil->num_rows() > 0){
		return $hasil->row();
	}else{
		return array();
	}
}

}
