<?php

namespace App\Imports;

use App\Staff;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ImportStaff implements ToModel,WithStartRow
{
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Staff([
            'name'=>$row[0],
            'staff_id'=>$row[1],
            'class'=>$row[2],
            'address'=>$row[3],
            'phone'=>$row[4],
            'department'=>$row[5],
            'designation'=>$row[6]
        ]);
    }
}