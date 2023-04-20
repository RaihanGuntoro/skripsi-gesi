<?php

namespace App\Imports;

use App\Models\pengguna;
use Maatwebsite\Excel\Concerns\ToModel;

class importpengguna implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new pengguna([
            'nama_pengguna' => $row[0],
            'nomor_pengguna' => $row[1],
            'alamat_pengguna' => $row[2],
            'umur_pengguna' => $row[3],
            'kontrasepsi_pengguna' => $row[4]
        ]);
    }
}
