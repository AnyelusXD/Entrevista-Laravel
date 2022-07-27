<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#EditEmployee-{{$employee->id}}" style="float:left">
<i class="far fa-edit"></i>
</button>

{!! Form::open(['action' => ['EmployeeController@update', $employee->id], 'method' => 'PATCH']) !!}
{{Form::token()}}
<div class="modal fade" id="EditEmployee-{{$employee->id}}" tabindrol="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h class="modal-title" id="exampleModalLabel">Editar Empleados</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('employee.update', $employee->id)}}" method="POST">
        @method('PATCH')
        @csrf
          
          <div class="form-group">
            <label for="recipient-user" class="col-form-label">Usuario</label>
            <input type="text" name="user" class="form-control" id="recipient-user" value="{{$employee->user}}">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre</label>
            <input type="text" name="name" class="form-control" id="recipient-name" value="{{$employee->name}}">
          </div>
          <div class="form-group">
            <label for="recipient-lastname" class="col-form-label">Apellido</label>
            <input type="text" name="lastname" class="form-control" id="recipient-lastname" value="{{$employee->lastname}}">
          </div>
          <div class="form-group">
            <label for="recipient-typeId" class="col-form-label">Tipo de Documento</label>
            <input type="text" name="typeId" class="form-control" id="recipient-typeId" value="{{$employee->typeId}}">
          </div>
          <div class="form-group">
            <label for="recipient-numId" class="col-form-label">Numero de Documento</label>
            <input type="number" name="numId" class="form-control" id="recipient-numId" value="{{$employee->numId}}">
          </div>
          <div class="form-group">
            <label for="recipient-birthdate" class="col-form-label">Fecha de Nacimiento</label>
            <input type="text" name="birthdate" class="form-control" id="recipient-birthdate" value="{{$employee->birthdate}}">
          </div>
          <div class="form-group">
            <label for="recipient-password" class="col-form-label">Contraseña</label>
            <input type="text" name="password" class="form-control" id="recipient-password" value="{{$employee->password}}">
          </div>


        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
  </div>
</div>
{!! Form::close() !!}