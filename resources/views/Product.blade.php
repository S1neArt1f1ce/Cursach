@extends('layout.layout')
@section('content')
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <img class="card-img-top mb-5 mb-md-0"
                        src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="..." />
                </div>
                <div class="col-md-6">
                    <div class="small mb-1">This is the product №{{$data -> id}}</div>
                    <h1 class="display-5 fw-bolder">{{$data -> name}}</h1>
                    <div class="fs-5 mb-5">
                        <span class="text-decoration-line-through">$100.00</span>
                        <span>$10.00</span>
                    </div>
                    <p class="lead">{{$data -> desc}}</p>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1"
                            style="max-width: 3rem" />
                        <button class="btn btn-outline-dark flex-shrink-0" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
