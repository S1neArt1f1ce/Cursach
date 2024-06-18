@extends('layout.layout')
@section('content')
    <section style="background: url(http://127.0.0.1:8000/storage/img/spaceBG.jpg) no-repeat center center;">
        <div class="container ">
            <div class="row">
                <div class="col-md-2">
                    <form action=" {{ route('market') }}">
                        <h2>Filter</h2>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="form2Example2">Product type:</label>
                            <select type="product_type" id="product_type" class="form-control" name="product_type">
                                <option value="food">Food</option>
                                <option value="tool">Tool</option>
                                <option value="cleaning">Cleaning</option>
                            </select>
                        </div>
                        <!-- Submit button -->
                        <button type="submit" data-mdb-button-init data-mdb-ripple-init
                            class="btn btn-primary btn-block mb-4 w-100">Search</button>

                        <a href='{{ route('market') }}'class="btn btn-primary btn-block mb-4 w-100">Clear Filter</a>
                    </form>
                </div>

                <div class="col-md-9  ">
                    <h2>Products</h2>
                    <div class="d-flex flex-row flex-wrap p-2 justify-content-around">
                        @forelse ($products as $products)
                            <div class="card m-2 p-2 w-sm-70 w-md-40 w-lg-40 w-23 " style="border-radius: 0 .5rem 0 .5rem" >
                                <img class="card-img-top"
                                    src='{{ asset('/storage/img/prods/' . $products->name . $products->seller_id . '/' . $products->name . $products->seller_id . '.jpg') }}'
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $products->name }}</h5>
                                    <p class="card-text">{{ $products->smalldesc }}</p>
                                    <a href="/product/{{ $products->id }}" class="btn btn-primary">Product page</a>
                                </div>
                            </div>
                        @empty
                            <h2>No products available</h2>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
