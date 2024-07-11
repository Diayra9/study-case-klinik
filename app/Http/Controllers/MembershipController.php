<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    /*** Fungsi untuk menyimpan membership dari form blade ***/
    public function saveMembership(Request $request)
    {
        $input = $request->input();
        $membership = new Membership();
        $membership->name =  $request->name;
        $membership->no_phone =  $request->no_phone;
        $membership->email =  $request->email;
        $membership->birthday = $request->birthday;
        $membership->gender = $request->gender;
        $membership->married_status =  $request->married_status;
        $membership->address =  $request->address;
        $membership->valid_status =  $request->valid_status;
        $membership->point =  $request->point;

        $membership->save();
        return redirect('admin/view-membership');
    }

    /*** Fungsi untuk membaca list membership dari form blade ***/
    public function viewMembership(Request $request)
    {
        $memberships = Membership::get();
        return view('admin/view-membership', compact('memberships'));
    }

    public function addMembership()
    {
        return view('admin/add-membership');
    }

    /*** Fungsi untuk menghapus list membership dari form blade ***/
    public function deleteMembership(Request $request, $id)
    {
        $membership = Membership::find($id);
        $membership->delete();
        return redirect('admin/view-membership');
    }

    /*** Fungsi untuk mengedit list membership dari form blade ***/
    public function editMembership(Request $request, $id)
    {
        $membership = Membership::find($id);
        return view('admin/edit-membership', compact('membership'));
    }

    /*** Fungsi untuk mengupdate membership dari form blade ***/
    public function updateMembership(Request $request, $id)
    {
        $input = $request->input();
        $membership = Membership::find($id);

        $membership->name =  $request->name;
        $membership->no_phone =  $request->no_phone;
        $membership->email =  $request->email;
        $membership->birthday = $request->birthday;
        $membership->gender = $request->gender;
        $membership->married_status =  $request->married_status;
        $membership->address =  $request->address;
        $membership->valid_status =  $request->valid_status;
        $membership->point =  $request->point;

        $membership->save();
        return redirect('admin/view-membership');
    }
}