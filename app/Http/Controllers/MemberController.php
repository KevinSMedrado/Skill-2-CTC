<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('index', ['members' => $members]);
    }

    public function createmember()
    {
        return view('createmember');
    }


    public function store(Request $request)
    {
        $name = $request->input('fullName');
        $email= $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $age = $request->input('age');
        $professionalsummary = $request->input('professionalsummary');


        $member = [
            "fullname"=> $name,
            "email"=> $email,
            "phone"=> $phone,
            "address"=> $address,
            "age"=> $age,
            "professionalsummary"=> $professionalsummary,
        ];

        Member::create($member);

        return redirect('/index');

    }

    public function destroy(Request $request)
    {
        $id= $request->id;
        $member= Member::findOrFail($id);
        $member->delete();

        return redirect('/index');
    }

    public function update(Request $request)
    {
        $id= $request ->id;
        $member = Member::find($id);

        if($member) {
            $data = [
                'fullName' => $request ->input('fullName'),
                'email' => $request ->input('email'),
                'phone'=> $request ->input('phone'),
                'address'=> $request ->input('address'),
                'age'=> $request ->input('age'),
                'professionalsummary'=> $request ->input('professionalsummary'),
            ];

            $member->update($data);
        }


        return redirect('/index');
    }

public function edit(Request $request)
    {
        $id = $request->id;
        $member = Member::findOrFail($id);

        return view("/updateMember", ["member" => $member]);
    }
}