
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

      
