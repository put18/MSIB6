@extends('layout.master')

@section('content')

<div class="container my-2">
    <form action="{{ url('category/' .$Category->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama Kategori</label>
          <input type="text" name="nama_category" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $Category->name }}">
          <div id="emailHelp" class="form-text mb-3">Tambahkan nama kategori</div>
        <button type="submit" class="btn btn-info">+Tambahkan</button>
      </form>
  </div>
</div>
@endsection
