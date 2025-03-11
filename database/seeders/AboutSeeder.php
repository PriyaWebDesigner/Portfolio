<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $about = [
            [
                'image' => 'image.png',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt sint iste voluptas dolores excepturi eaque reprehenderit veritatis iure eveniet voluptatum',
            ] 
        ];
        About::insert($about);
    }
}
