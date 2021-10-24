@extends('layouts.basic')



@section('title', 'Sign Up')

@section('body')

    <div class="container-fluid landing-page-block-light">
        <h1>
            Hello World!
        </h1>
        <div class="container">
            <form method="POST" action="/register">
                @csrf
                
                <div class="row mt-2 mb-1">
                    <div class="col-3">
                        <input class="form-control" name="first_name" type="text" placeholder="Krstné meno" aria-label="default input example">
                    </div>
                    <div class="col-3">
                        <input class="form-control" name="last_name" type="text" placeholder="Priezvisko" aria-label="default input example">
                    </div>
                </div>

                <div class="row mt-2 mb-1">
                    <div class="col-6">
                        <input class="form-control" name="email" type="email" placeholder="Email" aria-label="default input example">
                    </div>
                </div>

                <div class="row mt-2 mb-1">
                    <div class="col-6">
                        <input class="form-control" name="phone_number" type="text" placeholder="Telefónne číslo" aria-label="default input example">
                    </div>
                </div>

                <div class="row mt-2 mb-1">
                    <div class="col-6">
                        <input class="form-control" name="password" type="password" placeholder="Heslo" aria-label="default input example">
                    </div>
                </div>

                <div class="row mt-2 mb-1">
                    <div class="col-6">
                        <input class="form-control" name="confirm_password" type="password" placeholder="Potvrdenie hesla" aria-label="default input example">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Registrovať sa</button>
            </form>
        </div>
        
    </div>


@endsection