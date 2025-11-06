<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */

        $koleje = [
            ['nazev' => "Nebelvír",'obrazek_cesta' => "cesta_ke_lvu.jpg",'barva' => "red"],
            ['nazev' => "Mrzimor",'obrazek_cesta' => "mrzimor.png",'barva' => "yellow"],
            ['nazev' => "Havraspár",'obrazek_cesta' => "havraspar.png",'barva' => "blue"],
            ['nazev' => "Zmijozel",'obrazek_cesta' => "zmijozel.png",'barva' => "green"],
        ];

        foreach($koleje as $kolej) {
            //insert vklada do db
            //House::insert($kolej);
            //
            $pripravenaKolej = House::create($kolej);
            $pripravenaKolej->body = rand(15, 350);
            $pripravenaKolej->save();
        }
    }
}
