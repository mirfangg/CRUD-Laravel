@extends('layout/main')

@section('title', 'About')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h2 style="padding-top: 25px; padding-bottom: 10px;">Hello, {{$name}}!</h2>
            </div>
        </div>
    </div>
@endsection
  