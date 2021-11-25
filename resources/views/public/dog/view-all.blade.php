@extends('layouts.basic')

@section('title', 'Browse')

@section('body')

<div class="container-fluid landing-page-block-light">
    <div class="container-sm">
        <div class="row mt-5">
            <div class="col-sm-12">
                <p class="display-6" id="basic-addon3">Hľadať</p>
                <input type="text" class="form-control form-control-lg" placeholder="Zadajte názov Vami hľadaného psíka alebo plemeno">
            </div>
        </div> <!-- row  -->

        <div class="row mt-5">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="row">
                    @foreach ($dogs as $dog)
                        <div class="card col-sm-4 dog-card">
                            <div class="col-sm-12">
                                <img src="{{ asset('storage/' . $dog->picture) }}" class="card-img-top" alt="Picture of a dog">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $dog->name }}</h5>
                                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                    <a href="#" class="btn btn-info">Ukáž</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div> <!-- row  -->
    </div>     <!-- container-sm  -->     
</div> <!-- container-fluid  -->


@endsection