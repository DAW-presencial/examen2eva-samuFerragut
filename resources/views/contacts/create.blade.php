@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a contact</h1>
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
              <input type="text" class="form-control" name="empresa"/>
          </div>

          <div class="form-group">
              <label for="nom">Nom:</label>
              <input type="text" class="form-control" name="nom"/>
          </div>

          <div class="form-group">
              <label for="primer_llinatge">Primer llinatge:</label>
              <input type="text" class="form-control" name="primer_llinatge"/>
          </div>

          <div class="form-group">
              <label for="segon_llinatge">Segon llinatge:</label>
              <input type="text" class="form-control" name="segon_llinatge"/>
          </div>

          <div class="form-group">
              <label for="document_identitat">Document identitat:</label>
              <input type="text" class="form-control" name="document_identitat"/>
          </div>

          <div class="form-group">
              <label for="pais_document">Pais Document identitat:</label>
              <input type="text" class="form-control" name="pais_document"/>
          </div>

          <div class="form-group">
              <label for="provincia">Provincia:</label>
              <input type="text" class="form-control" name="provincia"/>
          </div>

          <div class="form-group">
              <label for="municipi">Municipi:</label>
              <input type="text" class="form-control" name="municipi"/>
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
              <input type="number" class="form-control" name="telefon"/>
          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Add contact</button>
      </form>
  </div>
</div>
</div>
@endsection