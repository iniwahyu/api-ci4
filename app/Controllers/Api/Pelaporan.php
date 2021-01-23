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
        $pelaporan          = $this->pelaporan->orderBy('id', 'desc')->get()->getResultArray();

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

        // Insert Table Pelaporan
        $dataPelaporan = [
            'id_user'       => $post['id_user'],
            'image'         => $imageName,
            'latitude'      => $post['latitude'],
            'longitude'     => $post['longitude'],
            'lokasi'        => $post['lokasi'],
        ];
        $this->pelaporan->insert($dataPelaporan);

        // Move File to Folder
        $image->move('/assets/pelaporan/', $imageName);

        // Response
        $response   = [
            'status'    => true,
            'code'      => 200,
            'message'   => 'Berhasil Masuk',
            'data'      => $user,
        ];

        // Return
        return $this->response->setJSON($response);
    }
}