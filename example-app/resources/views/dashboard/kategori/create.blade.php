@extends('dashboard.layouts.main')

@section('content')
    <div class="col-12">
        <form action="{{ url('/kategori') }}" method="POST" class="card shadow mb-4">
            @csrf
            <div class="card-header d-flex w-100 py-3">
                <h6 class="m-0 font-weight-bold text-primary">Kategori
                </h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input type="text" class="form-control" name="nm_kategori" placeholder="Kategori">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex">
                <button type="submit" class="btn btn-primary ml-auto">Save</button>
                <a href="" class="btn btn-danger ml-3">Cancel</a>
            </div>

        </form>
    </div>
@endsection
