<?php

namespace Database\Seeders;

use App\Models\Office;
use App\Models\Service;
use App\Models\Workflow;
use App\Models\WorkflowStep;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkflowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $service=Service::where('name','ID Card Identification')->first();
        $workflow=Workflow::create(['name' => 'ID Card Identification']);
        $service->workflows()->create(['name' => 'ID Card Identification Reprint']);
        $kebeleOffice=Office::where('type','kebele')->first();
        $woredaOffice=Office::where('type','woreda')->first();
        $subcityOffice=Office::where('type','subcity')->first();
        $step1=WorkflowStep::create([
            'workflow_id'=>$workflow->id,
            'office_id'=>$kebeleOffice->id,
            'step'=>1,
            'required'=>true
        ]);
    }
}
