@extends('app')
@section('title', 'Editar')
@section('name', 'Editar')
@section('contenido')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Actualizar Datos Fruta</h3>
        </div>
        <form action="{{url('/update', $fruta->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label>Nombre Fruta</label>
                    <input type="text" class="form-control" placeholder="Nombre Fruta" name="fruta" value="{{$fruta->fruta}}">
                </div>
                <div class="form-group">
                    <label>Cantidad</label>
                    <input type="text" class="form-control" placeholder="Cantidad" name="cantidad" value="{{$fruta->cantidad}}">
                </div>
                <div class="form-group">
                    <label>Proveedor</label>
                    <input type="text" class="form-control" placeholder="Proveedor" name="proveedor" value="{{$fruta->proveedor}}">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    </div>
@endsection