<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clinic;

class ClinicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $caracter1 = '0123456789';
        $longitud1 = 6;

        for ($i = 1; $i < 26; $i++) {
            $strval = strval($i);
            $telf = substr(str_shuffle($caracter1), 0, $longitud1);
            $clinic = new Clinic();
            $clinic->name = 'Clínica ' . $strval;
            $clinic->email = 'clínica' . $strval . '@clinics.com';
            $clinic->telf = '942' . $telf;

            $clinic->save();
        }
    }
}
