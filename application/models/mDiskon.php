<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mDiskon extends CI_Model
{
	public function select()
	{
		$this->db->select('*, diskon.deskripsi');
		$this->db->from('diskon');
		$this->db->join('paket', 'diskon.id_paket = paket.id_paket', 'left');
		return $this->db->get()->result();
	}
	public function add($data)
	{
		$this->db->insert('diskon', $data);
	}
	public function get_data($id)
	{
		$this->db->select('*');
		$this->db->from('diskon');
		$this->db->where('id_diskon', $id);
		return $this->db->get()->row();
	}
	public function update($id, $data)
	{
		$this->db->where('id_diskon', $id);
		$this->db->update('diskon', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_diskon', $id);
		$this->db->delete('diskon');
	}
}

/* End of file mDiskon.php */
