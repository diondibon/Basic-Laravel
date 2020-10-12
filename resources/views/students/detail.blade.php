@extends('layout/main');

@section('title', 'Daftar Mahasiswa') 

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-5">
                <h1 class="mt-3">Detail Mahasiswa</h1>

                <div class="card" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">{{ $student -> nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student -> npm }}</h6>
                    <p class="card-text">{{ $student -> email }}</p>
                    <p class="card-text">{{ $student -> jurusan }}</p>

                    <a href=" {{ $student->id }} /edit" type="submit" class="btn btn-primary">Edit</a>

                    <form action="/students/{{ $student->id }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      {{ method_field('delete') }}
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/students"><button type="submit" class="btn btn-dark">Back</button></a>
                    
                  </div>
                </div>

                
            </div>
        </div>
    </div>
@endsection