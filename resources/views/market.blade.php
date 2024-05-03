@extends('layout.layout')
@section('content')
    <div class="container d-flex flex-row flex-wrap p-2 justify-content-around">
        @foreach ($data as $data)
            <div class="card m-2 p-2" style="width: 23%;">
                <img class="card-img-top"
                    src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$data -> name}}</h5>
                    <p class="card-text">{{$data -> smalldesc}}</p>
                    <a href="/product/{{$data -> id}}" class="btn btn-primary">Product page</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
