@extends('layouts/app')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Player Profile
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $player -> first_name }} {{ $player -> last_name }}</h5>
                    <a href="{{ route('players.edit', $player -> id ) }}" class="card-link">Edit</a>
                    <a href="{{ route('players.trash', $player -> id )}}" class="card-link">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection
