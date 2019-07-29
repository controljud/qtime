<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Event;

class EventsController extends Controller
{
    public function index(){
        $events = Event::where('user_id', \Auth::user()->id)->paginate(10);

        return view('events.index')
            ->with('events', $events);
    }
}
