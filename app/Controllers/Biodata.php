<?php namespace App\Controllers;

class Biodata extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
        // print_r("Ahmad Subadri");
        echo "Nama : $this->name","<br>";
        echo "Alamat : $this->alamat","<br>";
        echo "Umur : $this->umur","<br>";
        echo "Program Studi : $this->prodi","<br>";
        echo "Fakultas : $this->fak";
	}

	//--------------------------------------------------------------------

}
