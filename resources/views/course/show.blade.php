@extends('layouts.app')


@section('content')

<div class="container">
    <table class="mt-4 table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Cursus</th>
                <th scope="col">Beschrijving</th>
                <th scope="col">Gebruiker</th>
                <th scope="col">Prijs</th>
                <th scope="col">@sortablelink('end_date', 'Startdatum')</th>
                <th scope="col">Eind datum</th>
                <th scope="col">Actie</th>
            </tr>
        </thead>
        @foreach($courses as $userCourse)
        @foreach($userCourse->courses as $course)
        @foreach($userCourse->users as $user)
        <tbody>
            <tr>
                <td>{{ $userCourse->id }}</td>
                <td>{{ $course->title }}</td>
                <td>{{ $course->description}}</td>
                <td>{{ $user->name}}</td>
                <td>{{ $course->price}}</td>
                <td>{{ $userCourse->start_date}}</td>
                <td>{{ $userCourse->end_date}}</td>
                <td>
                <a href="{{ route('editUserCourse.edit', $userCourse->id) }}" class="mb-2  btn btn-warning">Wijzigen</a><br>
                    <form action="{{ route('destroyUserCourse.destroy', $userCourse->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="mt-2 btn btn-danger" value="verwijderen">
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
        @endforeach
        @endforeach
        <a href="{{ route('createUserCourse.create', request()->route('course')) }}" class="float-right btn btn-success">Inschrijven bij cursus</a>
        <a href="{{ route('course.index')}}" class="ml-3 btn btn-primary">Terug naar alle cursussen</a>
    </table>
</div>
@endsection