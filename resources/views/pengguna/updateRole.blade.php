@extends('layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/">Admin</a></li>
                    <li class="breadcrumb-item active">Update Role</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="/storage/{{ $user->image }}" alt="Profile" class="rounded-circle">
                            <h2>{{ $user->name }}</h2>
                            <h3>{{ $user->role }}</h3>
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
                                <form action="" method="post">
                                    @csrf
                                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                        <h5 class="card-title">About</h5>
                                        <p class="small fst-italic">{{ $user->about }}</p>

                                        <h5 class="card-title">Profile Details</h5>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label ">Name</div>
                                            <div class="col-lg-9 col-md-8">{{ $user->name }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Username</div>
                                            <div class="col-lg-9 col-md-8">{{ $user->username }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Old Role</div>
                                            <div class="col-lg-9 col-md-8">{{ $user->role }}</div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-lg-3 col-md-4 label">New Role</label>
                                            <div class="col-lg-9 col-md-8">
                                                <select class="form-select" aria-label="Default select example"
                                                    name="role">
                                                    <option selected disabled>Pilih Role Baru</option>
                                                    <option value="admin">Admin</option>
                                                    <option value="kurir">Kurir</option>
                                                    <option value="pembeli">Pembeli</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Address</div>
                                            <div class="col-lg-9 col-md-8">{{ $user->address }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Email</div>
                                            <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
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
