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

        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Beli Barang ini</h5>
                            <!-- Card with an image on left -->
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="/storage/{{ $barang->gambar }}" class="img-fluid rounded-start"
                                            alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $barang->nama }}</h5>
                                            <p class="card-text">{{ $barang->deskripsi }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Card with an image on left -->
                            <!-- General Form Elements -->
                            <form>

                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label">Nama Barang</label>
                                    <div class="col-sm-10">
                                        <p class="card-text">{{ $barang->nama }}</p>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Jenis</label>
                                    <div class="col-sm-10">
                                        <p class="card-text">{{ $barang->jenis }}</p>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <p class="card-text">{{ $barang->deskripsi }}</p>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Stok</label>
                                    <div class="col-sm-10">
                                        <p class="card-text">{{ $barang->stok }} L</p>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Harga</label>
                                    <div class="col-sm-10">
                                        <p class="card-text">{{ $barang->harga_jual }} / L</p>
                                    </div>
                                </div>
                            </form><!-- End General Form Elements -->

                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Beli Barang ini</h5>
                            <!-- Custom Styled Validation -->
                            <form class="row g-3 needs-validation" method="post" novalidate>
                                @csrf

                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Nomor Pesanan</label>
                                    <p class="card-text">{{ $current_transaksi }}</p>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">User Name</label>
                                    <p class="card-text">{{ Auth::user()->name }}</p>
                                </div>

                                <div class="col-md-12">
                                    <label for="validationCustom03" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" id="validationCustom03"
                                        required>
                                    <button class="invalid-feedback" type="submit">
                                        Harap masukkan alamat.
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationCustom04" class="form-label">Jumlah Pesan</label>
                                    <input type="number" class="form-control" name="banyaknya" id="validationCustom03"
                                        value="1" required>
                                    <div class="invalid-feedback">
                                        Harap angka yang valid.
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Masukkan Pesanan</button>
                                </div>
                            </form><!-- End Custom Styled Validation -->

                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
