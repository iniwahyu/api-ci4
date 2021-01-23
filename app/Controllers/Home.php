<?php namespace App\Controllers;

class Home extends BaseController
{
	public function __construct()
    {
        // Query Builder
        $this->db           = \Config\Database::connect();
        $this->induk    = $this->db->table('data_induk');
        // Query Builder
	}
	
	public function index()
	{
		return view('tutorial');
	}

	//--------------------------------------------------------------------
	public function mahasiswa()
	{
		$mahasiswa = $this->induk->where(['nomor_peserta' => '93601100262'])->get()->getRow();
		return $this->response->setJSON($mahasiswa);
	}
}
