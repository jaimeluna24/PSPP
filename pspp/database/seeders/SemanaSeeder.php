<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Semana;
use Illuminate\Support\Facades\DB;
use DateTime;
use DateInterval;

class SemanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $fecha_inicio = new DateTime('2024-09-23'); // Fecha de inicio de la primera semana
        $intervalo = new DateInterval('P7D'); // Intervalo de 7 días

        for ($i = 1; $i <= 20; $i++) {
            $fecha_fin = clone $fecha_inicio;
            $fecha_fin->add($intervalo)->sub(new DateInterval('P1D')); // Restar 1 día para obtener la fecha de fin

            DB::table('semanas')->insert([
                'semana' => "Semana #$i",
                'fecha_inicio' => $fecha_inicio->format('Y-m-d'),
                'fecha_fin' => $fecha_fin->format('Y-m-d'),
            ]);

            // Avanzar a la siguiente semana
            $fecha_inicio->add($intervalo);
        }
    }
}
