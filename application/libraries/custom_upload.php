<?php
class Custom_upload {

	public function __construct() {
		$this->CI =& get_instance();

		$this->CI->load->library('upload');
	}
	public function single_upload($field_name, $conf = array()) {
		$upload_path = FCPATH.$conf['upload_path'];
		if (!is_dir($upload_path))
			mkdir($upload_path, 0777, true);

		$config = array(
			'upload_path' => $upload_path,
			'allowed_types' => $conf['allowed_types'],
			'max_size' => 20000,
			//'encrypt_name' => true
		);
		$this->CI->upload->initialize($config);
		if ($this->CI->upload->do_upload($field_name)) {
			$data = $this->CI->upload->data();
			chmod($data['full_path'], 0777);

			return $data['file_name'];
		}
	}
}