<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Validation\ValidationException;

class MembershipController extends Controller
{
    /*** Fungsi untuk membaca list membership dari form blade  /memberships ***/
    public function index()
    {
        $memberships = Membership::paginate(10);
        return view('admin.membership.view-membership', compact('memberships'));
    }

    /*** Fungsi untuk membaca file addMembership  /memberships/create ***/
    public function create()
    {
        return view('admin.membership.add-membership');
    }

    /*** Fungsi untuk menyimpan membership dari form blade ***/
    public function store(Request $request)
    {
        $input = $request->input();
        $membership = new Membership();
        $membership->name =  $request->name;
        $membership->no_phone =  $request->no_phone;
        $membership->email =  $request->email;
        $membership->birthday = $request->birthday;
        $membership->gender = $request->gender;
        $membership->address =  $request->address;
        $membership->valid_status =  $request->valid_status;
        $membership->point =  $request->point;

        $membership->save();
        return redirect()->route('memberships.index');
    }

    /*** Fungsi untuk mengedit list membership dari form blade ***/
    public function edit(Request $request, $id)
    {
        $membership = Membership::find($id);
        return view('admin.membership.edit-membership', compact('membership'));
    }

    /*** Fungsi untuk mengupdate membership dari form blade ***/
    public function update(Request $request, $id)
    {
        $input = $request->input();
        $membership = Membership::find($id);

        $membership->name =  $request->name;
        $membership->no_phone =  $request->no_phone;
        $membership->email =  $request->email;
        $membership->birthday = $request->birthday;
        $membership->gender = $request->gender;
        $membership->address =  $request->address;
        $membership->valid_status =  $request->valid_status;
        $membership->point =  $request->point;

        $membership->save();
        return redirect()->route('memberships.index');
    }

    /*** Fungsi untuk menghapus list membership dari form blade ***/
    public function destroy($id)
    {
        $membership = Membership::find($id);
        $membership->delete();
        return redirect()->route('memberships.index');
    }

    /*** Fungsi untuk membaca page Membership ***/
    public function addNewMembership()
    {
        return view('homepage.page.membership');
    }

    /*** Fungsi untuk menyimpan membership dari page membership homepage ***/
    public function storeUser(Request $request)
    {
        $birthday = Carbon::parse($request->birthday);
        $age = Carbon::now()->diffInYears($birthday);

        if ($age < 18) {
            throw ValidationException::withMessages([
                'birthday' => 'You must be at least 18 years old to register.',
            ]);
        }

        $input = $request->input();
        $membership = new Membership();
        $membership->name =  $request->name;
        $membership->no_phone =  $request->no_phone;
        $membership->email =  $request->email;
        $membership->birthday = $request->birthday;
        $membership->gender = $request->gender;
        $membership->address =  $request->address;
        $membership->valid_status =  $request->valid_status;
        $membership->point =  $request->point;

        $membership->save();
        if ($request->expectsJson()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Membership registered successfully!',
            ], 201);
        } else {
            return back()->with('success', 'Registered Membership successfully!');
        }
    }
}
