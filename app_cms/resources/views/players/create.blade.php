@extends('layouts/app')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Add A Player
            </h1>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('players.store') }}" method="post">
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
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="first_name">
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="last_name">
            </div>
            <div class="mb-3">
                <label for="team_id" class="form-label">Team</label>
                <select class="form-select" id="team_id" name="team_id">
                    <option value="">Select Team</option>
                    @foreach ($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->team_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="join_date" class="form-label">Join Date</label>
                <input type="date" class="form-control" id="join_date" name="join_date" aria-describedby="join_date">
                @error('join_date')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
