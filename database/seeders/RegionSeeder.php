<?php

namespace Database\Seeders;

use App\Models\Region;
use App\Models\Subcity;
use App\Models\Woreda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           Region::create(
            ['name' => 'Addis Ababa'],
            ['name' => 'Dire Dawa'],
            ['name' => 'Bahir Dar'],
            ['name' => 'Jimma'],
            ['name' => 'Gondar'],
            ['name' => 'Mekele'],
            ['name' => 'Hawassa'],
            ['name' => 'Adama'],
            ['name' => 'Dessie'],
            ['name' => 'Jijiga'],
            ['name' => 'Debre Birhan'],
            ['name' => 'Debre Markos']
        );
        $subcities = [
            'bole subcity',
            'kality subcity',
            'akaki kality subcity',
            'arada subcity',
            'nifas silk leke subcity',
            'gulele subcity',
            'korara subcity',
            'yeka subcity',
            'finfine subcity',
            'yeju genet',
            'kality subcity',

        ];
        foreach ($subcities as $subcity) {
            Subcity::create([

                'name' => $subcity,
                'region_id' => 1
            ]);
            for ($i = 0; $i <= 3; $i++) {
                Subcity::create([
                    'name' => $subcity,
                    'region_id' => $i
                ]);
            }
            for ($i = 0; $i <= 3; $i++) {
                Woreda::create([
                    'name' => $subcity,
                    'region_id' => $i
                ]);
            }
        }
    }
}
