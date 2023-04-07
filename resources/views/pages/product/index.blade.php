@extends('layout.master')

@section('content')
    <div class="container my-2 mb-2">
        <a href="{{ url('/product/create') }}" class="btn btn-info btn-sm my-2">+tambah produk</a>
        @foreach ($Product as $item )
        <div class="card m-3" style="width: 13rem;">
            <img src="{{ asset('assets/img/makanan.png') }}" class="card-img-top" alt="gambar {{$item->nama_barang}}">
        <div class="card" style="width: 18rem ">
            <div class="card-body mb-3">
                <h5 class="card-title m-">{{ $item->name }}</h5>
                <p class="card-title m-1 text-primary">{{ $item->price }}</p>
                <p class="card-title m-1">{{ $item->description }}</p>
                <h5 class="card-title m-1">{{ $item->category->name }}</h5>
                    <a href="/product/{{ $item->id }}/edit" class="btn btn-success btn-sm">edit</a>
                    <form action="{{ url('product/' .$item->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                    <button  class="btn btn-danger btn-sm mt-3">hapus</button>
                    </form>
            </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
