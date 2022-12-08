@extends('layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Update Barang</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/">Admin</a></li>
                    <li class="breadcrumb-item active">Update Barang</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="/storage/{{ $barang->gambar }}" alt="Profile" class="rounded-square">
                            <h2> {{ $barang->nama }}</h2>
                            <h3> {{ $barang->jenis }}</h3>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Edit Role</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">
                                <form action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                        <h5 class="card-title">Detail Barang</h5>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label ">Nama</div>
                                            <div class="col-lg-9 col-md-8">
                                                <input type="text" class="form-control" value="{{ $barang->nama }}"
                                                    name="nama">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Jenis</div>
                                            <div class="col-lg-9 col-md-8">
                                                <input type="text" class="form-control" value="{{ $barang->jenis }}"
                                                    name="jenis">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Deskripsi</div>
                                            <div class="col-lg-9 col-md-8">
                                                <textarea class="form-control" name="deskripsi" style="height: 100px">{{ $barang->deskripsi }}</textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Deskripsi</div>
                                            <input type="hidden" value="{{ $barang->gambar }}" name="oldImage">
                                            <div class="col-lg-9 col-md-8">
                                                <input class="form-control" type="file" id="formFile" name="gambar">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Harga Jual</div>
                                            <div class="col-lg-9 col-md-8">
                                                <input type="text" class="form-control" value="{{ $barang->harga_jual }}"
                                                    name="harga_jual">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Harga Beli</div>
                                            <div class="col-lg-9 col-md-8">
                                                <input type="text" class="form-control" value="{{ $barang->harga_beli }}"
                                                    name="harga_beli">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Stok</div>
                                            <div class="col-lg-9 col-md-8">
                                                <input type="text" class="form-control" value="{{ $barang->stok }}"
                                                    name="stok">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>

                                    </div>
                                </form>
                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
