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
                            <div class="card top-selling overflow-auto">

                                <div class="card-body">
                                    <h5 class="card-title">Pesanan anda</h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id Barang</th>
                                                <th scope="col">Gambar</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Jenis</th>
                                                <th scope="col">Banyaknya</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($barangs as $barangs)
                                                <tr>
                                                    <th scope="row"><a href="#">{{ $barangs->barang->id }}</a></th>
                                                    <td><img src="/storage/{{ $barangs->barang->gambar }}" alt="">
                                                    </td>
                                                    <td>{{ $barangs->barang->nama }}</td>
                                                    <td>{{ $barangs->barang->jenis }}</td>
                                                    <td>{{ $barangs->banyaknya }}</td>
                                                    <td>{{ $barangs->barang->harga_jual }}</td>
                                                    <td>
                                                        <form action="/keranjang/barang/delete/{{ $barangs->id }}"
                                                            method="post">
                                                            @csrf
                                                            <a href="/keranjang/barang/{{ $barangs->id }}"
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
