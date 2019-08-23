@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 py-2 d-flex justify-content-center align-items-center">
            <h2>Manage Events</h2>
            <a class="btn btn-outline-secondary ml-auto" href="{{ url('/events/add') }}"> Create new event </a>
        </div>
        <hr>
        @foreach ($events as $event)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <strong> <a href="{{ url('/events/'.$event->id.'/detail') }}">{{ $event->name }}</a> </strong>
                        <p class="m-0"> <small> Available until {{ date( 'l d , Y', strtotime($event->date)) }} </small></p>
                        <hr>
                        {{ isset($event->tickets->registrations) ? count($event->tickets->registrations) . ': registrations' : 'no regstration yet' }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection