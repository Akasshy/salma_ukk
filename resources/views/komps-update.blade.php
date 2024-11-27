
@extends('assessor')
@section('content')

<div class="container mt-50 vh-100 d-flex justify-content-center align-items-center">
        <div class="card-content" style="margin-top: 5%; margin-left:200px;">
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="card-body mt-20">
                <h3 class="fw-bold">Update Kompetensi Standar</h3>
                <form class="form form-vertical" action="/komps-update/{{ $compentencyStandard->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="first-name-vertical">kode</label>
                                    <input type="text" id="first-name-vertical"
                                        class="form-control" name="unit_code"
                                        placeholder="Masukkan kode" id="unit_code" value="{{ $compentencyStandard->unit_code }}" required>
                                        @error('unit_code')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-10 mt-4">
                                <div class="form-group">
                                    <label for="first-name-vertical">title</label>
                                    <input type="text" id="first-name-vertical"
                                        class="form-control" name="unit_title"
                                        placeholder="Masukkan title" value="{{$compentencyStandard->unit_title }}">
                                </div>
                            </div>
                            <div class="col-10 mt-4">
                                <div class="form-group">
                                    <label for="unit_description">Deskripsi</label>
                                    <textarea id="unit_description" class="form-control" name="unit_description" placeholder="Masukkan deskripsi">{{ $compentencyStandard->unit_description }}</textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-10 mt-4">
                                <div class="form-group">
                                    <label for="contact-info-vertical">Major</label>
                                    <input type="text" id="contact-info-vertical"
                                        class="form-control" name="major_id"
                                        placeholder="Masukkan major" value="{{ $compentencyStandard->major_id}}">
                                        @error('major_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-10 mt-4">
                                <div class="form-group">
                                    <label for="assessor">Assessor</label>
                                    <input type="text" id="assessor" class="form-control" name="assessor_id" placeholder="Masukkan assessor" value="{{ $compentencyStandard->assessor_id }}">
                                </div>
                            </div>
                            <div class="col-10 mt-4">
                                <div class='form-check'>
                                    <div class="checkbox">
                                        <input type="checkbox" id="checkbox3"
                                            class='form-check-input' checked>
                                        <label for="checkbox3">Remember Me</label>
                                    </div>
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


</body>
</html>
