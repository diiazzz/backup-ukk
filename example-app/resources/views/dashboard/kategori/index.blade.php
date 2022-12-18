@extends('dashboard.layouts.main')

@section('content')
    <div class="card shadow mb-4">
        <div class="row card-header py-3 ">
            <div class="col-6">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="col-6 text-right">
                <a href="{{ url('/kategori/create') }}" class="btn-sm  btn btn-primary">
                    Tambah</a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length"
                                        aria-controls="dataTable"
                                        class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                        </div>
                        <div class="col-sm-12 col-md-6">

                            <form method="GET" action="{{ url('kategori/') }}">
                                <div id="dataTable_filter" class="dataTables_filter">
                                    <label>Search:<input type="search" class="form-control form-control-sm" name="keyword"
                                            placeholder="" aria-controls="dataTable">
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
                                role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending" style="width: 55px;">No
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 62px;">Kategori </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 62px;">Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kategori as $key => $value)
                                        <tr class="odd">
                                            <td>{{ $kategori->firstItem() + $key }}</td>
                                            <td>{{ $value->nm_kategori }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pull-right">
                                {{ $kategori->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
