@extends('layouts.basic')



@section('title', 'Sign Up')

@section('body')

    <div class="container-fluid landing-page-block-light">
        <div class="container">
            <form method="POST" action="/register" onsubmit="validateUserForm()">
                @csrf
                
                <div class="row mt-2 mb-1">
                    <div class="col-3">
                    <x-form-input type="text" name="first_name" placeholder="Krstné Meno" :value="old('first_name')" onblur="validateName(this)"/> 

                    </div>
                    <div class="col-3">
                        <x-form-input type="text" name="last_name" placeholder="Priezvisko" :value="old('last_name')" onblur="validateName(this)"/> 
                    </div>
                </div>

                <div class="row mt-2 mb-1">
                    <div class="col-6">
                        <x-form-input type="text" name="email" placeholder="Email" :value="old('email')" onblur="validateEmail(this)" /> <br>
                        <x-form-input type="text" name="phone_number" placeholder="Telefónne Číslo" :value="old('phone_number')" onblur="validatePhoneNumber(this)" /> <br>
                        <x-form-input type="password" name="password" placeholder="Heslo" onblur="validatePassword(this)" /> <br>
                        <x-form-input type="password" name="password_confirmation" placeholder="Potvrdenie Hesla"/> <br>
                        <button type="submit" class="btn btn-primary mt-3">Registrovať sa</button>
                    </div>

                </div>     
            </form>
        </div>
    </div>


@endsection