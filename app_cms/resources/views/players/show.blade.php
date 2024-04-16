@extends('layouts/app')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="mb-3">
                Player Profile: {{ $player -> first_name }} {{ $player -> last_name }}
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $player -> first_name }} {{ $player -> last_name }}</h5>
                    <p><strong>Join Date:</strong> {{ $player->join_date }}</p>
                    <p><strong>Teams:</strong></p>
                    <ul>
                        @forelse ($player->teams as $team)
                            <li>{{ $team->team_name }}</li>
                        @empty
                            <li>No teams found.</li>
                        @endforelse
                    </ul>
                    <a href="{{ route('players.edit', $player -> id ) }}" class="card-link">Edit</a>
                    <a href="{{ route('players.trash', $player -> id )}}" class="card-link">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection
