@extends('layouts.basic')

@section('title', 'Home')

@section('body')

<div class="container-fluid landing-page-block-dark">
        <div class="container-sm">

            <div class="row front-container">
                <div class="col-sm-1"></div>
                <div class="col-sm-10 ">
                    <img src="images/site/sad_dog.jpg" class="img-fluid mx-auto d-block front-picture" alt="..." >
                </div>
            </div>

            <div class="row front-container">
                <div class="col-sm">
                    <p class="front-title text-shadowed">
                        Aj psy potrebujú <span class="text-highlight">domov</span> a <span class="text-highlight">lásku</span>
                    </p>
                    
                </div>
            </div>

            <div class="row front-container">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <p class="front-text">
                        Zmeňťe život týmto roztomilým chlpáčom tým, že si niektorého z nich adoptujete. 
                        Zachránite ho pred utratením a uvoľníte tým miesto ďalšiemu opustenému štvornoháčovi, ktorý sa túla po uliciach. <br>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid landing-page-block-light">
        <div class="container-sm">
            <div class="row">
                <div class="col-sm">
                    <h1 class="front-title-small">
                        Prečo si u nás adoptovať?
                    </h1>
                </div>
            </div>
            <div class="row front-cards">
                <div class="col-sm-1"></div>

                <div class="col-sm-3">
                    <div class="card front-card-dark">
                        <div class="card-body front-text">
                            <div class="display-1 card-title text-highlight">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <p class="">
                                Psy učíme na základné povely ihneď od začiatku. 
                                Adoptujete si psa, ktorý poslúcha na najzákladnejšie povely.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card front-card-dark">
                        <div class="card-body front-text">
                            <div class="display-1 card-title text-highlight">
                                <i class="fa fa-medkit"></i>
                            </div>
                            <p class="">
                                Psy sterilizujeme ihneď od začiatku ich pobytu u nás. 
                                Týmto zabraňujeme premnoženiu zvierat.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card front-card-dark">
                        <div class="card-body front-text">
                            <div class="display-1 card-title text-highlight">
                                <i class="fa fa-heart"></i>
                            </div>
                            <p class="">
                                Získate verného a oddaného spoločníka, ktorý Vás bude mať z celého svojho srdca rád.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid landing-page-block-dark">
        <div class="container-sm">
            <div class="row">
                <div class="col-sm">
                    <p class="front-title-small">
                        Stále váhate? Prezrite si aktuálnu ponuku psov a možno sa do niektorého zamilujete!
                    </p>
                    <p class="front-title-small">
                        <a href="{{ route('public.dogs.view.all') }}" class="front-button shadowed">
                            Hľadať nového kamoša
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection