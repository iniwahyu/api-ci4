<?php 
namespace App\Controllers;

class Pendukung extends BaseController
{
    private $view   = 'pendukung';

	public function __construct()
    {
        // Query Builder
        $this->db           = \Config\Database::connect();
        // Query Builder
	}
	
	public function index()
	{
        $data = [
            'title'     => 'Pendukung',
        ];
        return view("$this->view/index", $data);
    }
    
    public function create()
    {

    }

    public function store()
    {

    }

    public function edit($idPendukung = null)
    {

    }
    
    public function update($idPendukung = null)
    {

    }

    public function delete($idPendukung = null)
    {
        
    }
}