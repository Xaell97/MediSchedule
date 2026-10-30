<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // 1. Cria o Administrador padrão.
        User::firstOrCreate(
            ['email' => 'admin@medischedule.test'],
            [
                'name' => 'Administrador Geral',
                'password' => 'admin123', // Será criptografado pelo cast da Model User
                'cpf' => '00000000000',
                'phone' => '(00) 00000-0000',
                'role' => 'admin',
                'status' => 'active',
            ]
        );

        // 2. Cria um Paciente de teste.
        User::firstOrCreate(
            ['email' => 'paciente@medischedule.test'],
            [
                'name' => 'João da Silva',
                'password' => 'paciente123',
                'cpf' => '12345678901',
                'phone' => '(11) 97777-8888',
                'role' => 'patient',
                'status' => 'active',
            ]
        );

        // 3. Executa os seeders de Especialidades e Médicos.
        $this->call([
            SpecialtySeeder::class,
            DoctorSeeder::class,
        ]);
    }
}
