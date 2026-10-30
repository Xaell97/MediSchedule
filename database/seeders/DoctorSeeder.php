<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Specialty;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    public function run(): void
    {
        $cardiologia = Specialty::where('name', 'Cardiologia')->firstOrFail();

        $pediatria = Specialty::where('name', 'Pediatria')->firstOrFail();

        $ortopedia = Specialty::where('name', 'Ortopedia')->firstOrFail();

        $doctors = [
            [
                'specialty_id' => $cardiologia?->id ?? 1,
                'name' => 'Dr. Carlos Eduardo Silva',
                'crm' => 'CRM/SP 123456',
                'phone' => '(11) 98765-4321',
                'work_start_time' => '08:00:00',
                'work_end_time' => '17:00:00',
                'slot_duration' => 30,
                'is_active' => true,
            ],
            [
                'specialty_id' => $pediatria?->id ?? 4,
                'name' => 'Dra. Ana Beatris Souza',
                'crm' => 'CRM/SP 654321',
                'phone' => '(11) 91234-5678',
                'work_start_time' => '09:00:00',
                'work_end_time' => '18:00:00',
                'slot_duration' => 40,
                'is_active' => true,
            ],
            [
                'specialty_id' => $ortopedia?->id ?? 3,
                'name' => 'Dr. Roberto Mendes',
                'crm' => 'CRM/RJ 789101',
                'phone' => '(21) 99887-6655',
                'work_start_time' => '08:00:00',
                'work_end_time' => '12:00:00',
                'slot_duration' => 20,
                'is_active' => true,
            ],
        ];

        foreach ($doctors as $doctor) {
            Doctor::firstOrCreate(['crm' => $doctor['crm']], $doctor);
        }
    }
}
