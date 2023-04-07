@extends('layout.master')

@section('content')

<div class="container my-2">
    <a href="{{ url('/category/create') }}" class="btn btn-info btn-sm my-2">+tambah kategori</a>
    @foreach ($Category as $item)
        <div class="col-md-3 mb-3">
            <div class="card" style="width: 18rem">
                <div class="card-body mb-2">
                    <h5 class="card-title m-1">{{ $item->name }}</h5>
                    <a href="/category/{{ $item->id }}/edit" class="btn btn-success btn-sm">edit</a>
                    <form action="{{ url('category/' .$item->id) }}" method="post">
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
