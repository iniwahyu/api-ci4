<?php 
namespace App\Controllers;

class Pendukung extends BaseController
{
    private $view   = 'pendukung';
    private $url    = 'pendukung';

	public function __construct()
    {
        // Query Builder
        $this->db           = \Config\Database::connect();
        $this->pendukung    = $this->db->table('pendukung');  
        // Query Builder
	}
	
	public function index()
	{
        // Data Pendukung
        $pendukung      = $this->pendukung->get()->getResultArray();

        $data = [
            'title'     => 'Pendukung',
            'url'       => $this->url,
            'pendukung' => $pendukung,
        ];
        return view("$this->view/index", $data);
    }
    
    public function create()
    {

        $data = [
            'title'     => 'Pendukung',
            'url'       => $this->url,
        ];
        return view("$this->view/create", $data);
    }

    public function store()
    {
        // Request
        $post       = $this->request->getVar();

        // Insert Table pendukung
        $datapendukung = [
            'nama'          => $post['nama'],
            'alamat'        => $post['alamat'],
            'latitude'      => $post['latitude'],
            'longitude'     => $post['longitude'],
            'jenis'         => $post['jenis'], // Rumah Sakit/Kepolisian
        ];
        $this->pendukung->insert($datapendukung);

        // Session and Redirect
        session()->setFlashdata('sukses', 'Berhasil Menambahkan Data');
        return redirect()->to(base_url('pendukung'));
    }

    public function edit($idPendukung = null)
    {
        // Data Pendukung
        $pendukung      = $this->pendukung->where(['id' => $idPendukung])->get()->getRowArray();

        $data = [
            'title'     => 'Pendukung',
            'url'       => $this->url,
            'pendukung' => $pendukung,
        ];
        return view("$this->view/edit", $data);
    }
    
    public function update($idPendukung = null)
    {
        // Request
        $post       = $this->request->getVar();

        // Insert Table pendukung
        $datapendukung = [
            'nama'          => $post['nama'],
            'alamat'        => $post['alamat'],
            'latitude'      => $post['latitude'],
            'longitude'     => $post['longitude'],
            'jenis'         => $post['jenis'], // Rumah Sakit/Kepolisian
        ];
        $this->pendukung->set($datapendukung)->where(['id' => $idPendukung])->update($datapendukung);

        // Session and Redirect
        session()->setFlashdata('sukses', 'Berhasil Mengubah Data');
        return redirect()->to(base_url('pendukung'));
    }

    public function delete($idPendukung = null)
    {
        $this->pendukung->where(['id' => $idPendukung])->delete();

        // Session and Redirect
        session()->setFlashdata('sukses', 'Berhasil Menghapus Data');
        return redirect()->to(base_url('pendukung'));
    }
}