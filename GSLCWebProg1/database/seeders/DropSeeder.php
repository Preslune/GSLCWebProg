<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DropSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('drop')->insert([
                "name" => "Jousting Red Panda",
                "difficulty" => "Normal",
                "area" => 710,
                "drop" => "Kukri Knife",
                "basedroprate" => 13.575,
                "imageurl" => "https://static.wikia.nocookie.net/inflation-rpg/images/4/4e/Ene1_ba.png/revision/latest?cb=20140624140116"
        ],
        [
                "name" => "Jousting Red Panda",
                "difficulty" => "Hard",
                "area" => 710,
                "drop" => "Kukri Knife+1",
                "basedroprate" => 12,
                "imageurl" => "https://static.wikia.nocookie.net/inflation-rpg/images/4/4e/Ene1_ba.png/revision/latest?cb=20140624140116"
        ],
        [
                "name" => "White Dragon Knight",
                "difficulty" => "Normal",
                "area" => 710,
                "drop" => "Battle Axe",
                "basedroprate" => 1.629,
                "imageurl" => "https://static.wikia.nocookie.net/inflation-rpg/images/e/e8/Ene5_ba.png/revision/latest?cb=20140624140408"
        ],
        [
                "name" => "White Dragon Knight",
                "difficulty" => "Hard",
                "area" => 710,
                "drop" => "God of War Gem",
                "basedroprate" => 1.629,
                "imageurl" => "https://static.wikia.nocookie.net/inflation-rpg/images/e/e8/Ene5_ba.png/revision/latest?cb=20140624140408"
        ]
        );
    }
}
