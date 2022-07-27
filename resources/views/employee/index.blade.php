@extends('adminlte::page')

@section('title', 'TARIFAS')

@section('content_header')
   <h2>Empleados</h2>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Lista de Clientes</span>
          @include('employee.modal')
       </strong>
       <!-- SEARCH FORM -->
       <form class="form-inline my-2 my-lg-0">             
            <input class="form-control form-control-navbar" name="search" type="search" placeholder="Buscar...">
            <button class="btn btn-navbar" type="submit">
                  <i class="fa fa-search"></i>
            </button>       
          </form>
  
          <h4>
              @if($search)
              <div class="alert alert-success" role="alert">
                  El resultado de la busqueda de '{{$search}}' es:
              </div>
              @endif
          </h4>
          
      </div>
       <div class="panel-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="text-center" style="width: 50px;">#</th>
              <th class="text-center">Usuario</th>
              <th class="text-center">Nombre</th>
              <th class="text-center">Apellido</th>
              <th class="text-center">Tipo de Documento</th>
              <th class="text-center">Numero de Documento</th>
              <th class="text-center">Fecha de nacimiento</th>
              <th class="text-center">Contraseña</th>
              <th class="text-center">Creado</th>
              <th class="text-center">Actualizado</th>
              
              <th class="text-center" style="width: 100px;">Acciones</th>
            </tr>
          </thead>
          <tbody>
          @foreach($employees as $employee)
            <tr>
             <td class="text-center">{{$employee->id}}</td>
             <td class="text-center">{{$employee->user}}</td>
             <td class="text-center">{{$employee->name}}</td>
             <td class="text-center">{{$employee->lastname}}</td>
             <td class="text-center">{{$employee->typeId}}</td>
             <td class="text-center">{{$employee->numId}}</td>
             <td class="text-center">{{$employee->birthdate}}</td>
             <td class="text-center">{{$employee->password}}</td>
             <td class="text-center">{{$employee->created_at}}</td>
             <td class="text-center">{{$employee->updated_at}}</td>

             
             <td class="text-center" title="Modificar">
             @include('employee.modal-edit')
             <form method="POST" action="{{route('employee.destroy',$employee->id)}}">    
                  @csrf            
                  @method('DELETE')
                  <button type="submit" title="Eliminar" class="btn btn-danger btn-sm" onclick="return confirm('¿Estas seguro de eliminar este registro?')">
                    <i class="far fa-trash-alt"></i>
                  </button>
              </form>
             </td>
            </tr>
          @endforeach
         </tbody>
       </table>
       <div class="row">
      <div class="mx-auto">
        {{$employees->links()}}
      </div>
    </div>
       </div>
      </div>
    </div>
  </div>
@stop