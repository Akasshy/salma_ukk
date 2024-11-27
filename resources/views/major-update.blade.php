
@extends('admin')
@section('content')
            <div class="contsiner mt-50">

                <div class="card-content" style="margin-top: 5%; margin-left:300px;">
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="card-body">
                        <h3 class="fw-bold">User Create</h3>
                        <form class="form form-vertical" action="/major/update/ {{ $major->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">


                                    <div class="col-10">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Name</label>
                                            <input type="text" id="first-name-vertical" class="form-control" name="name" placeholder="Masukkan Name" value="{{ $major->name }}">
                                            <!-- Display Error for major_name -->
                                            <td>
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </td>
                                        </div>
                                    </div>

                                    <div class="col-10 mt-4">
                                        <div class="form-group">
                                            <label for="contact-info-vertical">Deskripsi</label>
                                            <input type="text" id="contact-info-vertical"
                                                class="form-control" name="description"
                                                placeholder="Masukkan password" value="{{ $major->description}}">
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


</body>
</html>
