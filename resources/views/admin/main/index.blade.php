@extends('layouts.admin')




@section('body')

<div>
  <div class="section">
    <div class="row">
      <div class="col s12">


        <div class="icon-block">
          <h2 class="center light-blue-text"><i class="material-icons large">settings</i></h2>
          <h4 class="center">Správa systému</h4>
          <div class="light">
            <ul class="collapsible">
              <li>
                <div class="collapsible-header"><i class="material-icons">favorite</i>Štvornoháči</div>
                <div class="collapsible-body">
                  <p>Aktuálne máme evidovaných <b> {{ $counts['dogs'] }}</b> psov v databáze.
                    Pri pridávaní nových psov je možné si vybrať z <b> {{ $counts['breeds']}} </b> plemien.
                  </p>
                </div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">account_circle</i>Účty</div>
                <div class="collapsible-body">
                  <p>
                    Momentálne evidujeme <b> {{ $counts['accounts']}} </b> užívateľov v databáze.
                    Z toho je bežných užívateľov <b> {{ $counts['accounts'] - $counts['adminAccounts']}} </b> a počet adminov je <b>{{ $counts['adminAccounts']}}</b>.
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
        </div>
      </div>
    </div>

  </div>






</div>




@endsection