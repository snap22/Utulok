@extends('layouts.basic')



@section('title', 'Profile')

@section('body')

    <div>

    </div>

    <div class="container-fluid landing-page-block-light">
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm">
                    <p class="display-4">
                        {{ ucwords($user->first_name) }}  {{ ucwords($user->last_name) }}
                    </p>

                    <p>
                        <h3>Kontaktné údaje: </h3> <br>
                        Email: {{ $user->email }} <br>
                        Telefón: {{ $user->phone_number }}
                    </p>

                    <p>
                        Adresa: Ulica 58, Mesto 012 34
                    </p>
                    
                    <p>
                        Adoptovania: Žiadne
                    </p>

                </div>

            </div>
            <div class="row mt-5">
                <div class="col-sm">
                
                    <a href="/profile/edit" class="btn btn-info"> Upraviť údaje </a> 
                    <a href="#" class="btn btn-warning"> Zmeniť heslo </a> 

                    <form method="POST" action="/profile">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit"> Zmazať účet </button>
                    </form>

                </div>
            </div>

        </div>

        
    </div>


@endsection