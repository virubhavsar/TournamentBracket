@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">4 Winning Teams</h2>

        @foreach ($winners as $team)
            <input type="text" value="{{ $team->name }}" class="form-control my-2" readonly>
        @endforeach

    <a href="{{ route('tournament.round2') }}" class="btn btn-primary w-100 mt-3">Next</a>
</div>
@endsection
