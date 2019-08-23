@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 py-2 d-flex align-items-center">
            <h2>Manage Events</h2>
            <a class="btn btn-outline-secondary ml-auto" href="{{ url('/events/add') }}"> Create new event </a>

        </div>
        <hr>
        <form class="col-md-5" method="post" action="{{ url('/events/add') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="slug">slug</label>
                <input class="form-control" type="text" name="slug" id="slug" value="{{ old('slug') }}">
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input class="form-control" type="date" name="date" id="date" value="{{ old('date' , date('y-m-d') ) }}">
            </div>
            <div class="form-group">
                <input class="btn btn-outline-success" type="submit" value="{{ __('save event') }}">
                <a class="btn " href="{{ url('events') }}" > {{ __('cancel') }} </a>
            </div>
        </form>
    </div>
</div>
@endsection