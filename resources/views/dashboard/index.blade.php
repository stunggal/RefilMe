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
                            <div class="card recent-sales overflow-auto">

                                <div class="card-body">

                                    <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                                    <a href="/barang/create"><button type="button" class="btn btn-primary">Input
                                            Barang</button></a>
                                    <br>
                                    <br>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Barang</th>
                                                <th scope="col">Jenis</th>
                                                <th scope="col">Harga per ml</th>
                                                <th scope="col">Stok</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 0;
                                            @endphp
                                            @foreach ($barangs as $barang)
                                                <tr>
                                                    @php
                                                        $i++;
                                                    @endphp
                                                    <th scope="row">{{ $i }}</th>
                                                    <td>{{ $barang->nama }}</td>
                                                    <td>{{ $barang->jenis }}</td>
                                                    <td>Rp. {{ $barang->harga_jual }}</td>
                                                    <td>{{ $barang->stok }} ml</td>
                                                    <td><button type="button" class="btn btn-primary"><i
                                                                class="bi bi-arrow-bar-up"></i></button>
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
