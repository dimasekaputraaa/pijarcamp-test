<?php


class Pijarcamp extends CI_model{
	public function getAllData()
	{
		return $this->db->get('produk')->result_array();
	}
	function tambahdata($data)
    {
        $this->db->insert('produk', $data);
    }
    function hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('produk');
	}
	function getData($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('produk');
		return $query->row();
	}
    function ubahdata($nama_produk, $datadetail)
	{
		$this->db->where('nama_produk', $nama_produk);
		$this->db->update('produk', $datadetail);
	}
    
}
