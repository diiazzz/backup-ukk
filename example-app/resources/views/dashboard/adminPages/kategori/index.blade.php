@extends('dashboard.layouts.mainDashboard', ['sbMaster' => true, 'sbActive' => 'data.kategori'])

@section('content')
    <h1 class="h2 mb-3 text-gray-800 text-center">Kategori Managements</h1>

    @if (session()->has('success'))
        <div class="alert alert-success col-md-8 alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger col-md-8 alert-dismissible fade show" role="alert">
            {{ session('errors') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3 text-right">
            <a href="{{ route('kategori.create') }}" class="btn btn-success">
                <i class="fas fa-fw fa-plus"></i>
                Tambah Kategori
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-gradient-primary text-light">
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($kategori as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nm_kategori }}</td>
                                <td>
                                    <a href="{{ route('kategori.edit', $data->id) }}" class="btn btn-warning"><i class="fas fa-fw fa-edit"></i></a>
                                    <form action="{{ route('kategori.destroy', $data->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Yakin hapus kategori ini ?')">
                                            <i class="fas fa-fw fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
