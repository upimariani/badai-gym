<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPaket extends CI_Model
{
	public function select()
	{
		$this->db->select('*');
		$this->db->from('paket');
		return $this->db->get()->result();
	}
	public function add($data)
	{
		$this->db->insert('paket', $data);
	}
	public function get_data($id)
	{
		$this->db->select('*');
		$this->db->from('paket');
		$this->db->where('id_paket', $id);
		return $this->db->get()->row();
	}
	public function update($id, $data)
	{
		$this->db->where('id_paket', $id);
		$this->db->update('paket', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_paket', $id);
		$this->db->delete('paket');
	}
}

/* End of file mPaket.php */
