
@extends('assessor')
@section('content')
            <div class="container mt-50 ">
                <div class="card-content" style="margin-top: -5%; margin-left:200px;">
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="card-body mt-20">
                        <h3 class="fw-bold">edit Kompetensi element</h3>
                        <form class="form form-vertical" action="/komple/update/{{ $competencyElement->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-10 mt-4">
                                        <div class="form-group">
                                            <label for="first-name-vertical">criteria</label>
                                            <input type="text" id="first-name-vertical"
                                                class="form-control" name="criteria"
                                                placeholder="Masukkan criteria" value="{{ old('criteria', $competencyElement->criteria) }}">
                                                @error('criteria')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                    </div>


                                    <div class="col-10 mt-4">
                                        <div class="form-group">
                                            <label for="competency_standard_id" class="form-label">competency id</label>
                                            <select class="form-select" name="competency_id" id="competency_standard_id">
                                                <option value="" disabled selected> -- select compentency standard --</option>
                                                @foreach ($competencyStandards as $standard )
                                                    <option value="{{ $standard->id }}"
                                                        {{ ($standard->competencystandard->competency_id ?? '') == $standard->id ? 'selected' : '' }}
                                                        >{{ $standard->unit_title }}</option>
                                                @endforeach
                                            </select>
                                            {{-- <option value="{{ $major->id }}"
                                                {{ ($->student->competency_id ?? '') == $standard->id ? 'selected' : '' }}>
                                            {{ $major->major_name }}
                                        </option> --}}
                                            @error('compentency_standard_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="col-10 d-flex justify-content-end">
                                        <button type="submit"
                                            class="btn btn-primary me-1 mb-1">Edit</button>
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
