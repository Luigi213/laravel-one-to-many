@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            @if ($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach                        
                </ul>
            @endif
            <form method="POST" action="{{route('admin.projects.store')}}">
                @csrf 

                <div class="form-group my-2">
                    <label class="fs-2 fw-semibold" for="title">Titolo</label>
                    <input type="text" class="form-control" name="titolo" id="title" placeholder="Inserire Titolo">
                    @error('titolo')
                        <div class="mt-2 alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label class="fs-2 fw-semibold" for="tipo">Tipo</label>
                    <select class="d-block" name="type_id" id="tipo">
                        <option value="">Seleziona tipo</option>
                        @foreach ($types as $type)                                
                        <option value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-2">
                    <label class="fs-2 fw-semibold" for="description">Descrizione</label>
                    <textarea type="password" class="form-control" name="descrizione" id="description" placeholder="Inserire Descrizione"></textarea>
                    @error('descrizione')
                        <div class="mt-2 alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Salva</button>
            </form>
        </div>
    </div>
</div>
@endsection