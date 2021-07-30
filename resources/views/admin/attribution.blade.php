@extends('layouts.master')

@section('title')
    Attribuer un poste
@endsection


@section('content')
    
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Attribuer un poste</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="10">
              <thead>
                <tr>
                <th><center>Nom du poste</center></th>
                <th><center>Nom de l'utilisateur</center></th>
                <th><center>Date d'attribution</center></th>
                <th><center>Heure</center></th>
                <th><center>Modifier</center></th>
                <th><center>Supprimer</center></th>
              </tr>
              </thead>
                <tbody>
                  @foreach ($attributions as $data)
                  <tr>
                  <td><center>{{ $data->nom_poste }}</center></td>
                  <td><center>{{ $data->name }}</center></td>
                  <td><center>{{ $data->date }}</center></td>
                  <td><center>{{ $data->heureDebut }}</center></td>
                  <td><center><a href="#" class="btn btn-success"><i class="fas fa-user-edit"></i> Modifiier</a></center></td>
                  <form action="#" method="POST">
                    {{-- {{ csrf_field() }}
                    {{ method_field('DELETE') }} --}}
                  <td><center><button type="submit" class="btn btn-danger servideletebtn"><i class="fas fa-trash"></i> Supprimer</button></center></td>
                  </tr></form>
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