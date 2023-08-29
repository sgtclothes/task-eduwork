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
      
        return view('pages.member');
    }

    public function api() 
    {
        $members = Member::all();

        
        $members = datatables()->of($members)
        ->addColumn('date', function($member) {
            return
            date('d-F-Y', strtotime($member->created_at));
        })
        ->addIndexColumn();
        return $members->make(true);
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
        $data = $request->validate([
            "name" => "required|string",
            "gender" => "required|string|in:L,P",
            "email" => "required|email",
            "phone_number" => "required|numeric",
            "address" => "required|string"
        ]);

        Member::create($data);
        return redirect()->route('members.index');
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
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            "name" => "required|string",
            "gender" => "required|string|in:L,P",
            "email" => "required|email",
            "phone_number" => "required|numeric",
            "address" => "required|string"
        ]);

        $members = Member::findOrFail($id);
        $members->update($data);
        return redirect()->route('members.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();
    }
}
