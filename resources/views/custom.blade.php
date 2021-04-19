@extends('layouts.app')

@section('header')
    <h1>welcome to custom view page with id: </h1>

    @if (count($movies))
        @foreach ($movies as $movie)
            <ul>

                <li>
                    {{ $movie }}
                </li>

            </ul>

        @endforeach


    @endif


@endsection

@section('footer')


    <h3>footer section</h3>
@endsection
