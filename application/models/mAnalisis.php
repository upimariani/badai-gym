<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnalisis extends CI_Model
{
	public function getData()
	{
		return $this->db->query("SELECT * FROM `analisis`")->result();
	}

	public function randomCentroid($k = 3)
	{
		return $this->db->query("SELECT * FROM `analisis` GROUP BY id_analisis ASC LIMIT " . $k)->result();
	}
}

/* End of file mAnalisis.php */
