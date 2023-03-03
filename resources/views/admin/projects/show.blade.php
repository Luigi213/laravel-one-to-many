@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1>Dettagli</h1>
                <div class="mt-3">                 
                    <h3>{{ $project->titolo}}</h3>
                    <p>{{ $project->descrizione}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection