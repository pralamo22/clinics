<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $caracter1 = '0123456789';
        $longitud1 = 8;
        $caracter2 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $longitud2 = 1;
        $longitud3 = 6;

        for ($i = 1; $i < 26; $i++) {

            $dni = substr(str_shuffle($caracter1), 0, $longitud1);
            $dniletra = substr(str_shuffle($caracter2), 0, $longitud2);
            $telf = substr(str_shuffle($caracter1), 0, $longitud3);
            $strval = strval($i);

            $employee = new Employee();
            $employee->name = "Empleado" . $strval;
            $employee->surname = "Apellido" . $strval;
            $employee->dni = $dni . $dniletra;
            $employee->clinica = "clinica" . $strval;
            $employee->telf = "942" . $telf;
            $employee->email = "empleado" . $strval . "@clinics.com";
            $employee->save();
        }
    }
}
