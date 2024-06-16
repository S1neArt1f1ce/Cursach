@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <section class="w-400 p-4 d-flex justify-content-center pb-4">
            <form method="POST" action="{{ route('password.forgot.store') }}" style="width: 22rem;">
                @csrf

                <!-- Email Address -->
                <div>
                    <input-label for="email" :value="__('Email')" />
                    <input id="email" class="form-control" type="email" name="email" placeholder="email"
                        :value="old('email')" required autofocus />
                    <input-error :messages="$errors - > get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init
                        class="btn btn-primary btn-block mb-4 w-100">
                        Send reset link
                    </button>
                </div>
            </form>
        </section>
    </div>
@endsection
