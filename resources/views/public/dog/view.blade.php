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
                                <div id="dogStatusInfo" class="h4">
                                    @if ($dog->is_adopted)
                                        @if ($isOwner)
                                            <x-public.form-cancel dog_id='{{ $dog->dog_id }}' />
                                        @else
                                            O tohto chlp????a u?? niekto prejavil z??ujem
                                        @endif

                                    @else
                                        @guest
                                            O chlp????a e??te neprejavil nikto z??ujem! <a class="text text-highlight text-none" href="{{ route('login') }}"> Prihl??ste sa </a> a m????e by?? V????!
                                        @else
                                            <x-public.form-confirm dogId='{{ $dog->dog_id }}' />
                                        @endguest
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div> 


@endsection