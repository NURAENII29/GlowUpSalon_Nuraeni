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
            [
                'user_id' => 1, // Salon Putri
                'address' => 'Jl. Mawar No. 123, Jakarta',
                'phone' => '081234567890',
                'image' => 'team-1.png',
                'description' => 'Salon spesialis perawatan wajah dan rambut.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2, // Salon Putri
                'address' => 'Jl. Mawar No. 123, Jakarta',
                'phone' => '081234567890',
                'image' => 'team-2.png',
                'description' => 'Salon spesialis perawatan wajah dan rambut.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3, // Salon Putri
                'address' => 'Jl. Mawar No. 123, Jakarta',
                'image' => 'team-3.png',
                'phone' => '081234567890',
                'description' => 'Salon spesialis perawatan wajah dan rambut.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3, // Salon Putri
                'address' => 'Jl. Mawar No. 123, Jakarta',
                'image' => 'team-4.png',
                'phone' => '081234567890',
                'description' => 'Salon spesialis perawatan wajah dan rambut.',
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);

        // SERVICES
        DB::table('services')->insert([
            [
                'name' => 'Facial GlowUp',
                'description' => 'Perawatan wajah untuk kulit bersinar.',
                'image' => 'services-1.jpg',
                'price' => 150000,
                'duration' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hair Spa',
                'description' => 'Perawatan rambut agar sehat dan berkilau.',
                'image' => 'services-2.jpg',
                'price' => 120000,
                'duration' => 45,
                'created_at' => now(),
                'updated_at' => now(),
            ],

             [
                'name' => 'face masking',
                'description' => 'Perawatan wajah dengan masker yang tidak membuat kita cepat tua.',
                'image' => 'services-3.jpg',
                'price' => 150000,
                'duration' => 60,
                'created_at' => now(),
                'updated_at' => now(),
             ],
             [
                'name' => 'face masking',
                'description' => 'Perawatan wajah dengan masker yang tidak membuat kita cepat tua.',
                'image' => 'services-4.jpg',
                'price' => 150000,
                'duration' => 60,
                'created_at' => now(),
                'updated_at' => now(),
             ],
              [
                'name' => 'facial therapy',
                'description' => 'Perawatan pijat wajah agar bisa melancarkan sirkulasi darah hingga bisa membuat kita 50 tahun lebih muda',
                'image' => 'services-5.jpg',
                'price' => 150000,
                'duration' => 60,
                'created_at' => now(),
                'updated_at' => now(),
             ],
              [
                'name' => 'stream bath',
                'description' => 'Perawatan mandi susu yang bisa membuat kuliat tubuh seputih dan selembut kulit bayi',
                'image' => 'services-6.jpg',
                'price' => 150000,
                'duration' => 60,
                'created_at' => now(),
                'updated_at' => now(),
             ],
              [
                'name' => 'Body Massage',
                'description' => 'Perawatan pijat tubuh agar tubuh menjadi lebih memiliki banyak tenaga',
                'image' => 'services-2.jpg',
                'price' => 150000,
                'duration' => 60,
                'created_at' => now(),
                'updated_at' => now(),
              ],
              [
                'name' => 'Stone therapy',
                'description' => 'perawatan pijat dengan batu yang bisa membuat kita lebih rileks',
                'image' => 'services-3.jpg',
                'price' => 150000,
                'duration' => 60,
                'created_at' => now(),
                'updated_at' => now(),
             ]

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
            [
                'user_id' => 3,
                'service_id' => 3, // Hair Spa
                'booking_date' => Carbon::now()->addDays(2)->toDateString(),
                'booking_time' => '11:00:00',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'user_id' => 3,
                'service_id' => 3, // Hair Spa
                'booking_date' => Carbon::now()->addDays(2)->toDateString(),
                'booking_time' => '09:00:00',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'user_id' => 3,
                'service_id' => 3, // Hair Spa
                'booking_date' => Carbon::now()->addDays(2)->toDateString(),
                'booking_time' => '14:00:00',
                'status' => 'confirmed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'service_id' => 3, // Hair Spa
                'booking_date' => Carbon::now()->addDays(2)->toDateString(),
                'booking_time' => '16:00:00',
                'status' => 'confirmed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);

         DB::table('salons_services')->insert([
                ['salon_id'=>1,'service_id'=>1,'created_at' => now(),
                'updated_at' => now(),],
                ['salon_id'=>1,'service_id'=>2,'created_at' => now(),
                'updated_at' => now(),],
                ['salon_id'=>2,'service_id'=>2,'created_at' => now(),
                'updated_at' => now(),]
         ]);
    }
}
