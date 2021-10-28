@extends('layouts.basic')



@section('title', 'Sign In')

@section('body')

    <div class="container-fluid landing-page-block-light">
        <div class="container">
            <p class="display-4">
                Pred pokračovaním sa musíte overiť!
            </p>
            <form method="POST" action="/confirm-password">
                @csrf
                
                <div class="row mt-2 mb-1">
                     <div class="col-6">
                        <x-form-input type="password" name="password" placeholder="Heslo" /> <br>
                        <button type="submit" class="btn btn-primary mt-3">Overiť</button>
                    </div> 
                    
                </div>
            </form>
        </div>
        
    </div>


@endsection