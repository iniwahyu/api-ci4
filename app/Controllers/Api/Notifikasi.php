<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");

class Notifikasi extends BaseController
{
    public function __construct()
    {
        // Query Builder
        $this->db           = \Config\Database::connect();
        $this->notifikasi    = $this->db->table('notifikasi');
        // Query Builder
    }

    public function list($idUser = null)
    {
        // Data
        $notifikasi          = $this->notifikasi->where(['id_user' => $idUser])->get()->getResultArray();

        // Check Data
        if($notifikasi != null)
        {
            $response = [
                'status'    => true,
                'code'      => 200,
                'message'   => 'Data Tersedia',
                'data'      => $notifikasi,
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

    public function store()
    {
        // Request
        $post       = $this->request->getVar();

        // Insert Table Pelaporan
        $dataNotifikasi = [
            'id_user'       => $post['id_user'],
            'keterangan'    => $post['keterangan'],
        ];
        $this->notifikasi->insert($dataNotifikasi);
        // Response
        $response   = [
            'status'    => true,
            'code'      => 200,
            'message'   => '',
            'data'      => $dataNotifikasi,
        ];

        // Return
        return $this->response->setJSON($response);
    }
}