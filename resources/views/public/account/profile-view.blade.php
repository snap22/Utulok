@extends('layouts.basic')



@section('title', 'Profile')

@section('body')


    <div class="container-fluid landing-page-block-light">
        <div class="container ">
            <div class="text-center mt-2">   
                <h1 class="display-4"> {{ $user->first_name . ' ' . $user->last_name }} </h1>
            </div>
            <div class="card front-card-dark">
            <div class="card-body">
                <h5 class="card-title">Kontaktné údaje</h5>
                <p class="card-text">
                    <div class="row">
                        <div class="col-sm">
                            <p>
                                Meno:  {{ $user->first_name }} <br>
                                Priezvisko: {{$user->last_name }} <br>
                                Email: {{ $user->email }} <br>
                                Telefón: {{ $user->phone_number }}
                            </p>
                        </div>

                    </div>
                </p>
                <div class="row mt-2">
                    <div class="col-sm">
                        <form method="POST" action="/profile">
                            @csrf
                            @method('DELETE')
                            <a href="/profile/edit" class="btn btn-info"> Upraviť údaje </a> 

                            <a href="/profile/edit/password" class="btn btn-warning"> Zmeniť heslo </a> 
                            <button class="btn btn-danger" type="submit"> Zmazať účet </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3 front-card-dark">
            <div class="card-body">
                <h5 class="card-title">Adresa</h5>
                <p class="card-text">
                    <div class="row">
                        <div class="col-sm">
                            <p>
                                @if ( isset($address) )
                                    Ulica:  {{ $address->street }} <br>
                                    Číslo domu:  {{ $address->house_number }} <br>
                                    Mesto: {{ $address->city }} <br>
                                    PSČ: {{ $address->zip_code }} <br>
                                @else
                                    Nemáte pridanú žiadnu adresu.
                                @endif
                            </p>
                        </div>

                    </div>
                </p>
                <div class="row mt-2">
                    <div class="col-sm">
                        @if ( isset($address) )
                            <form method="POST" action="{{ route('address.destroy') }}">
                                @csrf
                                @method('DELETE')
                                <a href="/profile/address/edit" class="btn btn-info"> Upraviť adresu </a> 
                                <button class="btn btn-danger" type="submit"> Zmazať adresu </button>
                            </form>
                        @else
                            <a href="/profile/address" class="btn btn-success"> Pridať adresu </a> 
                        @endif
                    </div>
                </div>
            </div>
            </div>

            <div class="card front-card-dark">
            <div class="card-body">
                <h5 class="card-title">Chlpáči, ktorí Vás zaujali</h5>
                <p class="card-text">
                    @foreach($dogs as $dog)
                        <div class="text-highlight mt-1">
                            <i class="fa fa-paw"></i> <a href="{{ route('public.dogs.view', ['dogId' => $dog->dog_id] ) }}" class="text-highlight text-none"> {{ $dog->name }} </a>
                        </div>        
                    @endforeach
                </p>
            

            </div>
         </div>



    </div>
</div>


    

@endsection