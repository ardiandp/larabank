<?php

namespace App\Imports;

use App\Models\Bank;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BankImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Bank([
            //
            'tanggal' => $row[0],
            'keterangan' => $row[1],
            'cabang' => $row[2],
            'jumlah'=> $row[3],
            'saldo'=> $row[4],

        ]);
    }
}
