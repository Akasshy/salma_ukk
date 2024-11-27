
@extends('assessor')
@section('content')
            <div class="container mt-50 ">
                <div class="card-content" style="margin-top: -5%; margin-left:200px;">
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="card-body mt-20">
                        <h3 class="fw-bold">Tambah Kompetensi element</h3>
                        <form class="form form-vertical" action="" method="/exam-createst" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-10 mt-4">
                                        <div class="form-group">
                                            <label for="exam_date">Tanggal Ujian</label>
                                            <input type="date" id="first-name-vertical"
                                                class="form-control" @error('exam_date') is-invalid @enderror name="exam_date"
                                                placeholder="Masukkan criteria" value="{{ old('exam_date') }}" required>
                                                @error('exam_date')
                                                    <small>{{ $message }}</small>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-10 mt-4">
                                        <div class="form-group">
                                            <label for="student_id">Nama siswa</label>
                                            <select class="form-control" @error('student_id') is-invalid @enderror name="student_id" placeholder="Masukkan siswa">
                                                <option value="">Pilih Siswa</option>
                                                @foreach ($students as $student )
                                                <option value="{{ $student->id }}" {{ old('student_id') == $student->id ? 'selected' : '' }}>{{ $student->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('student_id')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-10 mt-4">
                                        <div class="form-group">
                                            <label for="assessor_id">Nama Assessor</label>
                                            <select class="form-control" @error('assessor_id') is-invalid @enderror name="assessor_id" placeholder="Masukkan assessor">
                                                <option value="">Pilih assessor</option>
                                                @foreach ($assessors as $assessor )
                                                <option value="{{ $assessor->id }}" {{ old('assessor_id') == $assessor->id ? 'selected' : '' }}>{{ $assessor->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('assessor_id')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-10 mt-4">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" @error('status') is-invalid @enderror name="status" required>
                                                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Sangat Kompeten</option>
                                                <option value="1" {{ old('status') == '0' ? 'selected' : '' }}>Kompeten</option>
                                                <option value="1" {{ old('status') == '0' ? 'selected' : '' }}>Cukup Kompeten</option>
                                                <option value="1" {{ old('status') == '0' ? 'selected' : '' }}>Belum Kompeten</option>
                                            </select>
                                            @error('status')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-10 mt-4">
                                        <div class="form-group">
                                            <label for="comments">Komentar</label>
                                            <textarea class="form-control" name="comments" @error('comments')@enderror>{{ old('comments') }}</textarea>
                                            @error('comments')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-10 d-flex justify-content-end">
                                        <button type="submit"
                                            class="btn btn-primary me-1 mb-1">Edit</button>
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
