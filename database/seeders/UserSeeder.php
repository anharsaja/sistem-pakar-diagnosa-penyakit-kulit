<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => Hash::make('asd'), // Replace with a secure password
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Patient User',
                'email' => 'patient@patient.com',
                'email_verified_at' => now(),
                'password' => Hash::make('asd'), // Replace with a secure password
                'role' => 'patient',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
