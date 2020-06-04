@extends('layouts.app')


@section('content')

<div class="container">
    <div class="mt-5 row">
        <form class="col-md-5 offset-md-3" action="{{ route('course.update', $course->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <hr class="divisor">
            <div class="form-group">
                <label for="cursus">Cursus</label>
                <input type="text" name="Title" value="{{ $course->title }}" class="form-control" required>
            </div>
            <hr class="divisor">
            <div class="form-group">
                <label for="beschrijving">Beschrijving</label>
                <input type="text" name="Description" value="{{ $course->description }}" class="form-control" required>
            </div>
            <hr class="divisor">
            <div class="form-group">
                <label for="prijs">Prijs</label>
                <input type="number" name="Price" value="{{ $course->price }}" class="form-control" required>
            </div>
            <button type="submit" class="mt-3 btn btn-primary topBtn">Updaten</button>
        </form>
    </div>
</div>

@endsection