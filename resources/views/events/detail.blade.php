@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 py-2 d-flex justify-content-center align-items-center">
            <div class="col-md-5">
                <h2>Manage Events</h2>
                <p class="m-0"> <small> Available until {{ date( 'l d , Y', strtotime($event->date)) }} </small></p>
            </div>
            <a class="btn btn-outline-secondary ml-auto" href="{{ url('/events/'.$event->id.'edit') }}"> Edit event </a>
        </div>
        <hr>
        <div class="col-md-12 py-2 d-flex align-items-center">
            <div class="col-md-5">
                <h2>Tickets</h2>
            </div>
            <a class="btn btn-outline-secondary ml-auto" href="{{ url('/events/'.$event->id.'edit') }}"> Edit event </a>
        </div>
        @foreach ($event->tickets as $ticket)
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <strong> {{ $ticket->name }} </strong>
                    <p> {{ $ticket->amount }}</p>
                    <p> {{ $ticket->getDescriptionAttribute() }}</p>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection