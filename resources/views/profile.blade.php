@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src={{ asset('/storage/img/users/' . Auth::user()->email . '/' . Auth::user()->email. '.jpg') }}
                                    class="rounded-circle" width="150" pla>
                                <div class="mt-3">
                                    <h4>{{ Auth::user()->name }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ Auth::user()->name }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ Auth::user()->email }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Status</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ Auth::user()->status }}
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="btn btn-info " target="__blank" href="{{ route('editprofile') }}">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row'>
                <h2>Added Products</h2>
                <div class="d-flex flex-row flex-wrap p-2 justify-content-around">
                    @foreach ($product as $products)
                        <div class="card m-2 p-2" style="width: 23%;">
                            <img class="card-img-top"
                                src='{{ asset('/storage/img/prods/' . $products->name . $products->seller_id . '/' . $products->name . $products->seller_id . '.jpg') }}'
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $products->name }}</h5>
                                <p class="card-text">{{ $products->smalldesc }}</p>
                                <a href="/product/{{ $products->id }}" class="btn btn-primary">Product page</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
