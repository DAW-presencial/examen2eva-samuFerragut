@extends('base')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Examen laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/contacts">Listar tutores</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="/contacts/create">Crear nuevo tutor</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Añadir tutor</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('contacts.store') }}">
          @csrf
          <div class="form-group">    
              <label for="empresa">Empresa:</label>
              <input required type="text" class="form-control" name="empresa" value="{{old('empresa')}}"/>
          </div>

          <div class="form-group">
              <label for="nom">Nom:</label>
              <input required type="text" class="form-control" name="nom" value="{{old('nom')}}"/>
          </div>

          <div class="form-group">
              <label for="primer_llinatge">Primer llinatge:</label>
              <input required type="text" class="form-control" name="primer_llinatge" value="{{old('primer_llinatge')}}"/>
          </div>

          <div class="form-group">
              <label for="segon_llinatge">Segon llinatge:</label>
              <input required type="text" class="form-control" name="segon_llinatge" value="{{old('segon_llinatge')}}"/>
          </div>

          <div class="form-group">
              <label for="document_identitat">Document identitat:</label>
              <input required type="text" class="form-control" name="document_identitat" value="{{old('document_identitat')}}"/>
          </div>

          <div class="form-group">
              <label for="pais_document">Pais Document identitat:</label>
              <input required type="text" class="form-control" name="pais_document" value="{{old('pais_document')}}"/>
          </div>

          <div class="form-group">
              <label for="provincia">Provincia:</label>
              <input required type="text" class="form-control" name="provincia" value="{{old('provincia')}}"/>
          </div>

          <div class="form-group">
              <label for="municipi">Municipi:</label>
              <input required type="text" class="form-control" name="municipi" value="{{old('municipi')}}"/>
          </div>
          <br>
          <div class="form-group">
              <label for="estat">Estat:</label>
              <select name="estat">
                <option value="inactiu">Tutor inactiu</option>
                <option value="actiu" selected>Tutor actiu</option>
              </select>
          </div>
          <br>
          <div class="form-group">
              <label for="telefon">Telefon:</label>
              <input required type="number" class="form-control" name="telefon" value="{{old('telefon')}}"/>
          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <input required type="email" class="form-control" name="email" value="{{old('email')}}"/>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Add contact</button>
      </form>
  </div>
</div>
</div>
@endsection