
@extends('admin')
@section('content')

<div class="container">
    <h1>Edit Profil</h1>
    <form action="/profil-create" method="POST">
        @csrf
        <div class="card">
            <div class="card-header">Informasi Dasar</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="full_name">Nama Lengkap</label>
                    <input type="text" name="full_name" class="form-control"  required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                {{-- <div class="form-group">
                    <label for="password">Password (Opsional)</label>
                    <input type="password" name="password" class="form-control">
                </div> --}}
                {{-- <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div> --}}
            </div>
        </div>

        {{-- @if ($student)
        <div class="card mt-3">
            <div class="card-header">Informasi Siswa</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input type="text" name="nisn" class="form-control" value="{{ $student->nisn }}">
                </div>
                <div class="form-group">
                    <label for="grade_level">Kelas</label>
                    <input type="number" name="grade_level" class="form-control" value="{{ $student->grade_level }}">
                </div>
                <div class="form-group">
                    <label for="major_id">Jurusan</label>
                    <select name="major_id" class="form-control">
                        <!-- Isi dengan data major -->
                        @foreach ($majors as $major)
                        <option value="{{ $major->id }}" {{ $student->major_id == $major->id ? 'selected' : '' }}>
                            {{ $major->major_name }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        @endif

        @if ($assessor)
        <div class="card mt-3">
            <div class="card-header">Informasi Assessor</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="assessor_type">Tipe Assessor</label>
                    <input type="text" name="assessor_type" class="form-control" value="{{ $assessor->assessor_type }}">
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" class="form-control">{{ $assessor->description }}</textarea>
                </div>
            </div>
        </div>
        @endif --}}

        <button type="submit" class="btn btn-primary mt-3">Simpan Perubahan</button>
    </form>
</div>

@endsection
