@extends('layouts/app')
@section('content')
    <div class="row">
        <div class="col">
            <h1>
                View All Results
            </h1>
            <a class="btn btn-success" href="/results/create">+ Add New Result</a>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ResultId</th>
                    <th scope="col">Date</th>
                    <th scope="col">Team 1</th>
                    <th scope="col">Score</th>
                    <th scope="col">Team 2</th>
                    <th scope="col">Score</th>
                    <th scope="col">Note</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($results as $result)
                    <tr>
                        <th scope="row">{{ $result->id }}</th>
                        <td>{{ $result->date }}</td>
                        <td>{{ $result->teams()->first()->team_name }}</td>
                        <td>{{ $result->team1_score }}</td>
                        <td>{{ $result->teams()->skip(1)->first()->team_name }}</td>
                        <td>{{ $result->team2_score }}</td>
                        <td>{{ $result->note }}</td>
                        <td><a href="{{ route('results.show', $result->id) }}" class="btn btn-sm btn-warning">Profile</a>
                            <a href="{{ route('results.edit', $result->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ route('results.trash', $result->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
