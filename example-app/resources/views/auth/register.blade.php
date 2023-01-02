@extends('frontend.layouts.main')
@section('container')
  <div class="container-fluid pt-5">
    <div class="row px-xl-5 justify-content-center">
      <div class="col-lg-7 mb-5">

        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

        @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('error') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

        <div class="card shadow-lg border-0 rounded">
          <div class="text-center mt-4">
            <h2 class="px-5"><span class="px-2">Harap Registrasi Dulu!</span></h2>
          </div>
          <div class="card-body">
            <form action="{{ route('register') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Username</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan username" required
                  name="name" id="name" value="{{ old('name') }}" autofocus />
                  @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
              </div>
              <div class="mb-3">
                <label for="no_hp" class="form-label">No. Handphone</label>
                <input type="text" class="form-control @error('no_hp') is-invalid @enderror" placeholder="Masukkan No Hp" required
                  name="no_hp" id="no_hp" value="{{ old('no_hp') }}"/>
                  @error('no_hp')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email Account</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email" required 
                  name="email" id="email" value="{{ old('email') }}"/>
                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Buat Password</label>
                <input type="password" class="form-control" placeholder="Password" required="required" name="password" id="password" />
              </div>
              <div class="text-center mt-4 pt-2">
                <div class="mb-3">
                  <button class="btn btn-primary py-2 px-4 rounded" type="submit">Register</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection