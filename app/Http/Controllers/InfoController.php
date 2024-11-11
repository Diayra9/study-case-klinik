<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use App\Models\Product;
use App\Models\Reservation;
use App\Models\Treatment;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function getCounts()
    {
        $totalStock = Product::sum('stock');
        $bpomApproved = Product::where('bpom_status', '1')->count();
        $halalApproved = Product::where('halal_status', '1')->count();
        $showProducts = Product::where('show_status', '1')->count();
        $showTreatments = Treatment::where('show_status', '1')->count();
        $verifiedMemberships = Membership::where('valid_status', '1')->count();
        $attendedReservations = Reservation::where('status', '3')->count();
        $canceledReservations = Reservation::where('status', '2')->count();
        $data = [
            'total_stock' => $totalStock,
            'bpom_approved' => $bpomApproved,
            'halal_approved' => $halalApproved,
            'show_products' => $showProducts,
            'show_treatments' => $showTreatments,
            'verified_memberships' => $verifiedMemberships,
            'attended_reservations' => $attendedReservations,
            'canceled_reservations' => $canceledReservations,
        ];

        return view('admin.morePage.information', compact('data'));
    }
}
