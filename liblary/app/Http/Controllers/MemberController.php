<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.member.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required'],
            'gender' => ['required'],
            'phone_number' => ['required'],
            'email' => ['required'],
            'addres' => ['required'],
    
    ]);

        Member::create($request->all());

        return redirect ('members');
    }

    public function api()
     {
        $members = Member::all();
        $datatables = datatables()->of($members)->addColumn('date', function($members) {return dateformat($members->created_at); })->addIndexColumn();

        return $datatables->make(true);
     }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        $this->validate($request,[
            'name' => ['required'],
            'gender' => ['required'],
            'phone_number' => ['required'],
            'email' => ['required'],
            'addres' => ['required'], 
    
    ]);

        $member->update($request->all());

        return redirect ('members');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        $member->delete();
    }
}
