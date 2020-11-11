<?php

namespace App\Imports;

use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;
class ImportStudent implements ToModel,WithStartRow,WithValidation
{
    use Importable;

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
            'firstname'=>$row[0],
            'secondname'=>$row[1],
            'admission_no'=>$row[2],
            'class'=>$row[3],
            'surname'=>$row[4],
            'phone_no'=>$row[5],
            'address' => $row[6],
        ]);
    }

    public function rules(): array
    {
        return [
            'admission_no' => 'unique'
        ];
    }

    public function customValidationMessages()
    {
        return [
            'admission_no' => 'Admission number already exist',
        ];
    }

    
}