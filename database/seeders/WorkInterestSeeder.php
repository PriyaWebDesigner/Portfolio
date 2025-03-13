<?php

namespace Database\Seeders;

use App\Models\WorkInterest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkInterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $workInterest = [
            [
                'title' => 'I am Available to work as a freelancer',
                'image' => 'image.png',
            ]
        ]; 
        
        WorkInterest::insert($workInterest);
    }
}
