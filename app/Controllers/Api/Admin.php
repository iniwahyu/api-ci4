<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");

class Admin extends BaseController
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
        $pelaporan          = $this->pelaporan->select('pelaporan.id, fullname, phone, image, lokasi, latitude, longitude, pelaporan.created_at')->join('auth', 'auth.id = pelaporan.id_user', 'left')->orderBy('pelaporan.id', 'desc')->get()->getResultArray();

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