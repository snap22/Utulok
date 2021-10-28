@extends('layouts.basic')



@section('title', 'Sign In')

@section('body')

    <div class="container-fluid landing-page-block-light">
        <div class="container">
            <form method="POST" action="/login">
                @csrf
                
                <div class="row mt-2 mb-1">
                     <div class="col-6">
                        <x-form-input type="email" name="email" placeholder="Email" :value="old(email)" /> <br>
                        <x-form-input type="password" name="password" placeholder="Heslo" /> <br>
                        <button type="submit" class="btn btn-primary mt-3">Prihlásiť sa</button>
                    </div> 
                    
                </div>
            </form>
        </div>
        
    </div>


@endsection