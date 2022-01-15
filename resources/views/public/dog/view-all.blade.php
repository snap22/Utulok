@extends('layouts.basic')

@section('title', 'Browse')

@section('body')

<div class="container-fluid landing-page-block-light">
    <div class="container-sm">
        <div class="row mt-5">
            <div class="col-sm-12 text-center">
                <p class="display-6" id="basic-addon3">Ponuka našich štvornoháčov</p>
            </div>
        </div> <!-- row  -->

        <div class="row ">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="row" id="dogsDiv">
                    <x-public.dogs :dogs=$dogs />
                </div>
            </div>
        </div>

        <div class="row mt-5 text-center">
            <div class="col-sm">
                <button class="btn btn-lg btn-warning" type="submit" onclick="loadData(this)">Načítať ďalších</button>
            </div>
        </div>
    </div>
</div>

@endsection