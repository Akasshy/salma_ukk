
    @extends('admin')
    @section('content')

        <div class="container mt-50"  id="">
                <div class="card">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"></h6>
                    </div>
                        <div class="card-body">
                            <div class="col-md-6">
                                <a href="" class="btn btn-primary">Hasil Ujian Anda</a>
                            </div>
                        </div>
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                                <thead>
                                    <tr class="text-center ">
                                        <th>Tanggal Ujian</th>
                                        <th>Element Kompetensi</th>
                                        <th>Assessor</th>
                                        <th>Status</th>
                                        <th>Komentar</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($results as $key => $result )
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $result->exam_date }}</td>
                                        <td>{{ $result->competencyElement->criteria }}</td>
                                        <td>{{ $result->assessor->user_id->name }}</td>
                                        <td>{{ $result->status 'Lulus' : 'tidak lulus' }}</td>
                                        <td>{{ $result->comments ?? '-' }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
        </div>
        @endsection



