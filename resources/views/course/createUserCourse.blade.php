@extends('layouts.app')


@section('content')

<div class="container">
    <div class="mt-5 row">
        <form class="col-md-5 offset-md-3" action="{{ route('storeUserCourse.store') }}" method="POST">
            @csrf
                <input type="hidden" name="course_id" value="{{request()->route('course')}}" class="form-control" required>
            <hr class="divisor">
            <div class="form-group">
                <label for="function">Gebruikers:</label>
                <div id="custom-search-input">
                    <select class="form-control" name="user_id">
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <hr class="divisor">
            <div class="form-group">
                <label for="startdatum">Start datum</label>
                <input type="date" name="start_date" class="form-control" required>
            </div>
            <hr class="divisor">
            <div class="form-group">
                <label for="einddatum">Eind datum</label>
                <input type="date" name="end_date" class="form-control" required>
            </div>
            <button type="submit" class="mt-3 btn btn-primary topBtn">Inschrijven</button>
        </form>
    </div>
</div>

@endsection