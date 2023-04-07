@extends('layout.master')

@section('content')
<div class="container my-2">
    <form action="{{ url('product/' .$Product->id) }}" method="post">
        @method('PUT')
        @csrf
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
            <input type="text" name="nama_product" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Tambahkan nama produk</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Harga</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
            <input type="text" name="des_product" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Kategory</label>
            <select class="form-select" aria-label="Default select example">
                <option value="" disabled hidden selected>pilih kategori</option>
                <option value="">one</option>
                <option value="">Two</option>
            </select>
            <div id="emailHelp" class="form-text">Tambahkan kategori</div>
        </div>
        <button type="submit" class="btn btn-info">+Tambahkan</button>
    </form>
</div>
@endsection
