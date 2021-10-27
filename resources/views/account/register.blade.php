@extends('layouts.basic')



@section('title', 'Sign Up')

@section('body')

    <div class="container-fluid landing-page-block-light">
        <div class="container">
            <form method="POST" action="/register">
                @csrf
                
                <div class="row mt-2 mb-1">
                    <div class="col-3">
                    <x-form-input type="text" name="first_name" placeholder="Krstné Meno"/> 

                    </div>
                    <div class="col-3">
                        <x-form-input type="text" name="last_name" placeholder="Priezvisko"/> 
                    </div>
                </div>

                <div class="row mt-2 mb-1">
                    <div class="col-6">
                        <x-form-input type="email" name="email" placeholder="Email"/> <br>
                        <x-form-input type="text" name="phone_number" placeholder="Telefónne Číslo"/> <br>
                        <x-form-input type="password" name="password" placeholder="Heslo"/> <br>
                        <x-form-input type="password" name="password_confirmation" placeholder="Potvrdenie Hesla"/> <br>
                        <button type="submit" class="btn btn-primary mt-3">Registrovať sa</button>
                    </div>
                </div>     
            </form>
        </div>
    </div>


@endsection