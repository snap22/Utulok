@extends('layouts.basic')


@section('title', 'About Us')

@section('body')

    <div class="container-fluid landing-page-block-light">
        <div class="container">
            <div class="row">
            <div class="col-sm">
                <h1 class="section-title text-highlight">
                    Kto sme?
                </h1>
                <p class="section-text">
                    Sme neziskové, apolitické združenie, ktoré pôsobí pod názvom Wouff od roku 2021. 
                    Prevádzkujeme útulok pre týrané, túlavé a opustené psíky v meste Bardejov a v jeho okolí.
                    Naším hlavným cieľom je pre tieto psíky nájsť nový domov, kde by sa cítili v bezpečí a boli by obklopení láskou.
                    Naša činnosť je postavená na základe dobrovoľnosti, lásky k zvieratám a podpory od tých, ktorým nie je osud opustených
                    štvornoháčov ľahostajný.
                </p>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-4">
                <img id="logo-picture" src="images/logo.png" class="img-fluid mx-auto d-block front-picture section-picture" alt="...">
            </div>
            </div>
        </div>
        </div>

        <div  class="container-fluid landing-page-block-dark">
        <div class="container">
            <div class="row">
            <div class="col-sm">
                <h1 class="section-title text-highlight">
                    Čo robíme?
                </h1>
                <p class="section-text">
                    Denne zachraňujeme túlavé psíky v uliciach alebo v kanáloch, ktoré boli vyhodené, stratené, alebo v horšom prípade týrané.
                    Túlavé psy sú nebezpečné, pretože sú potenciálnou príčinou rôznych dopravných nehôd, a niektoré môžu predstavovať hrozbu pre okoloidúcich chodcov.
                    Preto sa ich snažíme odchytiť a odniesť ich ku nám, kde im poskytneme strechu nad hlavou, pravidelnú stravu, liečbu a lekárske kontroly.
                    V útulku sa ich snažíme vycvičiť, aby poslúchali na základné povely. Dávame im našu lásku, starostlivosť a snažíme sa im nájsť nový domov, 
                    kde by mali pohodlie a bezpečie.
                </p>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-4">
                <img src="images/site/happy_dog.jpg" class="img-fluid mx-auto d-block front-picture section-picture" alt="...">
            </div>
            </div>
        </div>
    </div>


@endsection