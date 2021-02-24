@extends('base')

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