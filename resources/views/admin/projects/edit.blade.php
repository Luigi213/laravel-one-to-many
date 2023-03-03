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
                <form method="POST" action="{{route('admin.projects.update', $project->titolo)}}">
                    @csrf 

                    @method('PUT')
                    <div class="form-group my-2">
                        <label class="fs-2 fw-semibold" for="title">Titolo</label>
                        <input type="text" class="form-control" name="titolo" id="title" value="{{old('titolo') ?? $project->titolo}}" placeholder="Inserire Titolo">
                        @error('titolo')
                            <div class="mt-2 alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label class="fs-2 fw-semibold" for="description">Descrizione</label>
                        <textarea type="password" class="form-control" name="descrizione" id="description" value="{!!nl2br( old('descrizione') ?? $project->descrizione )!!}" placeholder="Inserire Descrizione">{{old('descrizione') ?? $project->descrizione}}</textarea>
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