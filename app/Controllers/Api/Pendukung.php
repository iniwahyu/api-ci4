<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");

class Pendukung extends BaseController
{
    public function __construct()
    {
        // Query Builder
        $this->db           = \Config\Database::connect();
        $this->pendukung    = $this->db->table('pendukung');
        // Query Builder
    }

    public function index()
    {
        if( $this->request->getVar('jenis') == null )
        {
            // Data pendukung
            $pendukung          = $this->pendukung->orderBy('id', 'desc')->get()->getResultArray();
    
            // Check pendukung
            if($pendukung != null)
            {
                $response = [
                    'status'    => true,
                    'code'      => 200,
                    'message'   => 'Data Tersedia',
                    'data'      => $pendukung,
                ];
            }
            else
            {
                $response = [
                    'status'    => false,
                    'code'      => 404,
                    'message'   => 'Data Belum Tersedia',
                    'data'      => null,
                ];
            }
    
            // Return
            return $this->response->setJSON($response);
        }
        else
        {
            // Data pendukung
            $pendukung          = $this->pendukung->where(['jenis' => $this->request->getVar('jenis')])->orderBy('id', 'desc')->get()->getResultArray();
    
            // Check pendukung
            if($pendukung != null)
            {
                $response = [
                    'status'    => true,
                    'code'      => 200,
                    'message'   => 'Data Tersedia',
                    'data'      => $pendukung,
                ];
            }
            else
            {
                $response = [
                    'status'    => false,
                    'code'      => 404,
                    'message'   => 'Data Belum Tersedia',
                    'data'      => null,
                ];
            }
    
            // Return
            return $this->response->setJSON($response);
        }
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

        // Response
        $response = [
            'status'    => true,
            'code'      => 200,
            'message'   => 'Berhasil Menambahkan Data',
            'data'      => $datapendukung,
        ];

        // Return
        return $this->response->setJSON($response);
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

        // Response
        $response = [
            'status'    => true,
            'code'      => 200,
            'message'   => 'Berhasil Mengubah Data',
            'data'      => $datapendukung,
        ];

        // Return
        return $this->response->setJSON($response);
    }

    public function delete($idPendukung = null)
    {
        $this->pelaporan->where(['id' => $idPendukung])->delete();
    }
}