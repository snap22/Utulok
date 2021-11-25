@extends('layouts.basic')

@section('title', 'Browse')

@section('body')

<div class="container-fluid landing-page-block-light">
    <div class="container-sm">
        <div class="row mt-5">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="card col-sm-4 dog-card">
                        <div class="col-sm-12">
                            <img src="{{ asset('storage/' . $dog->picture) }}" class="card-img-top" alt="Picture of a dog">
                            <div class="card-body">
                                <h5 class="card-title">{{ $dog->name }}</h5>
                                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                <p>
                                    Plemeno: {{ $dog->breed }}
                                </p>
                                <p>
                                    Vek: {{ $dog->age }}
                                </p>
                                <p>
                                    Pohlavie: {{ $dog->gender }}
                                </p>
                                <p>
                                    Info: {{ $dog->info }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row  -->
    </div>     <!-- container-sm  -->     
</div> <!-- container-fluid  -->


@endsection