@extends('layouts.basic')



@section('title', 'Sign Up')

@section('body')

    <div class="container-fluid ">
        <div class="container">
            <div class="card shadow-sm  mt-5">
                <div class="card-body">
                    <div class="card-title display-4">
                        Registrácia
                    </div>
                    <div class="card-text mt-5">
                        <form method="POST" action="/register" onsubmit="return validateUserForm(this)">
                            @csrf
                            
                            <div class="row mt-2 mb-1">
                                <div class="col-sm-3">
                                <x-public.form-input type="text" name="first_name" label="Krstné Meno" :value="old('first_name')" onblur="validateName(this)"/> 

                                </div>
                                <div class="col-sm-3">
                                    <x-public.form-input type="text" name="last_name" label="Priezvisko" :value="old('last_name')" onblur="validateName(this)"/> 
                                </div>
                            </div>

                            <div class="row mt-2 mb-1">
                                <div class="col-sm-6">
                                    <x-public.form-input type="text" name="email" label="Email" :value="old('email')" onblur="validateEmail(this)" /> <br>
                                    <x-public.form-input type="text" name="phone_number" label="Telefónne Číslo" :value="old('phone_number')" onblur="validatePhoneNumber(this)" /> <br>
                                    <x-public.form-input type="password" name="password" label="Heslo" onblur="validatePassword(this)" /> <br>
                                    <x-public.form-input type="password" name="password_confirmation" label="Potvrdenie Hesla"/> <br>
                                    <button type="submit" class="btn btn-dark mt-3">Registrovať sa</button>
                                </div>

                            </div>     
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

