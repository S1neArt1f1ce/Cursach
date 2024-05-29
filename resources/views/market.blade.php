@extends('layout.layout')
@section('content')
    <div class="container d-flex flex-row flex-wrap p-2 justify-content-around">
        @foreach ($data as $data)
            <div class="card m-2 p-2" style="width: 23%;">
                <img class="card-img-top"
                    src='{{ asset('/storage/img/prods/' . $data->name . $data->seller_id . '/' . $data->name . $data->seller_id . '.jpg') }}'
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $data->name }}</h5>
                    <p class="card-text">{{ $data->smalldesc }}</p>
                    <a href="/product/{{ $data->id }}" class="btn btn-primary">Product page</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
