@extends('layouts.admin')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Table Camp Benefits</h1>
        <a href="{{ route('camp-benefits.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Create camp benefits </a>
    </div>

    <!-- Content Row -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title Camps</th>
                            <th>Benefit Camps</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($benefits as $benefit)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $benefit->camp->title }}</td>
                                <td>{{ $benefit->name }}</td>
                                <td>
                                    <div class="d-inline-flex">
                                        <a href="{{ route('camp-benefits.edit', $benefit->id) }}"
                                            class="btn btn-warning btn-sm mr-2">Edit</a>
                                        <form action="{{ route('camp-benefits.destroy', $benefit->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection