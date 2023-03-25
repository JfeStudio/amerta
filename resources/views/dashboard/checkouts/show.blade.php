@extends('layouts.admin')
@section('title', '| Checkouts')
@section('content')
    <!-- Page Heading -->
    <div class="d-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">Detail Table Checkouts : {{ $checkout->user->name }}</h1>
    </div>
    <p>Update detail checkout terbaru masuk pada tanggal<span style="font-weight: 700"> (
            {{ $checkout->updated_at->format('D, Y-m | H:i:s') }} ) </span></p>

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
                            <th>Name</th>
                            <th>Title Camp</th>
                            <th>Tanggal Checkout</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Update Terbaru</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $checkout->user->name }}</td>
                            <td>{{ $checkout->camp->title }}</td>
                            <td>{{ $checkout->created_at->format('D, Y-m') }}</td>
                            <td>${{ $checkout->camp->price }}</td>
                            <td>
                                @if ($checkout->is_paid !== 0)
                                    <span style='font-size: 13px;'
                                        class='badge rounded-pill px-2 text-white bg-success'>Success Payment</span>
                                @else
                                    <span style='font-size: 13px;'
                                        class='badge rounded-pill px-2 text-white bg-warning'>Pending Payment</span>
                                @endif
                            </td>
                            <td>{{ $checkout->updated_at->format('D, Y-m') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Review Data User</h6>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Occupation</th>
                            <th>Card Number</th>
                            <th>CVC</th>
                            <th>Expired</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $checkout->user->name }}</td>
                            <td>{{ $checkout->user->email }}</td>
                            <td>
                                @if ($checkout->user->is_admin == 'admin')
                                    Admin
                                @else
                                    User
                                @endif
                            </td>
                            <td>{{ $checkout->user->occupation }}</td>
                            <td>{{ $checkout->card_number }}</td>
                            <td>{{ $checkout->cvc }}</td>
                            <td>{{ $checkout->expired }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection