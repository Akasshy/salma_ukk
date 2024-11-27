
    @extends('admin')
    @section('content')



    <div class="container mt-50" id="">
        <div class="card">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Admin</h6>
                </div>
                    <div class="card-body">
                        <div class="col-md-6">
                            <a href="/admin/create" class="btn btn-primary">Tambah</a>
                        </div>
                    </div>
                    <div class="form-body">
                        <div class="row">
                            <div class="container">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>EMAIL</th>
                                            <th>USERNAME</th>
                                            <th>PHONE NUMBER</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($admins as $key => $admin)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $admin->name }}</td>
                                            <td>{{ $admin->email }}</td>
                                            <td>{{ $admin->username }}</td>
                                            <td>{{ $admin->phone_number }}</td>
                                            <td>
                                                <a href="/admin/delete/{{ $admin->id }}" style="width: 20%; height: 30%; font-size:20px;" onclick="return window.confirm('yakin hapus data ini?')" class="btn "><i class="fa-solid fa-trash"></i></a>
                                                <a href="/user/edit/{{ $admin->id }}" style="width: 10%; height:30%; font-size:20px;" class="btn "><i class="fa-solid fa-pen-to-square"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    </div>


    <div class="container mt-50" id="">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Assessor</h6>
            </div>
            <div class="card-body">
                <div class="col-md-6">
                    <a href="/createassessor" class="btn btn-primary">Tambah</a>
                 </div>
            </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA</th>
                            <th>ASSESSOR_TYPE</th>
                            <th>DESKRIPSI</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($assessors as $key => $assessor)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $assessor->user->name }}</td>
                            <td>{{ $assessor->assessor_type }}</td>
                            <td>{{ $assessor->description }}</td>
                            <td>
                                <a href="/assessor/delete/{{ $assessor->id }}" style="width: 20%; height: 30%; font-size:20px;" onclick="return window.confirm('yakin hapus data ini?')" class="btn "><i class="fa-solid fa-trash"></i></a>
                                <a href="/user/edit/{{ $assessor->user->id }}" style="width: 10%; height:30%; font-size:20px;" class="btn "><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>

    <div class="container mt-50" id="">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Student</h6>
            </div>
            <div class="card-body">
                <div class="col-md-6">
                    <a href="/user/create" class="btn btn-primary">Tambah</a>
                 </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>NISN</th>
                        <th>GRADE LEVEL</th>
                        <th>MAJOR</th>
                        <th>AKSI</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $key => $student)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $student->user->name }}</td>
                        <td>{{ $student->nisn }}</td>
                        <td>{{ $student->grade_level }}</td>
                        <td>{{ $student->major_id }}</td>
                        <td>
                            <a href="/user/delete/{{ $student->user->id }}" style="width: 20%; height: 30%; font-size:20px;" onclick="return window.confirm('yakin hapus data ini?')" class="btn "><i class="fa-solid fa-trash"></i></a>
                            <a href="/user/edit/{{ $student->user->id }}" style="width: 10%; height:30%; font-size:20px;" class="btn "><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>

    </div>

        @endsection

</body>
</html>





