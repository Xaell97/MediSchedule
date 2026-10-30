<?php

namespace Database\Seeders;

use App\Models\Specialty;
use Illuminate\Database\Seeder;

class SpecialtySeeder extends Seeder
{
    public function run(): void
    {
        $specialties = [
            ['name' => 'Cardiologia', 'description' => 'Especialidade médica que cuida do coração e do sistema circulatório.'],
            ['name' => 'Dermatologia', 'description' => 'Especialidade médica focada no diagnóstico e tratamento da pele, cabelos e unhas.'],
            ['name' => 'Ortopedia', 'description' => 'Cuida das doenças e lesões do sistema musculoesquelético (ossos, articulações e músculos).'],
            ['name' => 'Pediatria', 'description' => 'Especialidade focada na assistência a crianças e adolescentes.'],
            ['name' => 'Ginecologia', 'description' => 'Especialidade voltada à saúde do aparelho reprodutor feminino.'],
        ];

        foreach ($specialties as $specialty) {
            Specialty::firstOrCreate(['name' => $specialty['name']], $specialty);
        }
    }
}
