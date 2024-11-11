<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class CalenderController extends Controller
{
    public function showCalendar()
    {
        $events = [];
        $reservations = Reservation::all();

        foreach ($reservations as $reservation) {
            $events[] = [
                'title' => $reservation->id . ' ' . $reservation->name,
                'start' => $reservation->date,
                'description' => $reservation->name . ', Treatment: ' . $reservation->treatment->name .
                    ', Location: ' . $this->getLocationName($reservation->location) . ', Phone Number: ' . $reservation->phone_number,
                'color' => $this->getEventColorByStatus($reservation->status),
            ];
        }

        return view('admin.morePage.calendar', compact('events'));
    }

    private function getLocationName($location)
    {
        switch ($location) {
            case 5:
                return 'Surabaya';
            case 4:
                return 'Surakarta';
            case 3:
                return 'Sidoarjo';
            case 2:
                return 'Bandung';
            case 1:
                return 'Jakarta';
            case 0:
                return 'Jogja';
            default:
                return 'Unknown';
        }
    }

    private function getEventColorByStatus($status)
    {
        switch ($status) {
            case '3':
                return '#4CBB17';
            case '2':
                return '#E32227';
            case '1':
                return '#0476D0';
            case '0':
                return 'gray';
            default:
                return '#FFAA1D';
        }
    }
}
