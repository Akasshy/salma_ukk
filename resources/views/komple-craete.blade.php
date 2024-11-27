{{--
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
                        <h3 class="fw-bold">Tambah Kompetensi element</h3>
                        <form class="form form-vertical" action="/komple-create" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-10 mt-4">
                                        <div class="form-group">
                                            <label for="first-name-vertical">criteria</label>
                                            <input type="text" id="first-name-vertical"


                                                class="form-control" name="criteria"
                                                placeholder="Masukkan criteria" value="{{ old('criteria') }}">
                                                @error('criteria')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror

                                        </div>
                                    </div>


                                    <div class="col-10 mt-4">
                                        <div class="form-group">
                                            <label for="compentency_standard_id" class="form-label">competency id</label>
                                            <select class="form-select" name="compentency_standard_id" id="compentency_standard_id">
                                                <option value="" disabled selected> -- select compentency standard --</option>
                                                @foreach ($competencyStandards as $standard )
                                                    <option value="{{ $standard->id }}">{{ $standard->unit_title }}</option>
                                                @endforeach
                                            </select>
                                            @error('compentency_standard_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="col-10 d-flex justify-content-end">
                                        <button type="submit"
                                            class="btn btn-primary me-1 mb-1">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endsection

</body>
</html> --}}


@extends('assessor')
@section('content')
<div class="container mt-50">
    <div class="card-content" style="margin-top: -5%; margin-left:200px;">
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        @endif
        <div class="card-body mt-20">
            <h3 class="fw-bold">Tambah Kompetensi Element</h3>
            <form class="form form-vertical" action="/komple-create" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <div class="row">
                        <!-- Container for dynamic criteria -->
                        <div id="criteria-container" class="col-10 mt-4">
                            <label for="criteria" class="form-label">Criteria</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="criteria[]"  placeholder="Masukkan criteria" required>
                                <button type="button" class="btn btn-success" onclick="addCriteria()">+</button>
                            </div>
                        </div>

                        <!-- Competency Standard Dropdown -->
                        <div class="col-10 mt-4">
                            <div class="form-group">
                                <label for="compentency_standard_id" class="form-label">Competency Standard</label>
                                <select class="form-select" name="compentency_standard_id" id="compentency_standard_id" required>
                                    <option value="" disabled selected>-- Select Competency Standard --</option>
                                    @foreach ($competencyStandards as $standard)
                                        <option value="{{ $standard->id }}">{{ $standard->unit_title }}</option>
                                    @endforeach
                                </select>
                                @error('compentency_standard_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-10 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Tambah</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- JavaScript for dynamic criteria -->
<script>
    function addCriteria() {
        const container = document.getElementById('criteria-container');

        // Create a new input group
        const newInputGroup = document.createElement('div');
        newInputGroup.classList.add('input-group', 'mb-3');

        // Create a new input field
        const newInput = document.createElement('input');
        newInput.type = 'text';
        newInput.classList.add('form-control');
        newInput.name = 'criteria[]'; // Array input
        newInput.placeholder = 'Masukkan criteria';
        newInput.required = true;

        // Create a remove button
        const removeButton = document.createElement('button');
        removeButton.type = 'button';
        removeButton.classList.add('btn', 'btn-danger');
        removeButton.textContent = '-';
        removeButton.onclick = () => newInputGroup.remove();

        // Append input and button to the input group
        newInputGroup.appendChild(newInput);
        newInputGroup.appendChild(removeButton);

        // Append the input group to the container
        container.appendChild(newInputGroup);
    }
</script>
@endsection

