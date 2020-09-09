<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Data_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function getData($tabel,$where)
		{
			return $this->db->get_where($tabel,$where)->row_array();
		}
		public function insertData($table, $data){
			$this->db->insert($table,$data);
		}
		public function getAllData($tabel)
		{
			return $this->db->get($tabel)->result_array();
		}
		public function getAllData_where($tabel,$where)
		{
			$this->db->where($where);
			return $this->db->get($tabel)->result_array();
		}
		public function getAllData_group($tabel)
		{
			$this->db->group_by('id_jawaban');
			return $this->db->get($tabel)->result_array();
		}
			public function updateData($tabel,$where,$kode)
		{
			$this->db->set($where);
			$this->db->where('id_diskusi', $kode);
			$this->db->update($tabel);
		}
}