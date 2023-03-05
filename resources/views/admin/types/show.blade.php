@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-danger">{{ $project->titolo}}</h1>
            <div class="mt-3">        
                <h5>Descrizione</h5>
                <p>{{ $project->descrizione}}</p>
                <h5>Tipo</h5>
                <p>{{ $project->type ? $project->type->name : 'Nessuna tipologia' }}</p>
            </div>
        </div>
    </div>
</div>
@endsection