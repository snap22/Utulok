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
                        <h4>Adresa: </h4>
                        @if ( isset($address) )
                            {{ $address->street . ' ' . $address->house_number . ', ' . $address->zip_code . ' ' . $address->city }}
                        @else
                            Žiadna
                        @endif
                        
                    </p>
                    
                    <p>
                        Adoptovania: Žiadne
                    </p>

                </div>

            </div>
            <div class="row mt-5">
                <div class="col-sm">
                    <form method="POST" action="/profile">
                        @csrf
                        @method('DELETE')
                        <a href="/profile/edit" class="btn btn-info"> Upraviť údaje </a> 

                        @if ( isset($address) )
                            <a href="/profile/address/edit" class="btn btn-info"> Upraviť adresu </a> 
                        @else
                            <a href="/profile/address" class="btn btn-success"> Pridať adresu </a> 
                        @endif

                        <a href="/profile/edit/password" class="btn btn-warning"> Zmeniť heslo </a> 
                        <button class="btn btn-danger" type="submit"> Zmazať účet </button>
                    </form>

                </div>
            </div>

        </div>

        
    </div>


@endsection