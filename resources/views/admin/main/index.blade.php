@extends('layouts.admin')




@section('body')

<div class="">
    <!-- <div class="section">

      
      <div class="row">
        <div class="col s12">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons large">flash_on</i></h2>
            <h4 class="center">Aktuálny stav psov</h4>

            <p class="light">V databáze je momentálne evidovaných {{ $counts['dogs'] }}  štvornoháčov! </p>
          </div>
        </div>
        <div class="col s12">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons large">group</i></h2>
            <h4 class="center">Aktuálny stav používateľov</h4>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons large">settings</i></h2>
            <h4 class="center">Počet adopcií</h4>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br> -->


    <ul class="collapsible">
      <li>
        <div class="collapsible-header"><i class="material-icons">favorite</i>Štvornoháči</div>
        <div class="collapsible-body">
          <p>Aktuálne máme evidovaných <b> {{ $counts['dogs'] }}</b> psov v databáze. 
            Pri pridávaní nových psov je možné si vybrať z  <b> {{ $counts['breeds']}} </b> plemien.
          </p>
        </div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">account_circle</i>Účty</div>
        <div class="collapsible-body">
          <p>
            Momentálne evidujeme <b> {{ $counts['accounts']}} </b> užívateľov v databáze.
            Z toho je bežných užívateľov  <b> {{  $counts['accounts'] - $counts['adminAccounts']}} </b> a počet adminov je <b>{{ $counts['adminAccounts']}}</b>.
          </p>
        </div>
      </li>
      <li>
        <div class="collapsible-header">
          <i class="material-icons">feedback</i>Žiadosti o kontakt <span class="new badge red" data-badge-caption="unsolved">{{ $counts['newMessages'] }}</span>
        </div>
        <div class="collapsible-body">
          <span>Počet správ zanechaných našimi používateľmi je <b>{{ $counts['messages'] }}</b>.
          </span>
        </div>
      </li>
    </ul>


  </div>

  


@endsection