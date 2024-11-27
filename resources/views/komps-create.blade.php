
@extends('admin')
@section('content')
            <div class="container mt-50 ">
                <div class="card-content" style="margin-top: -5%; margin-left:150px;">
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="card-body mt-20">
                        <h3 class="fw-bold">Tambah Kompetensi Standar</h3>
                        <form class="form form-vertical" action="/komps-create" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Kode</label>
                                            <input type="text" id="first-name-vertical"
                                                class="form-control" name="unit_code"
                                                placeholder="Masukkan kode" id="unit_code" value="{{ old('unit_code') }}" required>
                                                @error('unit_code')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-10 mt-4">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Title</label>
                                            <input type="text" id="first-name-vertical"
                                                class="form-control" name="unit_title"
                                                placeholder="Masukkan title" value="{{ old('unit_title') }}">
                                                @error('unit_title')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-10 mt-4">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Deskripsi</label>
                                            <textarea id="description" class="form-control" name="unit_description" placeholder="Masukkan Description" cols="5" rows="5">{{ old('unit_description') }} </textarea>
                                            <!-- Display Error for description -->
                                            @error('unit_description')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-10 mt-4">
                                        <div class="form-group">
                                            <label for="first-name-vertical">major</label>
                                            <select id="major" class="form-control" name="major_id" required>
                                                <option value="">-- Pilih Major --</option>
                                                @foreach($majors as $major)
                                                    <option value="{{ $major->id }}" {{ old('major_id') == $major->id ? 'selected' : '' }}>
                                                        {{ $major->major_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>



                                    <div class="col-10 mt-4">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Asessor</label>
                                            <select id="assessor" class="form-control" name="assessor_id" required>
                                                <option value="">-- Pilih Assessor --</option>
                                                @foreach($assessors as $assessor)
                                                    <option value="{{ $assessor->id }}" {{ old('assessor_id') == $assessor->id ? 'selected' : '' }}>
                                                        {{ $assessor->user->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-10 d-flex justify-content-end">
                                        <button type="submit"
                                            class="btn btn-primary me-1 mb-1">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endsection

</body>
</html>
