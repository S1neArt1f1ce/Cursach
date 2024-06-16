@extends('layout.layout')
@section('content')
    <div class="container">
        <section class="w-400 p-4 d-flex justify-content-center pb-4">

            <form method="POST" action="{{ route('password.store') }}" style="width: 22rem;">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Email address</label>
                    <input id="email" class="form-control" type="email" name="email"
                        value=" {{ old('email', $request->email) }}" required autofocus autocomplete="username"
                        readonly />
                    <error :messages="$errors - > get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label class="form-label" for="form2Example2">Password</label>
                    <input id="password" class="form-control" type="password" name="password" required
                        autocomplete="new-password" />
                    <error :messages="$errors - > get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <label class="form-label" for="form2Example2">Confirm password</label>

                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation"
                        required autocomplete="new-password" />

                    <error :messages="$errors - > get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init
                        class="btn btn-primary btn-block mb-4 w-100">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </section>
    </div>
@endsection
