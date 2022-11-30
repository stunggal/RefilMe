@extends('layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Users</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/">Admin</a></li>
                    <li class="breadcrumb-item active">Users</li>
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
                                    <h5 class="card-title">List of Registerd <span>| User</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Username</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <th scope="row"><a href="#">{{ $user->id }}</a></th>
                                                    <td>{{ $user->username }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td><img src="/storage/{{ $user->image }}" alt=""></td>
                                                    <td><span class="badge bg-success">{{ $user->role }}</span></td>
                                                    <td>
                                                        <form action="/user/delete/{{ $user->id }}" method="post">
                                                            @csrf
                                                            <a href="/user/{{ $user->id }}"
                                                                class="btn btn-primary bi bi-pencil"></a>
                                                            <button type="submit" class="btn btn-danger bi bi-trash"
                                                                onclick="return confirm('Are you sure you want to delete this user?');"></button>
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
