@extends('layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
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
                            <div class="card top-selling overflow-auto">

                                <div class="card-body">

                                    <h5 class="card-title">Waiting to be <span>| Delifered</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Transaksi Id</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Tagihan</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transaksis as $transaksi)
                                                <tr>
                                                    <th scope="row">{{ $transaksi->id }}</th>
                                                    <td>{{ $transaksi->user->username }}</td>
                                                    <td>{{ $transaksi->alamat }}</td>
                                                    <td>{{ $transaksi->status }}</td>
                                                    <td>Rp. {{ $transaksi->tagihan }}</td>
                                                    <td><a href="/antar/{{ $transaksi->id }}"
                                                            class="btn btn-primary bi bi-bag-plus"></a></button>
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
