<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");

class Auth extends BaseController
{
    public function __construct()
    {
        // Query Builder
        $this->db           = \Config\Database::connect();
        $this->auth         = $this->db->table('auth');
        // Query Builder
    }

    public function user()
    {
        $user = $this->auth->get()->getResultArray();
        $response = [
            'data'      => $user,
        ];

        return $this->response->setJSON($response);
    }

    public function signin()
    {
        // Request
        $post       = $this->request->getVar();

        // Check User
        $user       = $this->auth->where(['phone'   => $post['phone']])->get()->getRowArray();

        if($user != null)
        {
            // Check Password
            if(password_verify($post['password'], $user['password']))
            {
                $response   = [
                    'status'    => true,
                    'code'      => 200,
                    'message'   => 'Berhasil Masuk',
                    'data'      => $user,
                ];
            }
            else
            {
                $response   = [
                    'status'    => false,
                    'code'      => 401,
                    'message'   => 'Kata Sandi Salah',
                ];
            }
        }
        else
        {
            $response   = [
                'status'    => false,
                'code'      => 404,
                'message'   => 'Akun Tidak Ditemukan',
            ];
        }

        // Return
        return $this->response->setJSON($response);
    }

    public function signup()
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

    public function profil($idUser = null)
    {
        // Jika iduser tidak null, maka melanjutkan proses selanjutnya
        if($idUser != null)
        {
            // Check Auth
            // Jika Auth null maka akan mengirimkan response akun tidak ditemukan
            $auth       = $this->auth->where(['id' => $idUser])->get()->getRow();
    
            if($auth != null)
            {
                // Response
                $response = [
                    'status'    => true,
                    'code'      => 200,
                    'data'      => $auth,
                    'message'   => 'Akun Tersedia',
                ];
            }
            else
            {
                // Response
                $response = [
                    'status'    => false,
                    'code'      => 404,
                    'message'   => 'Akun Tidak Tersedia',
                ];
            }
        }
        else
        {
            // Response
            $response = [
                'status'    => false,
                'code'      => 404,
                'message'   => 'Akun Tidak Tersedia',
            ];
        }

        // Return
        return $this->response->setJSON($response);
    }

    public function profilUpdate($idUser = null)
    {
        // Jika iduser tidak null, maka melanjutkan proses selanjutnya
        if($idUser != null)
        {
            // Request
            $post       = $this->request->getVar();
            
            // Update Table auth
            $dataAuth = [
                'fullname'  => $post['fullname'],
                'phone'     => $post['phone'],
            ];
            $this->auth->set($dataAuth)->where(['id' => $idUser])->update();

            // Response
            $response = [
                'status'    => true,
                'code'      => 200,
                'message'   => 'Berhasil Melakukan Perubahan',
            ];
        }
        else
        {
            // Response
            $response = [
                'status'    => false,
                'code'      => 401,
                'message'   => 'Gagal Melakukan Perubahan',
            ];
        }

        // Return
        return $this->response->setJSON($response);       
    }

    public function sandiUpdate($idUser = null)
    {
        // Jika iduser tidak null, maka melanjutkan proses selanjutnya
        if($idUser != null)
        {
            // Request
            $post       = $this->request->getVar();
            
            // Update Table auth
            $dataAuth = [
                'password'      => password_hash($post['password'], PASSWORD_BCRYPT),
                'sandi'         => $post['password'],
            ];
            $this->auth->set($dataAuth)->where(['id' => $idUser])->update();

            // Response
            $response = [
                'status'    => true,
                'code'      => 200,
                'message'   => 'Berhasil Melakukan Perubahan',
            ];
        }
        else
        {
            // Response
            $response = [
                'status'    => false,
                'code'      => 401,
                'message'   => 'Gagal Melakukan Perubahan',
            ];
        }

        // Return
        return $this->response->setJSON($response);    
    }

    public function identitas($idUser = null)
    {
        // Request
        $post       = $this->request->getVar();

        // Request Image
        $image      = $this->request->getFile('image');

        // Change Name
        $imageName  = uuidv4().".".$image->getClientExtension();

        // Insert Table Pelaporan
        $dataAuth = [
            'ktp'           => $imageName,
        ];
        $this->auth->set($dataAuth)->where(['id' => $idUser])->update();

        // Move File to Folder
        $image->move('/assets/profil/', $imageName);

        // Response
        $response   = [
            'status'    => true,
            'code'      => 200,
            'message'   => 'Berhasil Verifikasi',
            'data'      => $user,
        ];

        // Return
        return $this->response->setJSON($response);
    }
}