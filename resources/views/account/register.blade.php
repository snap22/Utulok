@extends('layouts.basic')



@section('title', 'Sign Up')

@section('body')

    <div class="container-fluid landing-page-block-light">
        <div class="container">
            <form method="POST" action="/register">
                @csrf
                
                <div class="row mt-2 mb-1">
                    <div class="col-3">
                        <input class="form-control" value="{{ old('first_name') }}" name="first_name" type="text" placeholder="Krstné meno" aria-label="default input example">
                        @error("first_name")
                            <div class="text-danger">
                                <p class="text-sm"> {{ $message }} </p>
                            </div>
                        @enderror

                    </div>
                    <div class="col-3">
                        <input class="form-control" value="{{ old('last_name') }}" name="last_name" type="text" placeholder="Priezvisko" aria-label="default input example">
                        @error("last_name")
                            <div class="text-danger">
                                <p class="text-sm"> {{ $message }} </p>
                            </div>
                        @enderror

                    </div>
                </div>

                <div class="row mt-2 mb-1">
                    <div class="col-6">
                        <input class="form-control" value="{{ old('email') }}"  name="email" type="email" placeholder="Email" aria-label="default input example">
                        @error("email")
                            <div class="text-danger">
                                <p class="text-sm"> {{ $message }} </p>
                            </div>
                        @enderror

                    </div>
                </div>

                <div class="row mt-2 mb-1">
                    <div class="col-6">
                        <input class="form-control" value="{{ old('phone_number') }}" name="phone_number" type="text" placeholder="Telefónne číslo" aria-label="default input example">
                        @error("phone_number")
                            <div class="text-danger">
                                <p class="text-sm"> {{ $message }} </p>
                            </div>
                        @enderror

                    </div>
                </div>

                <div class="row mt-2 mb-1">
                    <div class="col-6">
                        <input class="form-control" name="password" type="password" placeholder="Heslo" aria-label="default input example">
                        @error("password")
                            <div class="text-danger">
                                <p class="text-sm"> {{ $message }} </p>
                            </div>
                        @enderror

                    </div>
                </div>

                <div class="row mt-2 mb-1">
                    <div class="col-6">
                        <input class="form-control" name="password_confirmation" type="password" placeholder="Potvrdenie hesla" aria-label="default input example">
                        @error("password_confirmation")
                            <div class="text-danger">
                                <p class="text-sm"> {{ $message }} </p>
                            </div>
                        @enderror

                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Registrovať sa</button>
            </form>
        </div>
        
    </div>


@endsection