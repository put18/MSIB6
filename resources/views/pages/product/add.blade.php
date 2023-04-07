@extends('layout.master')

@section('content')
<div class="container my-2">
    <form method="POST" action="{{ url('/product') }}">
    @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
            <input type="text" name="nama_product" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Tambahkan nama produk</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Harga</label>
            <input type="text" name="jml_harga" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
            <input type="text" name="des_product" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Kategory</label>
            <select class="form-select" aria-label="Default select example" name='id_category'>
                <option value="" disabled hidden selected>pilih kategori</option>
                @foreach ($categories as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach

            </select>
            <div id="emailHelp" class="form-text">Tambahkan kategori</div>
        </div>
        <button type="submit" class="btn btn-primary">+Tambahkan</button>
    </form>
</div>
@endsection
