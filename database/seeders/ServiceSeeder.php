<?php

namespace Database\Seeders;

use App\Models\ServiceCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $identity=ServiceCategory::create([
            'name' => 'Identity Management',
            'description' => 'Services related to identity and access management'
        ]);
        $identity->services()->createMany([
            [
                'name' => 'User Registration',
                'description' => 'Register new users',
                'url' => '/register'
            ],
            [
                'name' => 'User Login',
                'description' => 'Login existing users',
                'url' => '/login'
            ],
            [
                'name' => 'Password Reset',
                'description' => 'Reset user password',
                'url' => '/password/reset'
            ]
        ]);
    }
}
