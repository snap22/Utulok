@extends('layouts.basic')


@section('title', 'Contact')

@section('body')
    <div class="container-fluid landing-page-block-dark">
        <div class="container-sm">
            <div class="row">
                <div class="col-sm">
                    <div class="card contact-card">
                        <div class="card-body">
                            <p class="contact-card-title">
                                Kontaktujte nás 
                            </p>

                            <div class="row contact-card-body">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 contact-card-text">
                                    <p>
                                        <i class="fa fa-map-marker contact-card-icon"></i>
                                        Sv. Jakuba 3544/7 <br> <span class="text-offset"> 085018 Bardejov </span> 
                                    </p>
                                    <p>
                                        <i class="fa fa-phone contact-card-icon"></i>
                                        +421 123 456 789
                                    </p>
                                    <p>
                                        <i class="fa fa-envelope contact-card-icon"></i>
                                        kontakt@wouff.sk
                                    </p>
                                    <p> 
                                        <i class="fa fa-truck contact-card-icon"></i>
                                        odchyty@wouff.sk
                                    </p>
                                    <p>
                                        <span class="contact-card-icon">
                                            Otváracie hodiny:
                                        </span>
                                        
                                        <br>
                                        <span class="text-offset">
                                            Po-Pia 10:00 - 16:00
                                        </span>
                                        
                                    </p>

                                    
                                    <span class="contact-card-icon">
                                        Radi by ste nám prispeli?
                                    </span> <br>
                                    <p class="text-offset text-small">
                                        <small>
                                            TATRA BANKA <br>
                                            Číslo účtu: 123 456 78 90/1001 <br>
                                            IBAN: SK16 1100 0000 0012 3456 7890 <br>
                                        </small>   
                                    </p>
                                    
                                </div>

                                <div class="col-sm-4 ">
                                    <form action="{{ route('contacts.store') }}" method="POST">
                                    @csrf
                                        <x-form-input type="text" name="contact_title" 
                                            placeholder="Názov správy" :value="old('contact_title')" onblur="" /> 
                                        @guest
                                            <x-form-input type="text" name="contact_email"  
                                                placeholder="Vaša e-mailová adresa" :value="old('contact_email')" 
                                                class="contact-form-control" onblur="" /> 
                                        @else
                                            <x-form-input type="text" name="contact_email"  
                                                placeholder="Vaša e-mailová adresa" :value="Auth::user()->email" readonly
                                                class="contact-form-control" onblur="" /> 
                                        @endguest
                                        <x-form-textarea name="contact_message" 
                                            placeholder="Vaša správa" :value="old('contact_message')"
                                            class="contact-form-control" onblur="" />
                                        
                                        <input type="submit" value="Poslať" class="contact-button"><br>
                                    </form>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection