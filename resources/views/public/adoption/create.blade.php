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
                                <p class="card-title display-1 text-highlight">Žiadosť o adopciu</p>    
                                <form action="{{ route('public.adoptions.store') }}" method="POST">
                                    @csrf
                                        <label for="dog_id">Chlpáč: </label>

                                        <select name="dog_id">
                                            <option value="{{ $dog->dog_id}}" selected> {{ $dog->name }}</option>
                                        </select>
                                        
                                        <input type="submit" value="Poslať" class="contact-button"><br>
                                    </form>
                            </div>
                        </div>
                            
                    </div>
                </div>
            </div>
        </div> <!-- row  -->
    </div>     <!-- container-sm  -->     
</div> <!-- container-fluid  -->


@endsection