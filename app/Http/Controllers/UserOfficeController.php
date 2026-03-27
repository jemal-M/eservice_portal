<?php

namespace App\Http\Controllers;

use App\Models\UserOffice;
use Illuminate\Http\Request;

class UserOfficeController extends Controller
{
    public function index()
    {
        return UserOffice::all();
    }

    public function show(UserOffice $userOffice)
    {
        return $userOffice;
    }

    public function store(Request $request)
    {
        $userOffice = UserOffice::create($request->all());

        return response()->json($userOffice, 201);
    }

    public function update(Request $request, UserOffice $userOffice)
    {
        $userOffice->update($request->all());

        return response()->json($userOffice, 200);
    }

    public function delete(UserOffice $userOffice)
    {
        $userOffice->delete();

        return response()->json(null, 204);
    }
    
}
