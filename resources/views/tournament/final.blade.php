@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center text-success">Tournament Winner</h2>
    <div class="alert alert-success text-center">
        <h5>{{ $winner->name }}</h5>
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('tournament.index') }}" class="btn btn-danger">Restart Tournament</a>
    </div>
</div>
@endsection
