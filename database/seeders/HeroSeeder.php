<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hero = [
            [
                'title' => 'Web Developer',
                'image' => 'image.png',
            ]
        ]; 
        
        Hero::insert($hero);
    }
}
