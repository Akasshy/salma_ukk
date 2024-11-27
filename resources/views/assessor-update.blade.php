
@extends('admin')
@section('content')


<div class="container mt-50">
    <div class="card-content" style="margin-top: 5%">
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $assessor )
                    <li>{{ $assessor }}</li>
                @endforeach
            </ul>
        @endif
    <div class="card-body mt-20">
            @csrf
            <div class="card-body mt-20">
                <h3 class="fw-bold">Assessor update</h3>
                <form class="form form-vertical" action="/assessor/update/{{ $assessor->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="foem-body">
                        <div class="row">
                            <div class="col-10">
                                <div class="form-group">
                                    <div class="col-10 mt-4">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Full Name</label>
                                            <input type="text" id="first-name-vertical"
                                                class="form-control" name="name"
                                                placeholder="Masukkan Name" value="{{ $assessor->name}}">
                                                <td>
                                                    @error('name')
                                                        {{ $message }}
                                                    @enderror
                                                </td>
                                        </div>
                                    </div>
                                    <div class="col-10 mt-4">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Username</label>
                                            <input type="text" id="first-name-vertical"
                                                class="form-control" name="username"
                                                placeholder="Masukkan Username" value="{{ $assessor->username}}">
                                        </div>
                                    </div>
                                    <div class="col-10 mt-4">
                                        <div class="form-group">
                                            <label for="email-id-vertical">Email</label>
                                            <input type="email" id="email-id-vertical"
                                                class="form-control" name="email"
                                                placeholder="Masukkan Email" value="{{ $assessor->email }}">
                                                <td>
                                                    @error('email')
                                                        {{ $message }}
                                                    @enderror
                                                </td>
                                        </div>
                                    </div>
                                    {{-- <div class="col-10 mt-4">
                                        <div class="form-group">
                                            <label for="contact-info-vertical">Password</label>
                                            <input type="password" id="contact-info-vertical"
                                                class="form-control" name="password"
                                                placeholder="Masukkan password" value="{{ $assessor->password }}">
                                                <td>
                                                    @error('password')
                                                        {{ $message }}
                                                    @enderror
                                                </td>
                                        </div>
                                    </div> --}}
                                    <div class="col-10 mt-4">
                                        <div class="form-group">
                                            <label for="contact-info-vertical">Phone Number</label>
                                            <input type="number" id="contact-info-vertical"
                                                class="form-control" name="phone_number"
                                                placeholder="Masukkan phone_number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 mt-4">
                                <div class="form-group">
                                    <label for="role" class="form=-label">Assesor type</label>
                                    <select id="assessor_id" class="form-select" name="assessor_type" required>
                                        <option value="" disabled selected>Select a assessor </option>
                                        <option value="internal" {{ $assessor->assessor_type == 'internal' ? 'selected' : '' }}>Internal</option>
                                        <option value="external" {{ $assessor->assessor_type == 'external' ? 'selected' : '' }}>External</option>
                                    </select>
                                </div>
                            </div>
                            <input type="text" id="" name="role" style="display: none" value="assessor">
                            <div class="col-10 mt-4">
                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                     <textarea id="description" class="form-control" name="description" placeholder="Masukkan Description" cols="5" rows="5">{{ $assessor->description }}</textarea>
                                    <!-- Display Error for description -->
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-10 d-flex justify-content-end mt-4">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Edit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
