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
            'firstname'=>$row[0],
            'lastname'=>$row[1],
            'staff_id'=>$row[2],
            'class'=>$row[3],
            'address'=>$row[4],
            'phone'=>$row[5],
            'department'=>$row[6],
            'designation'=>$row[7]
        ]);
    }
}