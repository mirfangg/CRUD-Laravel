@extends('layout/main')

@section('title', 'Students List')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2 style="padding-top: 25px; padding-bottom: 10px;">Students List</h2>
                
                <a href="/students/create" class="btn btn-primary">+Add Student</a>
                
                <!-- Alert Flash Message -->
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible">
                        {{ session('status') }}
                    </div>
                @endif

                <ul class="list-group" style="padding-top: 10px;">
                    @foreach( $students as $student )
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $student->nama }}
                        <a href="/students/{{ $student->id }}" class="badge badge-success">View Detail</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
