<?php

namespace App\Imports;

use App\Staff;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ImportStaff implements ToModel,WithStartRow,WithValidation
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

    public function rules(): array
    {
        return [
            'staff_id' => 'unique',
        ];
    }
}