@extends('layouts.master')

@section('title')
    Espace Administrateur
@endsection


@section('content')
    

<div class="modal fade" id="addordi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouvel ordinateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/add_ordinateur" method="POST">
         {{ csrf_field() }}

        <div class="modal-body">
            <div class="form-group">
                <label> Nom du poste </label>
                <input type="text" name="nom_poste" class="form-control" placeholder="Nom du poste" required="">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
      </form>

    </div>
  </div>
</div>

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-lg-6">
                <h3>Liste d'ordinateur</h3>
            </div>
            <div class="col-lg-6"><div style="text-align: right;">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addordi">
                <i class="fas fa-user-plus"> </i> Ajouter un ordinateur 
                </button>
            </div></div>
        </div>
        @if (session('status'))
        <div id="bloc-10"><script> setInterval(function(){ var obj = document.getElementById("bloc-10"); obj.innerHTML = "";},3000);</script>
          <h5 style="background: #d4edda; border-color: #36a14f; text-align: center; padding: 7px; color: #155724; border-radius: 2px; width: 50%; margin: 20px auto;">
            {{ session('status') }}
        </div></h5>
        @endif
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="10">
              <thead>
                <tr>
                <th><center>Numero de poste</center></th>
                <th><center>Nom de poste</center></th>
                <th><center>Modifier</center></th>
                <th><center>Supprimer</center></th>
              </tr>
              </thead>
                <tbody>
                  @foreach ($ordinateur as $data)
                  <tr>
                  <td><center>{{ $data->id }}</center></td>
                  <td><center>{{ $data->nom_poste }}</center></td>
                  <td><center><a href="ordinateur_edit/{{ $data->id }}" class="btn btn-success"><i class="fas fa-user-edit"></i> Modifiier</a></center></td>
                  <form action="/ordinateur_supp/{{ $data->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                  <td><center><button type="submit" class="btn btn-danger servideletebtn"><i class="fas fa-trash"></i> Supprimer</button></center></td>
                  </form></tr>
                  @endforeach
                </tbody>
              </table>
          </div>
        </div>
    </div>
  </div>

@endsection


@section('script')
    
@endsection