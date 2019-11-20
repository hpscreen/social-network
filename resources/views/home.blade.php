@extends('layouts.layout')

@section('content')


    <div class="container-fluid" style="margin-top: 50px">
        <div class="row">

            @include('home.sidebar')
            @include('home.feed')

        </div>
    </div>
@endsection
