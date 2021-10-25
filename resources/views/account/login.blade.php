@extends('layouts.basic')



@section('title', 'Sign In')

@section('body')

    <div class="container-fluid landing-page-block-light">
        <div class="container">
            <form method="POST" action="/login">
                @csrf
                
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
                        <input class="form-control" name="password" type="password" placeholder="Heslo" aria-label="default input example">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Prihlásiť sa</button>
            </form>
        </div>
        
    </div>


@endsection