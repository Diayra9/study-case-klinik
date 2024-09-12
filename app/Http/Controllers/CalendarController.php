<?php

// app/Http/Controllers/CalendarController.php
namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation; // Pastikan model ini ada
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CalendarController extends Controller
{
    public function index()
    {
        return view('admin.calendar');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string',
            'start' => 'required|date',
            'backgroundColor' => 'nullable|string',
            'borderColor' => 'nullable|string',
            'textColor' => 'nullable|string',
        ]);

        // Simpan event ke database
        $event = Event::create([
            'title' => $request->input('title'),
            'start' => $request->input('start'),
            'backgroundColor' => $request->input('backgroundColor'),
            'borderColor' => $request->input('borderColor'),
            'textColor' => $request->input('textColor'),
        ]);

        return response()->json(['success' => true, 'event' => $event]);
    }

    // Mengambil data event untuk kalender
    public function getReservationsForCalendar()
    {
        $events = Event::all()->map(function ($event) {
            return [
                'id' => $event->id,
                'title' => $event->title,
                'start' => $event->start,
                'backgroundColor' => $event->backgroundColor,
                'borderColor' => $event->borderColor,
                'textColor' => $event->textColor,
            ];
        });

        return response()->json($events);
    }

    private function getStatusColor($status)
    {
        $colors = [
            'Attended' => '#28a745',
            'Confirmed' => '#ffc107',
            'Canceled' => '#dc3545',
            'Waiting Response' => '#17a2b8',
        ];

        return $colors[$status] ?? '#ffffff'; // Default color
    }
}
