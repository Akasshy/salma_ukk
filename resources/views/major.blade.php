
    @extends('admin')
    @section('content')

        <div class="container mt-50"  id="">
                <div class="card">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tambahkan Major</h6>
                    </div>
                        <div class="card-body">
                            <div class="col-md-6">
                                <a href="/createmajor" class="btn btn-primary">Tambahkan</a>
                            </div>
                        </div>
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                                <thead>
                                    <tr class="text-center ">
                                        <th>NO</th>
                                        <th>NAME</th>
                                        <th>DESKRIPSI</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($major as $key => $item )
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item->major_name }}</td>
                                        <td>{{ $item->description }}</td>

                                        <td>
                                            <a href="/major/delete/{{ $item->id }}" style="width: 20%; height: 30%; font-size:20px;" onclick="return window.confirm('yakin hapus data ini?')" class="btn "><i class="fa-solid fa-trash"></i></a>
                                            <a href="/major/update/{{ $item->id }}" style="width: 10%; height:30%; font-size:20px;" class="btn "><i class="fa-solid fa-pen-to-square"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
        </div>
        @endsection



