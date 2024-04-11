@extends('layouts/app')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Add A Result
            </h1>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('results.store') }}" method="post">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" aria-describedby="date">
            </div>
            <div class="mb-3">
                <label for="note" class="form-label">Note</label>
                <input type="text" class="form-control" id="note" name="note" aria-describedby="note">
            </div>
            <div class="mb-3">
                <label for="team1_id" class="form-label">Team 1</label>
                <select class="form-select" id="team1_id" name="team1_id">
                    <option value="">Select Team</option>
                    @foreach ($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->team_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="team2_id" class="form-label">Team 2</label>
                <select class="form-select" id="team2_id" name="team2_id">
                    <option value="">Select Team</option>
                    @foreach ($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->team_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="team1_score" class="form-label">Team 1 Score</label>
                <input type="number" class="form-control" id="team1_score" name="team1_score" aria-describedby="team1_score">
            </div>
            <div class="mb-3">
                <label for="team2_score" class="form-label">Team 2 Score</label>
                <input type="number" class="form-control" id="team2_score" name="team2_score" aria-describedby="team2_score">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

