@extends('layout/main')

@section('title', 'Edit Student')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-7">
                <h2 style="padding-top: 25px; padding-bottom: 10px;">Edit Student</h2>
    
                <!-- Form -->
                <form method="post" action="/students/{{ $student->id }} ">
                    @method('put')
                    @csrf <!-- Token for secure -->
                    
                    <!-- value="{{ old('') }} => for retrieving old input -->

                    <!-- Nama -->
                    <div class="form-group">
                        <label for="nama">Nama :</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                        id="nama" placeholder="Masukkan Nama..." name="nama" value="{{ $student->nama }}">
                        
                        @error('nama')<div class="invalid-feedback">{{ $message }}
                        </div>@enderror
                    </div>

                    <!-- Nim -->
                    <div class="form-group">
                        <label for="nim">Nim :</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" 
                        id="nim" placeholder="Masukkan Nim..." name="nim" value="{{ $student->nim }}">

                        @error('nim')<div class="invalid-feedback">{{ $message }}
                        </div>@enderror
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" 
                        id="email" placeholder="Masukkan Email..." name="email" value="{{ $student->email }}">

                        @error('email')<div class="invalid-feedback">{{ $message }}
                        </div>@enderror
                    </div>

                    <!-- Jurusan -->
                    <div class="form-group">
                        <label for="jurusan">Jurusan :</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" 
                        id="jurusan" placeholder="Masukkan Jurusan..." name="jurusan" value="{{ $student->jurusan }}">
                        
                        @error('jurusan')<div class="invalid-feedback">{{ $message }}
                        </div>@enderror
                    </div>

                    <!-- Insert Data Button -->
                    <button type="submit" class="btn btn-primary">Edit Data</button>
                </form>

            </div>
        </div>
    </div>
@endsection
