<?php

namespace App\Exports;

use App\Models\pengguna;
use Maatwebsite\Excel\Concerns\FromCollection;

class exportpengguna implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return pengguna::all();
    }
}
