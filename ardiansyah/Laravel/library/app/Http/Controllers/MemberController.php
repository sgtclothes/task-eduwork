<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request->gender) {
            # code...
            $datas = Member::where('gender', $request->gender)->get();
        } else {
            $datas = Member::all();
        }

        $datatables = datatables()->of($datas)->addIndexColumn();

        // return $datatables->make(true);

        return view('admin.member.index');
    }



    public function api()
    {

        $members = Member::all();
        $datatables = datatables()->of($members)->addIndexColumn();

        return $datatables->make(true);
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
        // validasi isian di form tidak boleh kosong (double protection)
        $this->validate($request, [
            'name' => ['required'],
            'gender' => ['required'],
            'phone_number' => ['required'],
            'address' => ['required'],
            'email' => ['required'],
        ]);

        // cara pertama save sebuah data
        // $catalog = new Catalog;
        // $catalog->name = $request->name;
        // $catalog->save();

        // cara kedua save sebuah data tapi ada yg harus ditambahkan di model
        Member::create($request->all());

        return redirect('members');
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
        // validasi isian di form tidak boleh kosong (double protection)
        $this->validate($request, [
            'name' => ['required'],
            'gender' => ['required'],
            'phone_number' => ['required'],
            'address' => ['required'],
            'email' => ['required'],
        ]);

        // cara pertama save sebuah data
        // $catalog = new Catalog;
        // $catalog->name = $request->name;
        // $catalog->save();

        // cara kedua save sebuah data tapi ada yg harus ditambahkan di model
        $member->update($request->all());

        return redirect('members');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        $member->delete();
    }
}