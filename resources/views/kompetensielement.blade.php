
@extends('assessor')
@section('content')


<div class="container mt-50" id="" style="margin-left: 20%;">
    <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">kompetensi element</h6>
            </div>
                <div class="card-body">
                    <div class="col-md-6">
                        <a href="/createkomple" class="btn btn-primary">Tambahkan</a>
                    </div>
                </div>
                <div class="form-body">
                    <div class="row">
                        <div class="container">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>CRITERIA</th>
                                        <th>COMPETENCY_ID</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($competencyElements as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->criteria }}</td>
                                        <td>{{ $item->competencystandard->unit_title }}</td>
                                        <td>
                                            <a href="/komple/delete/{{ $item->id }}" style="width: 20%; height: 30%; font-size:20px;" onclick="return window.confirm('yakin hapus data ini?')" class="btn "><i class="fa-solid fa-trash"></i></a>
                                            <a href="/komple/update/{{ $item->id }}" style="width: 10%; height:30%; font-size:20px;" class="btn "><i class="fa-solid fa-pen-to-square"></i></a>
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
@endsection

