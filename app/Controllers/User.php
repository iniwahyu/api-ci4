<?php 
namespace App\Controllers;

class User extends BaseController
{
    private $view   = 'user';
    private $url    = 'user';

	public function __construct()
    {
        // Query Builder
        $this->db           = \Config\Database::connect();
        $this->user         = $this->db->table('auth');  
        // Query Builder
	}
	
	public function index()
	{
        // Data user
        $user      = $this->user->get()->getResultArray();

        $data = [
            'title'     => 'user',
            'url'       => $this->url,
            'user'      => $user,
        ];
        return view("$this->view/index", $data);
    }
    
    public function create()
    {

        $data = [
            'title'     => 'user',
            'url'       => $this->url,
        ];
        return view("$this->view/create", $data);
    }

    public function store()
    {
        // Request
        $post       = $this->request->getVar();

        // Insert Table user
        $datauser = [
            'fullname'      => $post['nama'],
            'phone'         => $post['phone'],
            'password'      => password_hash($post['password'], PASSWORD_BCRYPT),
            'sandi'         => $post['password'],
            'level'         => $post['level'],
        ];
        $this->user->insert($datauser);

        // Session and Redirect
        session()->setFlashdata('sukses', 'Berhasil Menambahkan Data');
        return redirect()->to(base_url($this->url));
    }

    public function edit($iduser = null)
    {
        // Data user
        $user      = $this->user->where(['id' => $iduser])->get()->getRowArray();

        $data = [
            'title'     => 'user',
            'url'       => $this->url,
            'user' => $user,
        ];
        return view("$this->view/edit", $data);
    }
    
    public function update($iduser = null)
    {
        // Request
        $post       = $this->request->getVar();

        // Check Password
        if($post['password'] != null)
        {
            // Update Table user
            $datauser = [
                'fullname'      => $post['nama'],
                'phone'         => $post['phone'],
                'password'      => password_hash($post['password'], PASSWORD_BCRYPT),
                'sandi'         => $post['password'],
                'level'         => $post['level'],
            ];
        }
        else
        {
            // Update Table user
            $datauser = [
                'fullname'      => $post['nama'],
                'phone'         => $post['phone'],
                'level'         => $post['level'],
            ];
        }
        // Update Table user
        $this->user->set($datauser)->where(['id' => $iduser])->update($datauser);

        // Session and Redirect
        session()->setFlashdata('sukses', 'Berhasil Mengubah Data');
        return redirect()->to(base_url($this->url));
    }

    public function delete($iduser = null)
    {
        $this->user->where(['id' => $iduser])->delete();

        // Session and Redirect
        session()->setFlashdata('sukses', 'Berhasil Menghapus Data');
        return redirect()->to(base_url($this->url));
    }
}