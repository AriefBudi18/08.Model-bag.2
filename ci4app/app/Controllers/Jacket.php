<?php

namespace App\Controllers;

use App\Models\JacketModel;

class Jacket extends BaseController
{
    protected $jacketModel;
    public function __construct()
    {
        $this->jacketModel = new JacketModel();
    }

    public function index()
    {
        // $jacket = $this->jacketModel->findAll();

        $data = [
            'title' => 'Jacket List',
            'jacket' => $this->jacketModel->getJacket()
        ];

        // $jacketModel = new \App\Models\JacketModel();
        // $jacketModel = new JacketModel();


        return view('jacket/index', $data);
    }


    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Jacket',
            'jacket' => $this->jacketModel->getJacket($slug)
        ];
        return view('jacket/detail', $data);
    }
}



/** cara konek db tanpa model
        $db = \Config\Database::connect();
        $jacket = $db->query("SELECT * FROM jacket");
        foreach ($jacket->getResultArray() as $row) {
            d($row);
        }
 */
