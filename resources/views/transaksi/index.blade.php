@extends('layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>{{ $title }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
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

                                    <h5 class="card-title">Our Products <span>| Today</span></h5>

                                    <div class="row align-items-top">

                                        @foreach ($barangs as $barang)
                                            <div class="col-lg-3">
                                                <!-- Card with an image on top -->
                                                <div class="card">
                                                    <img src="/storage/{{ $barang->gambar }}" class="card-img-top"
                                                        alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $barang->nama }}</h5>
                                                        <h5 class="card-text">{{ $barang->jenis }}</h5>
                                                        <p class="card-text">{{ $barang->deskripsi }}</p>
                                                        <p class="card-text"><a href="/pesan/{{ $barang->id }}"
                                                                class="btn btn-primary">Order</a>
                                                        </p>
                                                    </div>
                                                </div><!-- End Card with an image on top -->
                                            </div>
                                        @endforeach

                                    </div>

                                </div>

                            </div>

                        </div><!-- End Recent Sales -->

                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main><!-- End #main -->
@endsection
