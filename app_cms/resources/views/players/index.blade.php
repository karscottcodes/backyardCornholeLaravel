@extends('layouts/app')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="mb-3">
                View All Players
            </h1>
            <a class="btn btn-success mb-3" href="/players/create">+ Add New Player</a>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">PlayerId</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Join Date</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($players as $player)
                    <tr>
                        <th scope="row">{{ $player->id }}</th>
                        <td>{{ $player->first_name }}</td>
                        <td>{{ $player->last_name }}</td>
                        <td>{{ $player->join_date }}</td>
                        <td><a href="{{ route('players.show', $player->id) }}" class="btn btn-sm btn-warning">Profile</a>
                            <a href="{{ route('players.edit', $player->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ route('players.trash', $player->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
