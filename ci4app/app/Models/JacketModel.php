<?php

namespace App\Models;

use CodeIgniter\Model;

class JacketModel extends Model
{
    protected $table = 'jacket';
    protected $useTimestamps = true;


    public function getJacket($slug = false)
    {
        // jika slugnya ksong maka cari semua
        if ($slug == false) {
            return $this->findAll();
        }

        // menampilkan jika terdapat slug
        return $this->where(['slug' => $slug])->first();
    }
}
