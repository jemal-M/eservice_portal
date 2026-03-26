<?php

namespace Database\Seeders;

use App\Models\Kebele;
use App\Models\Office;
use App\Models\Subcity;
use App\Models\Woreda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Office::create(
            ['name' => 'Head Office'],
            ['name' => 'Regional Office 1'],
            ['name' => 'Regional Office 2'],
            ['name' => 'Regional Office 3'],
            ['name' => 'Regional Office 4'],
            ['name' => 'Regional Office 5'],
            ['name' => 'Regional Office 6']
            );

            foreach(Subcity::all() as $city){
                 Office::create(['name'=>$city->name.' kebele office','subcity_id'=>$city->id,]);
            }

            Office::create(['name'=>'Addis Ababa', 'type'=>'city']);
            foreach(Woreda::all() as $woreda){
                Office::create(['name'=>$woreda->name.' office', 'woreda_id'=>$woreda->id,]);
            }
            foreach(Kebele::all() as $kebele){
                Office::create(['name'=>$kebele->name.' office', 'kebele_id'=>$kebele->id,]);
            }
    }
}
