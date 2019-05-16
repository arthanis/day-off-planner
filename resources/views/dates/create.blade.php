@extends('app')
@section('title', 'Add')

@section('content')
    <form method="post" action="/">
        @csrf

        <div class="row mt-5">
            <div class="col-sm-6 offset-sm-3">
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" class="form-control form-control-lg"
                           placeholder="format: yyyy-mm-dd" required />
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" rows="3"
                        class="form-control form-control-lg"></textarea>
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-primary btn-lg" style="width: 100%">Add date</button>
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
