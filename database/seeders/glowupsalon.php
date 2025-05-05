<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class glowupsalon extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // USERS
         DB::table('users')->insert([
            [
                'name' => 'Admin GlowUp',
                'email' => 'admin@glowup.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Salon Putri',
                'email' => 'putri@glowup.com',
                'password' => Hash::make('password'),
                'role' => 'partner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rina Customer',
                'email' => 'rina@glowup.com',
                'password' => Hash::make('password'),
                'role' => 'customer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // SALONS
        DB::table('salons')->insert([
            'user_id' => 2, // Salon Putri
            'name' => 'Salon Kecantikan Putri',
            'address' => 'Jl. Mawar No. 123, Jakarta',
            'phone' => '081234567890',
            'description' => 'Salon spesialis perawatan wajah dan rambut.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // SERVICES
        DB::table('services')->insert([
            [
                'salon_id' => 1,
                'name' => 'Facial GlowUp',
                'description' => 'Perawatan wajah untuk kulit bersinar.',
                'price' => 150000,
                'duration' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'salon_id' => 1,
                'name' => 'Hair Spa',
                'description' => 'Perawatan rambut agar sehat dan berkilau.',
                'price' => 120000,
                'duration' => 45,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // BOOKINGS
        DB::table('bookings')->insert([
            [
                'user_id' => 3, // Rina
                'service_id' => 1, // Facial GlowUp
                'booking_date' => Carbon::now()->addDays(1)->toDateString(),
                'booking_time' => '14:00:00',
                'status' => 'confirmed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'service_id' => 2, // Hair Spa
                'booking_date' => Carbon::now()->addDays(2)->toDateString(),
                'booking_time' => '10:00:00',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
