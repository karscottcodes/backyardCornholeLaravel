@extends('layouts/app')
@section('content')
    <div class="row">
        <div class="col">
            <h1>
                View All Teams
            </h1>
            <a class="btn btn-success" href="/teams/create">+ Add New Team</a>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">TeamId</th>
                    <th scope="col">Team Name</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $team)
                    <tr>
                        <th scope="row">{{ $team->id }}</th>
                        <td>{{ $team->team_name }}</td>
                        <td><a href="{{ route('teams.show', $team->id) }}" class="btn btn-sm btn-warning">Profile</a>
                            <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ route('teams.trash', $team->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
