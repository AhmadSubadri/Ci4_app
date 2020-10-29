<?php namespace App\Controllers;

class Test extends BaseController
{
	public function index()
	{
		return view('welcome_message');
		// print_r("Ahmad Subadri");
	}

	public function test(){
		echo "ini adalah metode test";
    }
    
    public function namaku(){
        echo "Nama Saya $this->name";
    }

	//--------------------------------------------------------------------

}
