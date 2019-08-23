<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function list()
    {
        return response()->json(Event::with('organizer')->get());
    }

    
    public function show($organizer_slug, $event_slug)
    {
        if (!$user = User::where('slug', $organizer_slug)->first()) {
            return abort(404, 'Organizer not found');
        }
        
        if (!$event = $user->events->firstWhere('slug', $event_slug)) {
            return abort(404, 'Event not found');
        }
        
        return response()->json($event->load('channels.rooms.sessions', 'tickets'));
    }
    
    public function index(Request $request) {
        return view( 'events.index' , [
        'events' => Event::with('tickets.registrations')->get()
        ]);
    }

    public function create(Request $request) {
        return view('events.create');
    }
    
    public function store(Request $request) {
        return view('events.create');
    }

    public function detail(Request $request,$id) {
        return view('events.detail',[
            'event' => Event::with('tickets')->find($id)
        ]);
    }

}