@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between my-2">
                <div>
                    <h1>Modifica {{ $project->title }}</h1>
                </div>

                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                <div>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary my-2">Torna all'Elenco</a>
                </div>
            </div>
            <div class="col-12">

                <form action="{{ route('admin.projects.update', $project->slug) }} " method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- * TITOLO --}}
                    <div class="form-group my-3">
                        <label class="control-label">
                            Id
                        </label>
                        <input type="text" class="form-control" placeholder="Modifica Id" id="id"
                            name="id" value="{{ old('id') ?? $project->id }}">
                    </div>

                    {{-- * TITOLO --}}
                    <div class="form-group my-3">
                        <label class="control-label">
                            Titolo
                        </label>
                        <input type="text" class="form-control" placeholder="Inserisci Titolo Progetto" id="title"
                            name="title" value="{{ old('title') ?? $project->title }}">
                    </div>
                    {{-- * DESCRIZIONE --}}
                    <div class="form-group my-3">
                        <label class="control-label">
                            Descrizione
                        </label>
                        <textarea type="text" class="form-control" placeholder="Inserisci Descrizione del Progetto" id="description"
                            name="description" value="{{ old('description') ?? $project->description }}"></textarea>
                    </div>
                    {{-- * CATEGORIA --}}
                    <div class="form-group my-3">
                        <label class="control-label">
                            Categoria
                        </label>
                        <input type="text" class="form-control" placeholder="Inserisci la Categoria" id="category"
                            name="category" value="{{ old('category') ?? $project->category }}">
                    </div>
                    {{-- * IMMAGINE --}}
                    <div class="form-group my-3">
                        <label class="control-label">
                            Immagine
                        </label>
                        <input type="file" class="form-control" placeholder="Inserisci l'Immagine" id="image"
                            name="image" value="{{ old('image') ?? $project->image }}">
                    </div>
                    {{-- * PUBBLICATO --}}
                    {{-- <div class="form-group my-3">
                        <label class="control-label">
                            Pubblicato
                        </label>
                        <input type="date" class="form-control" placeholder="Inserisci l'Immagine"
                            id="published" name="published" value="{{ old('published') ?? $project->published }}">
                    </div> --}}



                    <div class="form-group my-3">
                        <button type="submit" class="btn btn-success">SALVA</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
