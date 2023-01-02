@extends('dashboard.layouts.mainDashboard', ['sbMaster' => true, 'sbActive' => 'data.produk'])

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <form action="{{ route('dataProduk.store') }}" method="POST" class="card shadow mb-4">
            @csrf
            <div class="card-header d-flex w-100 py-3">
                <h6 class="m-0 font-weight-bold text-primary">Produk</h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="produk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" name="nm_produk" autofocus value="{{ old('nm_produk') }}" required />
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-control" name="kategori_id" id="kategori" required>
                        <option value="" disabled selected>Pilih Kategori </option>
                        @foreach ($kategori as $item)
                            <option value="{{ old('kategori_id', $item->id) }}">{{ $item->nm_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok Produk</label>
                    <input type="number" min="0" class="form-control" name="stock_produk" value="{{ old('stock_produk') }}" required id="stok"/>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Produk</label>
                    <input type="number" min="0" class="form-control" name="harga_produk" value="{{ old('harga_produk') }}" required id="harga"/>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" placeholder="Deskripsi Produk" required name="deskripsi_produk" style="height: 100px;"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="foto">Choose file</label>
                    <input type="file" class="form-control" id="foto" name="foto_produk" value="{{ old('foto_produk') }}" required />
                </div>
            </div>
            <div class="card-footer d-flex">
                <button type="submit" class="btn btn-primary ml-auto">Simpan</button>
                <a href="{{ route('dataProduk.index') }}" class="btn btn-danger ml-3">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection