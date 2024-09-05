<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Kategori;
use App\Models\Merek;
use App\Models\Produk;
use App\Models\Promo;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Kategori::factory('2')->create();
        // Merek::factory('2')->create();
        // Produk::factory('2')->create();
        // Promo::factory('2')->create();

        Admin::create([
            'admin' => 'admin'
        ]);
        Admin::create([
            'admin' => 'user'
        ]);

        User::create([
            'name' => 'iman',
            'no_hp' => '0895337101975',
            'alamat' => 'Nanggerang',
            'email' => 'iman@gmail.com',
            'password' => bcrypt('iman123'),
            'admin_id' => 1
        ]);
        User::create([
            'name' => 'agus',
            'no_hp' => '08922222222',
            'alamat' => 'Salawu',
            'email' => 'agus@gmail.com',
            'password' => bcrypt('agus123'),
            'admin_id' => 2
        ]);

    }
}
