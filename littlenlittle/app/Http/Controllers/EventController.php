<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('event', ['events' => $events]);
    }

    public function show($id)
    {
        $event = Event::find($id);
        return view('event-detail', ['event' => $event]);
    }
}
