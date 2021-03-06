@extends('layouts.app')


@section('content')

<div class="container">
    <table class="mt-4 table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Merk</th>
                <th scope="col">Type</th>
                <th scope="col">Cursus</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        @foreach ($carts as $cart)
        <tbody>
            <tr>
                <td>{{ $cart->id }}</td>
                <td>{{ $cart->brand }}</td>
                <td>{{ $cart->type}}</td>
                <td>{{ $cart->course_id}}</td>
                <td>{{ $cart->status}}</td> 
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection