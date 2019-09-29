@extends('layouts.app')
@section('content')
    <h2>myview3 Page</h2>

    @if(isset($people))
        @foreach($people as $person)
            <li>{{$person}}</li>
            @endforeach
    @endif

@endsection()
