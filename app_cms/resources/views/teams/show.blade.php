@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Team Profile
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $team -> team_name }}</h5>
                    <a href="{{ route('teams.edit', $team -> id ) }}" class="card-link">Edit</a>
                    <a href="{{ route('teams.trash', $team -> id )}}" class="card-link">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection
