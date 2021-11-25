@extends('layouts.basic')



@section('title', 'Address')

@section('body')

    <div class="container-fluid landing-page-block-light">
        <div class="container">
            <form method="POST" action="{{ route('address.store') }}" onsubmit="return validateUserForm(this)">
                @csrf
                
                <div class="row mt-2 mb-1">
                    <div class="col-3">
                    <x-public.form-input type="text" name="street" label="Ulica" :value="old('street')" onblur="validateContact(this, 3, 50)"/> 

                    </div>
                    <div class="col-3">
                        <x-public.form-input type="text" name="house_number" label="Číslo domu" :value="old('house_number')" onblur="validateContact(this, 1, 4)"/> 
                    </div>
                </div>

                <div class="row mt-2 mb-1">
                    <div class="col-3">
                    <x-public.form-input type="text" name="zip_code" label="PSČ" :value="old('zip_code')" onblur="validateZip(this)"/> 

                    </div>
                    <div class="col-3">
                        <x-public.form-input type="text" name="city" label="Mesto" :value="old('city')" onblur="validateContact(this, 3, 50)"/> 
                    </div>
                </div>

                <div class="row mt-2 mb-1">
                    <div class="col-6">
                        <x-public.form-input type="text" name="additional_info" label="Bližšie informácie" :value="old('additional_info')"/> <br>
                        <button type="submit" class="btn btn-primary mt-3">Pridať Adresu</button>
                    </div>

                </div>     
            </form>
        </div>
    </div>

@endsection