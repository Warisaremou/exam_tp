@extends('layout')

@section('title', ': Marchés')

@section('content')
    <div>
        <div class="d-flex align-items-center justify-content-between">
            <h4 class="fw-semibold fs-3">Liste des marchés</h4>
            <a href="{{ route('marche.create') }}" class="btn btn-outline-primary">Ajouter un marché</a>
        </div>

        <div class="mt-5 d-flex colum-gap-5 gap-4 mb-4">
            @forelse ($marches as $marche)
                <div class="card shadow" style="width: 25rem;">
                    <div class="over" style="overflow: hidden; height: 15rem; width: 100%">
                        <img src="/storage/{{ $marche->image }}" class="card-img-top" alt=" {{ $marche->nomMarche }}-photo"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title fw-medium"> {{ $marche->nomMarche }} </h4>
                        <h6>Capacité: {{ $marche->capacite }} places </h6>
                    </div>
                </div>
            @empty
                <h5 class="col-6 mx-auto text-danger ">Aucun marché enregistré !</h5>
            @endforelse
        </div>

          {{ $marches->links() }}
    </div>
@endsection
