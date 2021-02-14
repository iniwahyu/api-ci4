<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");

class User extends BaseController
{
    public function __construct()
    {
        // Query Builder
        $this->db           = \Config\Database::connect();
        $this->auth    = $this->db->table('auth');
        // Query Builder
    }

    public function index()
    {
        // Data
        $auth          = $this->auth->get()->getResultArray();

        // Check Data
        if($auth != null)
        {
            $response = [
                'status'    => true,
                'code'      => 200,
                'message'   => 'Data Tersedia',
                'data'      => $auth,
            ];
        }
        else
        {
            $response = [
                'status'    => false,
                'code'      => 404,
                'message'   => 'Data Belum Tersedia',
            ];
        }

        // Return
        return $this->response->setJSON($response);
    }

    public function ambulance()
    {
        $user       = $this->auth->where(['level' => 'Ambulance'])->get()->getResultArray();

        // Response
        $response = [
            'status'    => true,
            'code'      => 200,
            'message'   => 'Data Tersedia',
            'data'      => $user,
        ];
        
        // Return
        return $this->response->setJSON($response);
    }

    public function store()
    {
        // Request
        $post       = $this->request->getVar();

        // Insert table users
        $dataSignup = [
            'fullname'          => $this->request->getVar('fullname'),
            'phone'             => $this->request->getVar('phone'),
            'password'          => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'sandi'             => $this->request->getVar('password'),
        ];
        $this->auth->insert($dataSignup);

        // Response
        $response = [
            'status'    => true,
            'code'      => 200,
            'message'   => 'Berhasil Mendaftar',
            'data'      => $dataSignup,
        ];
        
        // Return
        return $this->response->setJSON($response);
    }

    public function show($idUser = null)
    {
        if ($idUser != null)
        {
            $auth       = $this->auth->where(['id' => $idUser])->get()->getRowArray();
            $response = [
                'status'    => true,
                'code'      => 200,
                'message'   => 'Data Tersedia',
                'data'      => $auth,
            ];
        }
        else
        {
            $response = [
                'status'    => false,
                'code'      => 404,
                'message'   => 'Data Belum Tersedia',
            ];
        }

        return $this->response->setJSON($response);
    }

    public function update($idUser = null)
    {
        if ($idUser != null)
        {
            $auth       = $this->auth->where(['id' => $idUser])->get()->getRowArray();
            $post       = $this->request->getVar();
            if ($post['password'] == null)
            {
                $dataAuth   = [
                    'fullname'      => $post['fullname'],
                ];
                $this->auth->set($dataAuth)->where(['id' => $idUser])->update();
                $response = [
                    'status'    => true,
                    'code'      => 200,
                    'message'   => 'Berhasil Update',
                    'data'      => $dataAuth,
                ];
            }
            else
            {
                $dataAuth   = [
                    'fullname'      => $post['fullname'],
                    'password'      => password_hash($post['password'], PASSWORD_BCRYPT),
                    'sandi'         => $post['password'],
                ];
                $this->auth->set($dataAuth)->where(['id' => $idUser])->update();
                $response = [
                    'status'    => true,
                    'code'      => 200,
                    'message'   => 'Berhasil Update',
                    'data'      => $dataAuth,
                ];
            }
        }
        else
        {
            $response = [
                'status'    => false,
                'code'      => 404,
                'message'   => 'Data Belum Tersedia',
            ];
        }

        return $this->response->setJSON($response);
    }

    public function delete($idUser = null)
    {
        if ($idUser != null)
        {
            $this->auth->where(['id' => $idUser])->delete();
            $response = [
                'status'    => true,
                'code'      => 200,
                'message'   => 'Berhasil Hapus',
            ];
        }
        else
        {
            $response = [
                'status'    => false,
                'code'      => 404,
                'message'   => 'Data Belum Tersedia',
            ];
        }

        return $this->response->setJSON($response);
    }
}