@extends('layouts.basic')

@section('title', 'Browse')

@section('body')

<div class="container-fluid landing-page-block-light">
    <div class="container-sm">
        <div class="row mt-5">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="row">
                    <div class="card col-sm-12 front-card-dark">
                        <div class="row card-body">
                            <div class="col-sm-5">
                                <img src="{{ asset('storage/' . $dog->picture) }}" class="mt-3 card-img-top dog-picture img-fluid" alt="Picture of a dog">
                            </div>
                            <div class="col-sm">
                                <p class="card-title display-1 text-highlight">{{ $dog->name }}</p>    
                                <p class="display-6">
                                    Plemeno: {{ $dog->breed }}
                                </p>
                                <p class="display-6"> 
                                    Vek: {{ $dog->age }}
                                </p>
                                <p class="display-6">
                                    Pohlavie: {{ $dog->gender == 'M' ? 'Samec' : 'Samica' }}
                                </p>
                                @if (! empty($dog->info))
                                    <p class="display-6">
                                        Info: {{ $dog->info }}
                                    </p>
                                @endif
                            </div>
                        </div>
                        <div class="row text-center text-highlight">
                            
                        <div class="text-center">
                            <h4>
                                <div id="dogStatusInfo">                                
                                    @if ($dog->is_adopted)
                                        @if ($isOwner)
                                            O tohto chlpáča ste už prejavili záujem!
                                        @else
                                            O tohto chlpáča už niekto prejavil záujem
                                        @endif
                                    @else
                                        @guest
                                            O chlpáča ešte neprejavil nikto záujem! <a class="text text-highlight text-none" href="{{ route('login') }}"> Prihláste sa </a> a môže byť Váš!
                                        @else
                                            <form action="" method="POST"> 
                                                @csrf
                                                <button class="btn btn-lg btn-warning contact-button" type="button" onclick="sendRequest(this, '{{ $dog->dog_id }}')">Chcem ho!</button>  
                                            </form>
                                        @endguest
                                    @endif
                                </div>
                            </h4>
                        </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row  -->
    </div>     <!-- container-sm  -->     
</div> <!-- container-fluid  -->


@endsection