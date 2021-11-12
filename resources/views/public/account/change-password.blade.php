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
                        <x-form-input type="password" name="password" placeholder="Heslo" /> <br>
                        <x-form-input type="password" name="new_password" placeholder="Nové Heslo" onblur="validatePassword(this)" /> <br>
                        <x-form-input type="password" name="new_password_confirmation" placeholder="Nové Heslo Znovu" /> <br>


                        <button type="submit" class="btn btn-primary mt-3">Zmeniť Heslo</button>
                    </div> 
                    
                </div>
            </form>
        </div>
        
    </div>


@endsection