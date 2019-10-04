<?php 


class Template {

	function __construct() {
		$this->CI = &get_instance();
	}

	function init($content, $data = NULL)
	{
		// $data['header'] = $this->CI->load->view('templates/header', $data, TRUE);
		$data['content'] = $this->CI->load->view($content, $data, TRUE);
		// $data['footer'] = $this->CI->load->view('templates/footer', $data, TRUE);

		$this->CI->load->view('templates/main.php', $data);
	}
}





 ?>