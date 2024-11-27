@extends('admin')
@section('content')
<div class="container">
    <form action="/major/create" method="post">
        @csrf
        <div class="mb-3">
            <label for="major">Major Name</label>
            <input type="text" name="major_name" id="">
        </div>
        <div class="mb-3">
            <label for="">description</label>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="simpan">
    </form>
</div>
@endsection
