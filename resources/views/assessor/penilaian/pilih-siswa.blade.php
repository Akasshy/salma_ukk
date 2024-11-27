@extends('assessor')
@section('content')

<div class="container mt-50" id="" style="margin-left: 300px;">
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Student</h6>
        </div>
        <div class="card-body">
            <div class="col-md-6">
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
