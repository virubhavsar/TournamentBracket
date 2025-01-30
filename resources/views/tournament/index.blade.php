@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">Tournament Bracket</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tournament.store') }}" method="POST">
        @csrf
        <h4 class="text-center">Add 8 Teams</h4>
        @for ($i = 0; $i < 8; $i++)
            <input type="text" name="teams[]" class="form-control my-2" placeholder="Enter team name" required>
        @endfor
        <button type="submit" class="btn btn-primary w-100 mt-3">Next</button>
    </form>
</div>
@endsection
