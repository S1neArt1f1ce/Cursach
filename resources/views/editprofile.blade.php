@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                @if (file_exists('/storage/img/users/' . Auth::user()->email . '/' . Auth::user()->email . '.jpg'))
                                    <img src={{ asset('/storage/img/users/' . Auth::user()->email . '/' . Auth::user()->email . '.jpg') }}
                                        class="rounded-circle" width="150" pla>
                                @else
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Default_pfp.jpg"
                                        class="rounded-circle" width="150" pla>
                                @endif

                                <div class="mt-3">
                                    <h4>{{ Auth::user()->name }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">

                        <form method="POST" action="{{ route('editprofile') }}" style=""
                            enctype="multipart/form-data">

                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Name</h6>
                                    </div>

                                    <div data-mdb-input-init class="col-sm-3 form-outline">
                                        <input type="name" id="form2Example1" class="form-control" name="name"
                                            placeholder="{{ Auth::user()->name }}" />
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <hr>

                                <!-- Image input -->
                                <div class="row">
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="{{ $errors->has('img') ? 'border-red-300' : '' }} form-label "
                                            for="form2Example1">Profile
                                            image:</label>
                                        <input type="file" id="img" class="form-control" name="img"
                                            placeholder="Profile image" />
                                        @error('img')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-info " target="__blank">Confirm edit</button>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
