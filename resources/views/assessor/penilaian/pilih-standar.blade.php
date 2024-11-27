
@extends('assessor')
@section('content')
    <div class="container mt-50"  id="" >
            <div class="card" style="margin-left: 150px;">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">kompetensi standar</h4>
                </div>
                    <div class="card-body">
                        <div class="col-md-6">
                        </div>
                    </div>
                    <!-- table head dark -->
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                            <thead>
                                <tr class="text-center ">
                                    <th>NO</th>
                                    <th>CODE</th>
                                    <th>TITLE</th>
                                    <th>DESKRIPSI</th>
                                    <th>MAJOR_ID</th>
                                    {{-- <th>ASSESSOR_ID</th> --}}
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($competencyStandard as $key => $item )
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->unit_code }}</td>
                                    <td>{{ $item->unit_title }}</td>
                                    <td>{{ $item->unit_description }}</td>
                                    <td>{{ $item->major->major_name }}</td>
                                    {{-- <td>{{ $item->assessor->user->name}}</td> --}}
                                    <td>
                                        <a href="/pilih/siswa/{{ $item->id }}"  class="btn btn-primary ">Pilih</a>
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
