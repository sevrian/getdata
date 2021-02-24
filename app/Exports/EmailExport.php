<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\EmailModel;

class EmailExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return EmailModel::all();
    }
}
