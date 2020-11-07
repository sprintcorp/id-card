<?php

namespace App\Imports;

use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ImportStudent implements ToModel,WithStartRow
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
        return new Student([
            'name'=>$row[0],
            'admission_no'=>$row[1],
            'class'=>$row[2],
            'parent_name'=>$row[3],
            'phone_no'=>$row[4],
            'address' => $row[5],
        ]);
    }

    
}