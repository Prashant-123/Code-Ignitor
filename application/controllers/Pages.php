<?php 
    class Pages extends CI_controller {

		public function view($page = 'about') {
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
				show_404();
			}

			$data['title'] = ucfirst($page);

			$this->load->view('templates/header.php', $data);
			$this->load->view('pages/'.$page);
			$this->load->view('templates/footer.php');
		}
    }