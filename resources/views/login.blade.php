@extends('layout.layout')
@section('content')
    <section class="w-400 p-4 d-flex justify-content-center pb-4">

        <form method="POST" action="" style="width: 22rem;">

            @csrf
            <h2>login</h2>
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Email address</label>
                <input type="email" id="form2Example1" class="form-control" name="email" />
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Password</label>
                <input type="password" id="form2Example2" class="form-control" name="password" />
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit button -->
            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                class="btn btn-primary btn-block mb-4 w-100">log in</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="/register">Register</a></p>
            </div>
        </form>
    </section>
@endsection
