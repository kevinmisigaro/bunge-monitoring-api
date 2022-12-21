<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MemberOfParliament;

class MemberOfParliamentController extends Controller
{
    public function store(Request $request) 
    {
        $this->validate($request, [
            'phone' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'name' => 'required'
        ]);

        //creating a member of parliament
        MemberOfParliament::create([
            'phone' => $request->phone,
            'gender' => $request->gender,
            'email' => $request->email,
            'name' => $request->name
        ]);

        return 'created';
    }
}
