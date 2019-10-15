@extends('layout/main')

@section('title', 'Detail of Student')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2 style="padding-top: 25px; padding-bottom: 10px;">Detail of Student</h2>
                
                <div class="card">
                    <!-- Body -->
                    <div class="card-body">
                        <h4 class="card-title">Telkom University</h4>
                        <br>
                        <h6 class="card-text">Nama : <u>{{ $student->nama }}</u></h6>
                        <h6 class="card-text">Nim : <u>{{ $student->nim }}</u></h6>
                        <h6 class="card-text">Email : <u>{{ $student->email }}</u></h6>
                        <h6 class="card-text">Jurusan : <u>{{ $student->jurusan }}</u></h6>
                    </div>
                    
                    <!-- Footer -->
                    <div class="card-footer">
            
                        <!-- Edit Link -->
                        <a href="{{ $student->id }}/edit" class="btn btn-primary">Edit</a>

                        <!-- Delete Button -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteBtnModal">Delete</button>
                        
                        <!-- Modal Delete -->
                        <div class="modal fade" id="deleteBtnModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Are you sure want to delete this?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                        <form action="/students/{{ $student->id }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Yes, proceed</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="/students" class="btn btn-success" style="float: right;">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
