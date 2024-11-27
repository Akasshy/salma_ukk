@extends('admin')
@section('content')
<div class="container mt-50">
    <div class="card-content" style="margin-top: 5%">
        <!-- Display Error Messages -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card-body mt-20">
            <h3 class="fw-bold">Major Create</h3>
            <form class="form form-vertical" action="/major/create" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <div class="row">
                        <!-- Major Name Input -->
                        <div class="col-10">
                            <div class="form-group">
                                <label for="major_name">Name</label>
                                <input type="text" id="major_name" class="form-control" name="major_name" placeholder="Masukkan Name" value="{{ old('major_name') }}">
                                <!-- Display Error for major_name -->
                                @error('major_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- Description Input -->
                        <div class="col-10 mt-4">
                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                 <textarea id="description" class="form-control" name="description" placeholder="Masukkan Description" cols="5" rows="5">{{ old('description') }}</textarea>
                                <!-- Display Error for description -->
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-10 d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
