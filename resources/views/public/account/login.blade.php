@extends('layouts.basic')



@section('title', 'Sign In')

@section('body')

    <div class="container-fluid landing-page-block-light">
        <div class="container">
            <form method="POST" action="/login" onsubmit="return validateUserForm(this)">
                @csrf
                
                <div class="row mt-2 mb-1">
                     <div class="col-6">
                        <x-public.form-input type="email" name="email" label="Email" :value="old('email')" onblur="validateEmail(this, false)" /> <br>
                        <x-public.form-input type="password" name="password" label="Heslo" /> <br>
                        <button type="submit" class="btn btn-primary mt-3">Prihlásiť sa</button>
                    </div> 
                    
                </div>
            </form>
        </div>
        
    </div>


@endsection