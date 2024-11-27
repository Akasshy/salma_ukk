

@extends('admin')
@section('content')
    <div class="container mt-5">
        <div class="card mx-auto shadow-lg" style="max-width: 800px;">
            <div class="row g-0">
                <!-- Bagian Foto Profil -->
                <div class="col-md-4 d-flex justify-content-center align-items-center bg-light">
                    <img src="/img/download.jpg" alt="Foto Profil" class="img-fluid rounded-circle mt-3" style="width: 150px; height: 150px;">
                </div>
                <!-- Bagian Informasi Profil -->
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title fw-bold">name</h3>
                        <p class="card-text"><i class="bi bi-envelope"></i>Email </p>
                        <p class="card-text"><i class="bi bi-briefcase"></i>Password</p>
                        <div class="d-flex">
                            <a href="/profil-create" class="btn btn-primary me-2">Edit Profil</a>
                            <a href="" class="btn btn-secondary">Simpan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Link Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
@endsection
