<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ngoding extends CI_Controller {

	function index(){
		$this->load->library('datadiri');
		$this->datadiri->nama_saya();
                echo "<br/>";
                $this->datadiri->nama_kamu("Andi");
	}

}
