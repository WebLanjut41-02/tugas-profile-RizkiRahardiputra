<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class testCI extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /form.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function Rizki()
	{
		$this->load->view('testCI');
	}

	public  function  tampilform()
    {
            $this -> load ->view('form');
    }

    public  function  tampilfoto()
    {
        $this -> load ->view('foto');
    }

    public  function  tampilportofolio()
    {
        $this -> load ->view('portofolio');

    }

    public  function  tampilkomentar()
    {
        $this -> load ->view('komentar');
    }

    public function  proses ()
    {
        $input = $this->input->post("nama");
        echo "<h2>Komentar Anda</h2> <br>".$input;


    }


}