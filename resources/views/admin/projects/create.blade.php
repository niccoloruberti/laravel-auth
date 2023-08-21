@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Aggiungi un Progetto</h1>
                <div>
                    <a class="btn btn-sm btn-primary" href="{{ route('admin.projects.create')}}">Tutti i progetti</a>    
                </div>
            </div>
        </div>
        <div class="col-12">
            <form action="{{ route('admin.projects.store')}}" method="POST">
                @csrf
                <div class="form-group mt-5 d-flex flex-column w-25">
                    <label class="control-label">Titolo</label>
                    <input type="text" id="name" name="name" placeholder="Titolo" required>
                </div>
                <div class="form-group mt-3 d-flex flex-column w-25">
                    <label class="control-label">Link della repository</label>
                    <input type="text" id="link_repository" name="link_repository" placeholder="link" required>
                </div>
                <div class="form-group mt-3 d-flex flex-column w-25">
                    <label class="control-label">Argomento</label>
                    <input type="text" id="topic" name="topic" placeholder="Argomento">
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-sm btn-success">Aggiungi</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection