<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Services\EventsService;
use Exception;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::where('user_id', \Auth::user()->id)->paginate(10);

        return view('events.index')
            ->with('events', $events);
    }

    public function edit(Request $request)
    {
        return view('events.edit');
    }

    public function store(Request $request)
    {
        try {
            $data = $request->all();
            $data['user_id'] = \Auth::user()->id;
            $event = new Event;
            $service = new EventsService;

            if ($request->validate($event->rules)) {
                $service->store($data);
            }

            return view('events.index')
                ->with('success', 'OK');
        } catch (Exception $e) {
            return view('events.index')
                ->withErrors($e->getMessage());
        }
    }
}
