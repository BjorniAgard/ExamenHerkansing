@extends('layouts.app')


@section('content')

<div class="container">
    <div class="mt-5 row">
        <form class="col-md-5 offset-md-3" action="{{ route('updateUserCourse.update', $userCourse->id) }}" method="POST">
            @csrf
            @method('PATCH')
                <input type="hidden" name="course_id" value="{{$userCourse->course_id}}" class="form-control" required>
            <hr class="divisor">
            <div class="form-group">
                <label for="function">Gebruikers:</label>
                <div id="custom-search-input">
                    <select class="form-control" name="user_id">
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}"{{ $userCourse->user_id === $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <hr class="divisor">
            <div class="form-group">
                <label for="startdatum">Start datum</label>
                <input type="date" value="{{ $userCourse->start_date }}" name="start_date" class="form-control" required>
            </div>
            <hr class="divisor">
            <div class="form-group">
                <label for="einddatum">Eind datum</label>
                <input type="date" value="{{ $userCourse->end_date }}" name="end_date" class="form-control" required>
            </div>
            <button type="submit" class="mt-3 btn btn-primary topBtn">Updaten</button>
        </form>
    </div>
</div>

@endsection