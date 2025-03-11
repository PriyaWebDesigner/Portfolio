<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting = [
            [
                'name' => 'Priya Naskar',
                'address' => 'amar street kolkata-00012',
                'email' => 'example@gmail.com',
                'phone' => '893627293',
                'twitter' => 'https://x.com/',
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
            ]
        ]; 
        
        SiteSetting::insert($setting);
    }
}
