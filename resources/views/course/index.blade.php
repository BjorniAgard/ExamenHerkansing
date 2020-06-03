@extends('layouts.app')


@section('content')

<div class="container">
    <a href="{{ route('course.create')}}" class="btn btn-primary">Cursus aanmaken</a>
    <table class="mt-4 table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titel</th>
                <th scope="col">Beschrijving</th>
                <th scope="col">Actie</th>
            </tr>
        </thead>
        @foreach ($courses as $course)
        <tbody>
            <tr>
                <td>{{ $course->id }}</>
                <td>{{ $course->title }}</td>
                <td>{{ $course->description}}</td>
                <td>
                <a href="{{ route('course.show', $course->id) }}" class="btn btn-primary">Bekijk cursus</a>
                    <form action="{{ route('course.destroy', $course->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="mt-2 btn btn-danger" value="verwijderen">
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection