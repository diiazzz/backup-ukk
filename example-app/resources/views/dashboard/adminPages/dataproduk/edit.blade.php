@extends('dashboard.layouts.mainDashboard', ['sbMaster' => true, 'sbActive' => 'data.produk'])

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <form action="{{ route('kategori.store') }}" method="POST" class="card shadow mb-4">
            @csrf
            <div class="card-header d-flex w-100 py-3">
                <h6 class="m-0 font-weight-bold text-primary">Kategori</h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <input type="text" class="form-control" name="nm_kategori" autofocus />
                </div>
            </div>
            <div class="card-footer d-flex">
                <button type="submit" class="btn btn-primary ml-auto">Simpan</button>
                <a href="{{ route('kategori.index') }}" class="btn btn-danger ml-3">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection