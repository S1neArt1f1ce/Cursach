@extends('layout.layout')
@section('content')
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <img class="card-img-top mb-5 mb-md-0"
                        src='{{ asset('/storage/img/prods/' . $data->name . $data->seller_id . '/' . $data->name . $data->seller_id . '.jpg') }}'
                        alt="..." />
                </div>
                <div class="col-md-6">
                    <div class="small mb-1">This is the product №{{ $data->id }}</div>
                    <h1 class="display-5 fw-bolder">{{ $data->name }}</h1>
                    <div class="fs-5 mb-5">
                        <span>{{ $data->price }}$</span>
                    </div>
                    <p class="lead">{{ $data->desc }}</p>
                    <div class="d-flex">

                        {{-- quantity input --}}
                        {{-- <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1"style="max-width: 3rem" /> --}}

                        <a class="btn btn-outline-dark flex-shrink-0 m-1" href="/cart/add/{{ $data->id }}">
                            <i class="bi-cart-fill me-1"></i>
                            Add to cart
                        </a>

                        @if (Auth::user()?->id == $data->seller_id)
                            <a href="/editproduct/{{ $data->id }}" class="btn btn-outline-dark flex-shrink-0 m-1">Edit
                                product</a>
                            <a href="/delete_product/{{ $data->id }}"
                                class="btn btn-outline-dark flex-shrink-0 m-1">Delete product</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
