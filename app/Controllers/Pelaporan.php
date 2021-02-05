<?php 
namespace App\Controllers;

class Pelaporan extends BaseController
{
    private $view   = 'pelaporan';
    private $url    = 'pelaporan';

	public function __construct()
    {
        // Query Builder
        $this->db           = \Config\Database::connect();
        $this->pelaporan    = $this->db->table('pelaporan');  
        // Query Builder
	}
	
	public function index()
	{
        // Data Pendukung
        $pelaporan      = $this->pelaporan->get()->getResultArray();

        $data = [
            'title'     => 'Pelaporan',
            'url'       => $this->url,
            'pelaporan' => $pelaporan,
        ];
        return view("$this->view/index", $data);
    }
    
    public function create()
    {

        $data = [
            'title'     => 'Pelaporan',
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
        $this->pelaporan->insert($datapendukung);

        // Session and Redirect
        session()->setFlashdata('sukses', 'Berhasil Menambahkan Data');
        return redirect()->to(base_url('pelaporan'));
    }

    public function edit($idPendukung = null)
    {
        // Data Pendukung
        $pelaporan      = $this->pelaporan->where(['id' => $idPendukung])->get()->getRowArray();

        $data = [
            'title'     => 'Pelaporan',
            'url'       => $this->url,
            'pelaporan' => $pelaporan,
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
        $this->pelaporan->set($datapendukung)->where(['id' => $idPendukung])->update($datapendukung);

        // Session and Redirect
        session()->setFlashdata('sukses', 'Berhasil Mengubah Data');
        return redirect()->to(base_url('pelaporan'));
    }

    public function delete($idPendukung = null)
    {
        $this->pelaporan->where(['id' => $idPendukung])->delete();

        // Session and Redirect
        session()->setFlashdata('sukses', 'Berhasil Menghapus Data');
        return redirect()->to(base_url('pelaporan'));
    }
}