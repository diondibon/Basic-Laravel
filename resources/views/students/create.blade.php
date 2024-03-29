@extends('layout/main');

@section('title', 'Daftar Mahasiswa') 

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>

                <form method="post" action="/students">
                @csrf
                {{ method_field('POST') }}
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                  id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
                  @error('nama')<div class="invalid-feedback">{{ $message }}
                </div> @enderror

                </div>
                <div class="form-group">
                  <label for="npm">NPM</label>
                  <input type="text" class="form-control @error('npm') is-invalid @enderror" 
                  id="npm" placeholder="Masukkan NPM" name="npm" value="{{ old('npm') }}">
                  @error('npm')<div class="invalid-feedback">{{ $message }}
                </div> @enderror
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror"
                  id="email" placeholder="example@gmail.com" name="email" value="{{ old('email') }}">
                  @error('email')<div class="invalid-feedback">{{ $message }}
                  </div> @enderror
                </div>

                <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <input type="text" class="form-control @error('jurusan') is-invalid @enderror" 
                  id="jurusan" placeholder="Masukkan Nama Jurusan" name="jurusan" value="{{ old('jurusan') }}">
                  @error('jurusan')<div class="invalid-feedback">{{ $message }}
                  </div> @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
             
            </div>
        </div>
    </div>
@endsection