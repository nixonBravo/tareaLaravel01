@extends('app')
@section('title', 'Frutas')
@section('name', 'Frutas')
@section('contenido')
<div class="card card-primary">
    <!-- Formulario Frutas -->
    <div class="card-header">
      <h3 class="card-title">Formulario Frutas</h3>
    </div>
    <form action="{{url('/')}}" method="POST">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label>Nombre Fruta</label>
          <input type="text" class="form-control" name="fruta" placeholder="Nombre Fruta">
        </div>
        <div class="form-group">
          <label>Cantidad</label>
          <input type="text" class="form-control" name="cantidad" placeholder="Cantidad">
        </div>
        <div class="form-group">
          <label>Proveedor</label>
          <input type="text" class="form-control" name="proveedor" placeholder="Proveedor">
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
  </div>
  <!-- /.formulario frutas -->
  <!-- Tabla Frutas -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Frutas</h3>
  
          {{-- <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
  
              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div> --}}
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>#</th>
                <th>Nombre Fruta</th>
                <th>Cantidad</th>
                <th>Proveedor</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($frutas as $item)
                <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$item->fruta}}</td>
                    <td>{{$item->cantidad}}</td>
                    <td>{{$item->proveedor}}</td>
                    <td class="d-flex">
                      <form action="{{url('/edit', $item->id)}}" method="get">
                        @csrf
                        <button><svg xmlns="http://www.w3.org/2000/svg" height="3em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></button>
                      </form>
  
                      <form action="{{url('/delete', $item->id)}}" method="post">
                          @csrf
                          @method('delete')
                          <button><svg xmlns="http://www.w3.org/2000/svg" height="3em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>
                      </form>
                    </td>
                </tr>
              @empty
                <tr>
                    <td>No hay Datos</td>
                    <td>No hay Datos</td>
                    <td>No hay Datos</td>
                    <td>No hay Datos</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.tabla frutas -->
@endsection