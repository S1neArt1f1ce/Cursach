@extends('layout.layout')
@section('content')
    <section class="w-1000 p-4 d-flex justify-content-center pb-4">

        {{-- Add product form --}}
        <form action="{{ url('/editproduct/' . $product->id) }}" method="POST" novalidate style="width: 35rem;" class = 'm-3'
            enctype="multipart/form-data">
            <h2>Add product</h2>
            @csrf
            @method('POST')

            <!-- Name input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="{{ $errors->has('name') ? 'border-red-300' : '' }} form-label " for="form2Example1">Product
                    Name:</label>
                <input type="name" id="name" class="form-control" name="name" placeholder="Product Name" />
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <!-- Image input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="{{ $errors->has('img') ? 'border-red-300' : '' }} form-label " for="form2Example1">Product
                    image:</label>
                <p class='text-danger'>Caution! If you rename your product you MUST upload a new photo</p>
                <input type="file" id="img" class="form-control" name="img" placeholder="Product image" />
                @error('img')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <!-- Small description input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="{{ $errors->has('smalldesc') ? 'border-red-300' : '' }} form-label " for="form2Example1">Small
                    description:</label>
                <input type="smalldesc" id="smalldesc" class="form-control" name="smalldesc"
                    placeholder="Small description" />
                @error('smalldesc')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Description input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="{{ $errors->has('desc') ? 'border-red-300' : '' }} form-label "
                    for="form2Example1">Description:</label>
                <input type="desc" id="desc" class="form-control" name="desc" placeholder="Description" />
                @error('desc')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Price input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="{{ $errors->has('desc') ? 'border-red-300' : '' }} form-label "
                    for="form2Example1">Price:</label>
                <input type="price" id="price" class="form-control" name="price" placeholder="Price" />
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Product Type input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Product type:</label>
                <select type="product_type" id="product_type" class="form-control" name="product_type">
                    <option value="food">Food</option>
                    <option value="tool">Tool</option>
                    <option value="cleaning">Cleaning</option>
                    {{-- <option value="admin">Admin</option> --}}
                </select>
                @error('product_type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit button -->
            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                class="btn btn-primary btn-block mb-4 w-100">Add product</button>
        </form>
    </section>
@endsection
