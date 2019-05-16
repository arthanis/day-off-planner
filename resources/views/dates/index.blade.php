@extends('app')
@section('title', 'Home - all day offs (current year)')

@section('content')

    <div class="d-flex">
        <a href="/add" class="btn btn-primary btn-lg ml-auto">Add a date</a>
    </div>

    <div class="container px-0 py-5">
        <div class="list-group">
            @foreach ($dates as $date)
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><strong>{{ $date->date }}</strong></h5>
                    </div>
                    @if ($date->description)
                        <p class="mb-1">{{ $date->description }}</p>
                    @endif
                </a>
            @endforeach
    </div>

@endsection
