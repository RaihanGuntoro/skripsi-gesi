<?php

namespace App\Exports;

use App\Models\pengguna;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class exportpengguna implements FromQuery, WithMapping, WithHeadings, ShouldAutoSize
{
    use Exportable;

    public function query()
    {
        return pengguna::query();
    }
   
    public function map ($orang): array
    {
        return [
            $orang->nama_pengguna,
            $orang->kontrasepsi_pengguna,
            $orang->alamat_pengguna,
            $orang->umur_pengguna,
            $orang->nomor_pengguna,
        ];
    }
    public function headings(): array
    {
        return [
           'NAMA',
           'ALAT KONTRASEPSI',
           'ALAMAT',
           'UMUR',
           'NOMOR HP'
        ];
    }
}
