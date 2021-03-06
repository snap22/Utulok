@extends('layouts.basic')



@section('title', 'Sign In')

@section('body')

    <div class="container-fluid landing-page-block-light">
        <div class="container">
            <p class="display-4">
            </p>
            <form method="POST" action="/profile/edit/password" onsubmit="return validateUserForm(this)">
                @csrf
                
                <div class="row mt-2 mb-1">
                     <div class="col-6">
                        <x-public.form-input type="password" name="password" label="Heslo" /> <br>
                        <x-public.form-input type="password" name="new_password" label="Nové Heslo" onblur="validatePassword(this)" /> <br>
                        <x-public.form-input type="password" name="new_password_confirmation" label="Potvrdenie nového hesla" /> <br>


                        <button type="submit" class="btn btn-primary mt-3">Zmeniť Heslo</button>
                    </div> 
                    
                </div>
            </form>
        </div>
        
    </div>


@endsection