
@extends('admin')
@section('content')


<div class="container mt-50">
    <div class="card-content" style="margin-top: 5%">
        @if ($errors->any())
            <ul>
                @foreach ($admins->all() as $admin )
                    <li>{{ $admin }}</li>
                @endforeach
            </ul>
        @endif
        <div class="card-body mt-20">
            <h3 class="fw-bold">Admin Create</h3>
            <form class="form form-vertical" action="/add/user" method="post">
                @csrf
                <div class="foem-body">
                    <div class="row">
                        <div class="col-10 mt-4">
                            <div class="form-group">
                                <label for="first-name-vertical">name</label>
                                <input type="text" name="name"  placeholder="masukan name" class="form-control">
                            </div>
                        </div>
                        <div class="col-10 mt-4">
                            <div class="form-group">
                                <label for="first-name-vertical">Username</label>
                                <input type="text" id="first-name-vertical"
                                    class="form-control" name="username"
                                    placeholder="Masukkan Username" value="{{ old('username') }}">
                            </div>
                        </div>
                        <div class="col-10 mt-4">
                            <div class="form-group">
                                <label for="email-id-vertical">Email</label>
                                <input type="email" id="email-id-vertical"
                                class="form-control" name="email"
                                placeholder="Masukkan Email" value="{{ old('email') }}">
                                <td>
                                    @error('email')
                                    {{ $message }}
                                    @enderror
                                </td>
                            </div>
                        </div>
                        <div class="col-10 mt-4">
                            <div class="form-group">
                                <label for="contact-info-vertical">Password</label>
                                <input type="password" id="contact-info-vertical"
                                    class="form-control" name="password"
                                    placeholder="Masukkan password" value="{{ old('password') }}">
                                    <td>
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </td>
                            </div>
                        </div>
                        <div class="col-10 mt-4">
                            <div class="form-group">
                                <label for="contact-info-vertical">Phone Number</label>
                                <input type="number" id="contact-info-vertical"
                                    class="form-control" name="phone_number"
                                    placeholder="Masukkan password">
                            </div>
                        </div>
                        <div class="col-10 mt-4">
                            <div class="form-group">
                                {{-- <label for="contact-info-vertical"></label> --}}
                                <input type="text" name="role" id="" value="admin" style="display: none">
                            </div>
                        </div>
                        <div class="col-10 d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
</div>
@endsection
