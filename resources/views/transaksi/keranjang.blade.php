@extends('layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>{{ $title }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/pesan">pesan</a></li>
                    <li class="breadcrumb-item active">{{ $title }}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="card-body">
                                    <h5 class="card-title">Pesanan anda</h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id Pesanan</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Total Harga</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transaksis as $transaksi)
                                                <tr>
                                                    <th scope="row"><a href="#">{{ $transaksi->id }}</a></th>
                                                    <td>{{ $transaksi->user->username }}</td>
                                                    <td>{{ $transaksi->tagihan }}</td>
                                                    <td><span class="badge bg-success">{{ $transaksi->status }}</span></td>
                                                    <td>
                                                        <form action="/keranjang/delete/{{ $transaksi->id }}"
                                                            method="post">
                                                            @csrf
                                                            <a href="/keranjang/{{ $transaksi->id }}"
                                                                class="btn btn-primary bi bi-pencil"></a>
                                                            <button type="submit"
                                                                class="btn btn-danger bi bi-trash"></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main><!-- End #main -->
@endsection
