@extends('layouts.basic')



@section('title', 'Address')

@section('body')

    <div class="container-fluid landing-page-block-light">
        <div class="container">
            <form method="POST" action="{{ route('address.update') }}" onsubmit="return validateUserForm(this)">
                @csrf
                @method('PUT')

                <div class="row mt-2 mb-1">
                    <div class="col-3">
                    <x-form-input type="text" name="street" placeholder="Ulica" :value="old('street', $address->street)"/> 

                    </div>
                    <div class="col-3">
                        <x-form-input type="text" name="house_number" placeholder="Číslo domu" :value="old('house_number', $address->house_number)"/> 
                    </div>
                </div>

                <div class="row mt-2 mb-1">
                    <div class="col-3">
                    <x-form-input type="text" name="zip_code" placeholder="PSČ" :value="old('zip_code', $address->zip_code)" onblur="validateZip(this)"/> 

                    </div>
                    <div class="col-3">
                        <x-form-input type="text" name="city" placeholder="Mesto" :value="old('city', $address->city)"/> 
                    </div>
                </div>

                <div class="row mt-2 mb-1">
                    <div class="col-6">
                        <x-form-input type="text" name="additional_info" placeholder="Bližšie informácie" :value="old('additional_info', $address->additional_info)"/> <br>
                        <button type="submit" class="btn btn-primary mt-3">Upraviť Adresu</button>
                    </div>

                </div>     
            </form>
        </div>
    </div>

@endsection