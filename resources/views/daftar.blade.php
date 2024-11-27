

@extends('admin')
@section('content')


<div class="container mt-50"  id="" style="margin-left: 19%;">
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">assesmen</h6>
        </div>
            <div class="card-body">
                <div class="col-md-6">
                    <a href="/createexam" class="btn btn-primary">Tambahkan</a>
                </div>
            </div>
            <!-- table head dark -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                    <thead>
                        <tr class="text-center ">
                            <th>NO</th>
                            <th>EXAM DATE</th>
                            <th>STUDENT ID</th>
                            <th>ASSESSOR ID</th>
                            <th>ELEMENT ID</th>
                            <th>STATUS</th>
                            <th>COMMENTS</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($examination as $key => $item )
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $item->exam_date }}</td>
                            <td>{{ $item->student->name }}</td>
                            <td>{{ $item->assessor->name }}</td>
                            <td>{{ $item->element->name }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->comments }}</td>

                            <td>
                                <a href="/exam/delete/{{ $item->id }}" style="width: 20%; height: 30%; font-size:20px;" onclick="return window.confirm('yakin hapus data ini?')" class="btn "><i class="fa-solid fa-trash"></i></a>
                                <a href="{{ $item->id }}" style="width: 10%; height:30%; font-size:20px;" class="btn "><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>


@endsection
