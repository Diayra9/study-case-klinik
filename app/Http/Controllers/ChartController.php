<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Membership;
use App\Models\Product;
use App\Models\Treatment;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChartController extends Controller
{
    /*** Fungsi untuk membuat grafik ***/
    public function Report()
    {
        // Jumlah reservasi per bulan berdasarkan kolom 'date'
        $reservationByMonth = Reservation::select(DB::raw('MONTH(date) as month'), DB::raw('COUNT(*) as count'))
            ->whereYear('date', date('Y'))
            ->groupBy(DB::raw('MONTH(date)'))
            ->get();

        // Jumlah membership per bulan berdasarkan kolom 'created_at'
        $membershipByMonth = Membership::select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as count'))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->get();
        
        // Menghitung total product
        $totalProducts = Product::count();
        $totalTreatments = Treatment::count();

        // Mendapatkan daftar bulan
        $months = $reservationByMonth->pluck('month')->merge($membershipByMonth->pluck('month'))->unique()->sort();
        $labels = $months->map(function ($month) {
            return Carbon::create()->month($month)->format('F'); // Mengubah angka bulan menjadi nama bulan
        });

        // Menyiapkan data
        $reservationData = [];
        foreach ($months as $month) {
            $reservationData[] = $reservationByMonth->where('month', $month)->value('count') ?? 0;
        }
        $membershipData = [];
        foreach ($months as $month) {
            $membershipData[] = $membershipByMonth->where('month', $month)->value('count') ?? 0;
        }

        $labels2 = ['Jumlah Produk', 'Jumlah Treatment'];
        $productData = [$totalProducts, $totalTreatments];

        $datasets = [
            [
                'label' => 'Jumlah Reservasi',
                'data' => $reservationData,
                'backgroundColor' => 'rgba(210, 214, 222, 0.9)',
                'borderColor' => 'rgba(210, 214, 222, 1)',
                'borderWidth' => 1,
                'pointColor' => 'rgba(210, 214, 222, 1)',
                'pointStrokeColor' => '#c1c7d1',
                'pointHighlightFill' => '#fff',
                'pointHighlightStroke' => 'rgba(220,220,220,1)',
            ],
            [
                'label' => 'Jumlah Membership',
                'data' => $membershipData,
                'backgroundColor' => 'rgba(60,141,188,0.9)',
                'borderColor' => 'rgba(60,141,188,0.8)',
                'borderWidth' => 1,
                'pointColor' => '#3b8bba',
                'pointStrokeColor' => 'rgba(60,141,188,1)',
                'pointHighlightFill' => '#fff',
                'pointHighlightStroke' => 'rgba(60,141,188,1)',
            ]
        ];

        $datasets2 = [
            [
                'label' => 'Jumlah Produk',
                'data' => $productData,
                'backgroundColor' => [
                    'rgba(75, 192, 192, 0.9)', // Warna hijau
                    'rgba(153, 102, 255, 0.9)', // Warna ungu
                ],
                'borderColor' => 'rgba(255, 255, 255, 1)',
                'borderWidth' => 1,
            ]
        ];

        return view('admin.index', compact('labels', 'datasets', 'labels2', 'datasets2'));
    }
}
