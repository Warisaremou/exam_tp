@extends('layout')

@section('title', '- Ajouter Marché')

@section('content')
    <div class="container" style="max-width: 60rem;">
        @include('marche.breadcrumb')
        <div class="card">
            <div class="card-body">
                {{-- <h3 class="card-title fw-medium mb-5 text-center">Ajouter un marché</h3> --}}
                <form method="POST" action="{{ route('marche.store') }}" enctype="multipart/form-data" class="card-text">
                    @csrf
                    <div class="mb-3">
                        <label for="nomMarche" class="col-md-4 col-form-label text-start">Nom du marché *</label>

                        <div>
                            <input id="nomMarche" type="text" placeholder="Nom du marché"
                                class="form-control @error('nomMarche') is-invalid @enderror" name="nomMarche" autofocus>
                            @error('nomMarche')
                                <span class="invalid-feedback text-start" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="col-md-4 col-form-label text-start">Description *</label>

                        <div>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Nom du groupe"
                                id="description" style="height: 100px" autofocus>
                            </textarea>
                            {{-- <input id="description" type="text" placeholder="Nom du groupe"
                                class="form-control @error('description') is-invalid @enderror" name="description"
                                autofocus> --}}
                            @error('description')
                                <span class="invalid-feedback text-start" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="capacite" class="col-md-4 col-form-label text-start">Capacité du marché *</label>

                        <div>
                            <input id="capacite" type="number" placeholder="Capacité du marché"
                                class="form-control @error('capacite') is-invalid @enderror" name="capacite" autofocus>
                            @error('capacite')
                                <span class="invalid-feedback text-start" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="adresse" class="col-md-4 col-form-label text-start">Adresse</label>
                        <div>
                            <input id="adresse" type="texte" placeholder="Adresse"
                                class="form-control @error('adresse') is-invalid @enderror" name="adresse" autofocus>
                            @error('adresse')
                                <span class="invalid-feedback text-start" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="telephone" class="col-md-4 col-form-label text-start">Téléphone</label>
                        <div>
                            <input id="telephone" type="text" placeholder="Téléphone"
                                class="form-control @error('telephone') is-invalid @enderror" name="telephone" autofocus>
                            @error('telephone')
                                <span class="invalid-feedback text-start" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="col-md-4 col-form-label text-start">Image</label>
                        <div>
                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror"
                                name="image" autofocus>
                            @error('image')
                                <span class="invalid-feedback text-start" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-3">
                        <button type="reset" class="col-3 btn btn-danger">
                            Annuler
                        </button>
                        <button type="submit" class="col-3 btn btn-primary">
                            Ajouter
                        </button>
                    </div>

                </form>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success col-md-5 mx-auto" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>
@endsection
