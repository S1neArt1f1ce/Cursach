@extends('layout.layout')
@section('content')
    <section class="w-1000 p-4 d-flex justify-content-center pb-4">

        {{-- <form method="POST" action="{{ route('user.reg') }}" style="width: 22rem;"> --}}
        <form method="POST" action="{{ route('reg') }}" novalidate style="width: 22rem;">

            @csrf
            <h2>Register</h2>
            <!-- Name input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="{{$errors->has('name') ? 'border-red-300' : ''}} form-label " for="form2Example1">Username</label>
                <input type="name" id="name" class="form-control" name="name" placeholder="User Userson" />
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Email address</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="user@gmail.com" />
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Password</label>
                <input type="password" id="password" class="form-control" name="password"
                    placeholder="Minimum 8 characters" />
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password confirmation input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Confirm password</label>
                <input type="password" id="password_confirmation" class="form-control" name="password_confirmation"
                    placeholder="Minimum 8 characters" />
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Status input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Status</label>
                <select type="status" id="status" class="form-control" name="status">
                    <option value="buyer">Buyer</option>
                    <option value="seller">Seller</option>
                    <option value="admin">Admin</option>
                </select>
                @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                    </div>
                </div>

                {{-- <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                </div> --}}

                <!-- Submit button -->
                <button type="submit" data-mdb-button-init data-mdb-ripple-init
                    class="btn btn-primary btn-block mb-4">Register</button>
            </div>
        </form>
    </section>
@endsection
