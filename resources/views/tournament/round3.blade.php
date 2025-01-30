@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">2 Winning Teams</h2>
    @foreach ($winners as $team)
        <input type="text" value="{{ $team->name }}" class="form-control my-2" readonly>
    @endforeach

    <div class="text-center mt-4">
        <a href="{{ route('tournament.final') }}" class="btn btn-primary w-100 mt-3">Next</a>
    </div>
</div>
@endsection
