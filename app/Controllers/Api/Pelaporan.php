<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");

class Pelaporan extends BaseController
{
    public function __construct()
    {
        // Query Builder
        $this->db           = \Config\Database::connect();
        $this->pelaporan    = $this->db->table('pelaporan');
        // Query Builder
    }

    public function index()
    {
        // Data Pelaporan
        $pelaporan          = $this->pelaporan->select('auth.fullname, pelaporan.*')->join('auth', 'auth.id = pelaporan.id_user', 'left')->orderBy('pelaporan.id', 'desc')->get()->getResultArray();

        // Check Pelaporan
        if($pelaporan != null)
        {
            $response = [
                'status'    => true,
                'code'      => 200,
                'message'   => 'Data Tersedia',
                'data'      => $pelaporan,
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

    public function user($idUser = null)
    {
        // Data Pelaporan
        $pelaporan          = $this->pelaporan
                                    ->select('auth.fullname, pelaporan.*')
                                    ->join('auth', 'auth.id = pelaporan.id_user')
                                    ->where(['pelaporan.id_user' => $idUser])
                                    ->orderBy('pelaporan.id', 'desc')
                                    ->get()->getResultArray();

        // Check Pelaporan
        if($pelaporan != null)
        {
            $response = [
                'status'    => true,
                'code'      => 200,
                'message'   => 'Data Tersedia',
                'data'      => $pelaporan,
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

    public function lapor()
    {
        // Request
        $post       = $this->request->getVar();

        // Request Image
        $image      = $this->request->getFile('image');

        // Change Name
        $imageName  = uuidv4().".".$image->getClientExtension();
        // $imageName  = uuidv4()."-".$image->getClientName();

        // Insert Table Pelaporan
        $dataPelaporan = [
            'id_user'       => $post['id_user'],
            'image'         => $imageName,
            'latitude'      => $post['latitude'],
            'longitude'     => $post['longitude'],
            'lokasi'        => $post['lokasi'],
            'lokasi_tambahan'   => $post['lokasi_tambahan']
        ];
        $this->pelaporan->insert($dataPelaporan);

        // Move File to Folder
        $image->move('assets/pelaporan/', $imageName);
        // $image->move(WRIEPATH . 'assets/pelaporan/', $imageName);

        // Response
        $response   = [
            'status'    => true,
            'code'      => 200,
            'message'   => 'Berhasil Masuk',
            'data'      => $dataPelaporan,
        ];

        // Return
        return $this->response->setJSON($response);
    }

    public function show($idPelaporan = null)
    {
        if ($idPelaporan != null)
        {
            $pelaporan = $this->pelaporan->where(['id' => $idPelaporan])->get()->getRowArray();
            if ($pelaporan != null)
            {
                $response = [
                    'status'    => true,
                    'code'      => 200,
                    'message'   => 'Data Tersedia',
                    'data'      => $pelaporan,
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

    public function update($idPelaporan = null)
    {
        $post = $this->request->getVar();
        $data = [
            // 'lokasi'        => $post['lokasi'],
            'status'        => $post['status'],
            'keterangan'    => $post['keterangan'],
        ];
        $this->pelaporan->set($data)->where(['id' => $idPelaporan])->update();

        $response = [
            'status'    => true,
            'code'      => 200,
            'message'   => 'Berhasil Update Data',
            'data'      => $data,
        ];

        // Return
        return $this->response->setJSON($response);
    }

    public function delete($idPelaporan = null)
    {
        if ($idPelaporan != null)
        {
            $this->pelaporan->where(['id' => $idPelaporan])->delete();
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

    public function ambulance($idAmbulance = null)
    {
        // Data Pelaporan
        $pelaporan          = $this->pelaporan
                                    ->select('auth.id AS id_ambulance, auth.fullname, fullname, phone, image, latitude, longitude, lokasi, lokasi_tambahan, status, keterangan, pelaporan.created_at')
                                    ->join('auth', 'auth.id = pelaporan.id_ambulance')
                                    ->where(['pelaporan.id_ambulance' => $idAmbulance])
                                    ->orderBy('pelaporan.id', 'desc')
                                    ->get()->getResultArray();

        // Check Pelaporan
        if($pelaporan != null)
        {
            $response = [
                'status'    => true,
                'code'      => 200,
                'message'   => 'Data Tersedia',
                'data'      => $pelaporan,
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
}