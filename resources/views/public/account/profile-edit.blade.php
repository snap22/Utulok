@extends('layouts.basic')



@section('title', 'Edit Profile')

@section('body')

    <div class="container-fluid landing-page-block-light">
        <div class="container">
            <form method="POST" action="/profile/edit">
                @csrf
                @method('PUT')
                
                <div class="row mt-2 mb-1">
                    <div class="col-3">
                    <x-form-input type="text" name="first_name" placeholder="Krstné Meno" :value="old('first_name', $user->first_name)"/> 

                    </div>
                    <div class="col-3">
                        <x-form-input type="text" name="last_name" placeholder="Priezvisko" :value="old('last_name', $user->last_name)"/> 
                    </div>
                </div>

                <div class="row mt-2 mb-1">
                    <div class="col-6">
                        <x-form-input type="email" name="email" placeholder="Email" :value="old('email', $user->email)"/> <br>
                        <x-form-input type="text" name="phone_number" placeholder="Telefónne Číslo" :value="old('phone_number', $user->phone_number)"/>  <br>
                        <button type="submit" class="btn btn-primary mt-3">Zmeniť údaje</button>
                    </div>
                </div>     
            </form>
        </div>
    </div>


@endsection