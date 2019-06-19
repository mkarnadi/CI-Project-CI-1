<!-- */Perhatikan nama file untuk controller, di depannya selalu diawali dengan huruf besar atau kapital.*/ -->

<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/overview");
	}
}
