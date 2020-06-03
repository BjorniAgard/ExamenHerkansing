@extends('layouts.app')


@section('content')

<div class="container">
    <div class="mt-5 row">
        <form class="col-md-5 offset-md-3" action="{{ route('course.store') }}" method="POST">
            @csrf
            <hr class="divisor">
            <div class="form-group">
                <label for="Cursus">Cursus</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <hr class="divisor">
            <div class="form-group">
                <label for="Cursus">Beschrijving</label>
                <input type="text" name="description" class="form-control" required>
            </div>
            <button type="submit" class="mt-3 btn btn-primary topBtn">Aanmaken</button>
        </form>
    </div>
</div>

@endsection