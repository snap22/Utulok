@extends('layouts.basic')



@section('title', 'Sign Up')

@section('body')

    <div class="container-fluid landing-page-block-light">
        <div class="container">
            <form method="POST" action="/register">
                @csrf
                
                <div class="row mt-2 mb-1">
                    <div class="col-3">
                    <x-form-input type="text" name="first_name" placeholder="Krstné Meno" :value="old('first_name')"/> 

                    </div>
                    <div class="col-3">
                        <x-form-input type="text" name="last_name" placeholder="Priezvisko" :value="old('last_name')"/> 
                    </div>
                </div>

                <div class="row mt-2 mb-1">
                    <div class="col-6">
                        <x-form-input type="email" name="email" placeholder="Email" :value="old('email')" /> <br>
                        <x-form-input type="text" name="phone_number" placeholder="Telefónne Číslo" :value="old('phone_number')" /> <br>
                        <x-form-input type="password" name="password" placeholder="Heslo"/> <br>
                        <x-form-input type="password" name="password_confirmation" placeholder="Potvrdenie Hesla"/> <br>
                        <button type="submit" class="btn btn-primary mt-3">Registrovať sa</button>
                    </div>
                </div>     
            </form>
        </div>
    </div>


@endsection