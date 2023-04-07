@extends('layout.master')

@section('content')
<div class="container my-2">
    <form method="POST" action="{{ url('/category') }}">
    @csrf
        <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama Kategori</label>
          <input type="text" name="nama_category"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text mb-3">Tambahkan nama kategori</div>
        <button type="submit" class="btn btn-primary">+Tambahkan</button>
      </form>
  </div>
</div>
@endsection
