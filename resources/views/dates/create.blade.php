@extends('app')
@section('title', 'Add')

@section('content')
    <form method="post" action="/">
        @csrf

        <div class="row mt-5">
            <div class="col-sm-6 offset-sm-3">
                <div class="input-group">
                    <input type="date" name="date" id="date" class="form-control form-control-lg"
                    placeholder="format: yyyy-mm-dd" />

                    <div class="input-group-append">
                        <button class="btn btn-primary btn-lg">Add date</button>
                    </div>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="row mt-4">
                <div class="col-sm-6 offset-sm-3">
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif
    </form>
@endsection
