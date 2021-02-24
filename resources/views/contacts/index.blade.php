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
                <a class="nav-link active" href="/contacts">Listar tutores</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/contacts/create">Crear nuevo tutor</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Tutores</h1>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Empresa</td>
          <td>Nom</td>
          <td>Primer llinatge</td>
          <td>Segon llinatge</td>
          <td>Document identitat</td>
          <td>Pais document identitat</td>
          <td>Provincia</td>
          <td>Municipi</td>
          <td>Estat</td>
          <td>Telefon</td>
          <td>Email</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{$contact->empresa}}</td>
            <td>{{$contact->nom}}</td>
            <td>{{$contact->primer_llinatge}}</td>
            <td>{{$contact->segon_llinatge}}</td>
            <td>{{$contact->document_identitat}}</td>
            <td>{{$contact->pais_document}}</td>
            <td>{{$contact->provincia}}</td>
            <td>{{$contact->municipi}}</td>
            <td>{{$contact->estat}}</td>
            <td>{{$contact->telefon}}</td>
            <td>{{$contact->email}}</td>
            <td>
                <a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div>
    <a style="margin: 19px;" href="{{ route('contacts.create')}}" class="btn btn-primary">Nuevo tutor</a>
</div>

@endsection