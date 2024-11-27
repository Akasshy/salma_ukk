
    @extends('admin')
    @section('content')
                <div class="container mt-50 ">
                    <div class="card-content" style="margin-top: 5%">
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="card-body mt-20">
                            <h3 class="fw-bold">User Create</h3>
                            <form class="form form-vertical" action="/add/user" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-10">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Full Name</label>
                                                <input type="text" id="first-name-vertical"
                                                    class="form-control" name="name"
                                                    placeholder="Masukkan Name" value="{{ old('name') }}">
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
                                        <input type="text" name="role" style="display: none" value="student" id="">
                                        {{-- <div class="col-10 mt-4">
                                            <div class="form-group">
                                                <label for="role" class="form-label">Role</label>
                                                <select id="role" name="role" required>
                                                    <option value="" disabled selected>Select a role</option>
                                                    <option value="admin">Admin</option>
                                                    <option value="student">Student</option>
                                                    <option value="assessor">Assessor</option>
                                                </select>
                                            </div>
                                        </div> --}}
                                        <div class="col-10 mt-4">
                                            <div class="form-group">
                                                <label for="contact-info-vertical">Nisn</label>
                                                <input type="text" id="contact-info-vertical"
                                                    class="form-control" name="nisn"
                                                    placeholder="Masukkan nisn">
                                            </div>
                                        </div>
                                        <div class="col-10 mt-4">
                                            <div class="form-group">
                                                <label for="role" class="form=-label">Kelas</label>
                                                <select id="kelas" name="grade_level" class="form-select" required>
                                                    <option value="" disabled selected >Select a kelas</option>
                                                    <option value="10">x</option>
                                                    <option value="11">xi</option>
                                                    <option value="12">xii</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-10 mt-4">
                                            <div class="form-group">
                                                <label for="" class="form=-label">Major</label>
                                                <select id="major" class="form-control" name="major_id" required>
                                                    @foreach($majors as $major)
                                                        <option value="{{ $major->id }}" {{ old('major_id') == $major->id ? 'selected' : '' }}>
                                                            {{ $major->major_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-10 d-flex justify-content-end">
                                            <button type="submit"
                                                class="btn btn-primary me-1 mb-1">Submit</button>
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
