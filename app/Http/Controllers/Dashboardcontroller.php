<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Subcity;
use App\Models\User;
use App\Models\Woreda;
use Illuminate\Http\Request;

class Dashboardcontroller extends Controller
{
     public function analysis()
    {
      $countusers=User::count();
      $countregions=Region::count();
      $countworedas=Woreda::count();
      $countsubcity=Subcity::count();

      return response()->json([
        'countregions'=>$countregions,
        'countworedas'=>$countworedas,
        'countsubcity'=>$countsubcity,
        'countusers'=>$countusers,
      ]);    
    }
    public function serviceByOffie(){
        $users = User::with('region','subcity','woreda')->get();
        // $users->load('region');
        // $users->load('woreda');
        // $users->load('subcity');

        return response()->json($users);
    
    }

    public function serviceByOffieFilter(Request $request){
        $users = User::with('region', 'subcity', 'woreda')
        ->where('region_id',$request->region_id)
        ->where('woreda_id',$request->woreda_id)
        ->where('subcity_id',$request->subcity_id)->get();
        // $users->load('region');
        // $users->load('woreda');
        // $users->load('subcity');

        return response()->json($users);

    }

    public function getAddminByRegion(){
        $users = User::with('region', 'subcity', 'woreda')
        ->where('role', 'admin')
        ->get();
        return response()->json($users);
    }

    public function getAddminByRegionFilter(Request $request){
        $users = User::with('region', 'subcity', 'woreda')
        ->where('role', 'admin')
        ->where('region_id', $request->region_id)
        ->get();
        return response()->json($users);
    }

    public function getAddminByRegionFilterSubcity(Request $request){
        $users = User::with('region', 'subcity', 'woreda')
        ->where('role', 'admin')
        ->where('region_id', $request->region_id)
        ->where('subcity_id', $request->subcity_id)
        ->get();
        return response()->json($users);
    }

    public function getAddminByRegionFilterWoreda(Request $request){
        $users = User::with('region', 'subcity', 'woreda')
        ->where('role', 'admin')
        ->where('region_id', $request->region_id)
        ->where('woreda_id', $request->woreda_id)
        ->get();
        return response()->json($users);
    }

    public function getAddminByRegionFilterSubcityWoreda(Request $request){
        $users = User::with('region', 'subcity', 'woreda')
        ->where('role', 'admin')
        ->where('region_id', $request->region_id)
        ->where('woreda_id', $request->woreda_id)
        ->where('subcity_id', $request->subcity_id)
        ->get();
        return response()->json($users);
    }

    public function getAddminByRegionFilterSubcityWoredaUser(Request $request){
        $users = User::with('region', 'subcity', 'woreda')
        ->where('role', 'admin')
        ->where('region_id', $request->region_id)
        ->where('woreda_id', $request->woreda_id)
        ->where('subcity_id', $request->subcity_id)
        ->where('id', $request->user_id)
        ->get();
        return response()->json($users);
    }

    public function getAddminByRegionFilterSubcityWoredaUserRegion(Request $request){
        $users = User::with('region', 'subcity', 'woreda')
        ->where('role', 'admin')
        ->where('region_id', $request->region_id)
        ->where('woreda_id', $request->woreda_id)
        ->where('subcity_id', $request->subcity_id)
        ->where('id', $request->user_id)
        ->where('region_id', $request->region_id)
        ->get();
        return response()->json($users);
    }

    public function getAddminByRegionFilterSubcityWoredaUserRegionUpdate(Request $request){
        $users = User::with('region', 'subcity', 'woreda')
        ->where('role', 'admin')
        ->where('region_id', $request->region_id)
        ->where('woreda_id', $request->woreda_id)
        ->where('subcity_id', $request->subcity_id)
        ->where('id', $request->user_id)
        ->where('region_id', $request->region_id)
        ->update([
            'region_id'=> $request->region_id,
            'woreda_id'=> $request->woreda_id,
            'subcity_id'=> $request->subcity_id,
        ]);
        return response()->json($users);
    }

    public function getAddminByRegionFilterSubcityWoredaUserRegionDelete(Request $request){
        $users = User::with('region', 'subcity', 'woreda')
        ->where('role', 'admin')
        ->where('region_id', $request->region_id)
        ->where('woreda_id', $request->woreda_id)
        ->where('subcity_id', $request->subcity_id)
        ->where('id', $request->user_id)
        ->where('region_id', $request->region_id)
        ->delete();
        return response()->json($users);
    }

    public function getAddminByRegionFilterSubcityWoredaUserRegionGet(Request $request){
        $users = User::with('region', 'subcity', 'woreda')
        ->where('role', 'admin')
        ->where('region_id', $request->region_id)
        ->where('woreda_id', $request->woreda_id)
        ->where('subcity_id', $request->subcity_id)
        ->where('id', $request->user_id)
        ->where('region_id', $request->region_id)
        ->get();
        return response()->json($users);
    }

    public function getAddminByRegionFilterSubcityWoredaUserRegionGetAll(){
        $users = User::with('region', 'subcity', 'woreda')
        ->where('role', 'admin')
        ->get();
        return response()->json($users);
    }

    public function getAddminByRegionFilterSubcityWoredaUserRegionGetAllWithRegion(){
        $users = User::with('region', 'subcity', 'woreda')
        ->where('role', 'admin')
        ->get();
        return response()->json($users);
    }
}
