@extends('layouts.app')

@section('content')

    <form method="POST" action="/posts">
        @csrf
        <input type="text" name="title" placeholder="Enter Title">

        <input type="submit" name="submit">

    </form>


    @yield('footer')
