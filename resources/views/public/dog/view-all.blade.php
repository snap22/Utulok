@extends('layouts.basic')

@section('title', 'Browse')

@section('body')

<div class="container-fluid landing-page-block-light">
    <div class="container-sm">
        <div class="row mt-5">
            <div class="col-sm-12 text-center">
                <p class="display-6" id="basic-addon3">Ponuka našich štvornoháčov</p>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1">
                        <a href="#" class="btn btn-lg btn-info mr-1">Hľadať </a>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg ml-5" placeholder="Zadajte názov Vami hľadaného psíka alebo plemeno">
                    </div>
                </div>
            </div>
        </div> <!-- row  -->

        <div class="row mt-5">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="row" id="dogsDiv">
                    @foreach ($dogs as $dog)
                        <div class="card col-sm-4 dog-card">
                            <div class="col-sm-12">
                                <img src="{{ asset('storage/' . $dog->picture) }}" class="card-img-top" alt="Picture of a dog">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h5 class="card-title">{{ $dog->name }}</h5>
                                        </div>
                                        <div class="col-sm-1">
                                            <a href="{{ route('public.dogs.view', ['dogId' => $dog->dog_id]) }}" class="btn btn-dark">Ukáž</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div> <!-- row  -->

        <div class="row mt-5 text-center">
            <div class="col-sm">
                <button class="btn btn-lg btn-warning" type="submit" onclick="loadData(this)">Načítať ďalších</button>         
            </div>
        </div>
    </div>     <!-- container-sm  -->     
</div> <!-- container-fluid  -->


@endsection