@extends('layouts.basic')



@section('title', 'Edit Profile')

@section('body')

    <div class="container-fluid landing-page-block-light">
        <div class="container">
            <form method="POST" action="/profile/edit" onsubmit="return validateUserForm(this)">
                @csrf
                @method('PUT')
                
                <div class="row mt-2 mb-1">
                    <div class="col-3">
                    <x-public.form-input type="text" name="first_name" label="Krstné Meno" :value="old('first_name', $user->first_name)" onblur="validateName(this)"/> 

                    </div>
                    <div class="col-3">
                        <x-public.form-input type="text" name="last_name" label="Priezvisko" :value="old('last_name', $user->last_name)" onblur="validateName(this)"/> 
                    </div>
                </div>

                <div class="row mt-2 mb-1">
                    <div class="col-6">
                        <x-public.form-input type="email" name="email" label="Email" :value="old('email', $user->email)" onblur="validateEmail(this)"/> <br>
                        <x-public.form-input type="text" name="phone_number" label="Telefónne Číslo" :value="old('phone_number', $user->phone_number)" onblur="validatePhoneNumber(this)"/>  <br>
                        <button type="submit" class="btn btn-primary mt-3">Zmeniť údaje</button>
                    </div>
                </div>     
            </form>
        </div>
    </div>


@endsection