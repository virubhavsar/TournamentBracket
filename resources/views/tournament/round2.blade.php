@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">2 Winning Teams</h2>
    @foreach ($winners as $team)
        <input type="text" value="{{ $team->name }}" class="form-control my-2" readonly>
    @endforeach


    <h5 class="text-center mt-3">Wildcard Entry</h5>
    <input type="text" value="Wild Card 1" class="form-control my-2" readonly>
    <input type="text" value="Wild Card 2" class="form-control my-2" readonly>

    <div class="text-center mt-4">
        <a href="{{ route('tournament.round3') }}" class="btn btn-primary w-100 mt-3">Next</a>
    </div>
</div>
@endsection
