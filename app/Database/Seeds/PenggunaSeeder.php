<?php

namespace App\Database\Seeds;

use App\Models\Pengguna;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
        [
            'nama'      =>'owner',
            'password'  =>md5('1200414')
        ],
        [
            'nama'      =>'creator',
            'password'  =>md5('23456')
        ],
        [
            'nama'      =>'12200414',
            'password'  =>md5('Michaelprogrammer')  
        ]
        ];

        
        $p = new Pengguna();
        $p->insertBatch($data); 
    }
}
