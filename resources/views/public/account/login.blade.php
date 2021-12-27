@extends('layouts.basic')

@section('title', 'Sign In')

@section('body')

    <div class="container-fluid">
        <div class="container">
            <div class="card shadow-sm mt-5">
                <div class="card-body">
                    <div class="card-title display-4">
                        Prihlásenie sa
                    </div>
                    <div class="card-text mt-5">
                        <form method="POST" action="/login" onsubmit="return validateUserForm(this)">
                            @csrf
                            
                            <div class="row mt-2 mb-1">
                                <div class="col-sm-6">
                                    <x-public.form-input type="email" name="email" label="Email" :value="old('email')" onblur="validateEmail(this, false)" /> <br>
                                    <x-public.form-input type="password" name="password" label="Heslo" /> <br>
                                    <button type="submit" class="btn btn-dark mt-3">Prihlásiť sa</button>
                                </div> 
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>


@endsection