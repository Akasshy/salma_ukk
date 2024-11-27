
    @extends('assessor')
    @section('content')

        <div class="container mt-50"  id="" style="margin-left: 19%;">
                <div class="card">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">penilaian </h6>
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
                                        <th>STUDENT </th>
                                        <th>ASSESSOR </th>
                                        <th>ELEMENT </th>
                                        <th>STATUS</th>
                                        <th>COMMENTS</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($examination as $key => $item )
                                    <tr>
                                        <td>{{ $examination + 1 }}</td>
                                        <td>{{ $examination->exam_date }}</td>
                                        <td>{{ $examination->user->name }}</td>
                                        <td>{{ $examination->assessor->name }}</td>
                                        <td>{{ $examination->element->name }}</td>
                                        <td>{{ $examination->status }}</td>
                                        <td>{{ $examination->comments }}</td>

                                        <td>
                                            <a href="/exam/delete/{{ $item->id }}" style="width: 20%; height: 30%; font-size:20px;" onclick="return window.confirm('yakin hapus data ini?')" class="btn "><i class="fa-solid fa-trash"></i></a>
                                            <a href="/exam/edit/{{ $item->id }}" style="width: 10%; height:30%; font-size:20px;" class="btn "><i class="fa-solid fa-pen-to-square"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
        </div>


        @endsection


