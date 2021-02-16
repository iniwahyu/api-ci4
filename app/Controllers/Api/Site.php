<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");

class Site extends BaseController
{
    public function __construct()
    {
        // Query Builder
        $this->db           = \Config\Database::connect();
        $this->site    = $this->db->table('site');
        // Query Builder
    }

    public function list()
    {
        // Data
        $site          = $this->site->get()->getResultArray();

        // Check Data
        if($site != null)
        {
            $response = [
                'status'    => true,
                'code'      => 200,
                'message'   => 'Data Tersedia',
                'data'      => $site,
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