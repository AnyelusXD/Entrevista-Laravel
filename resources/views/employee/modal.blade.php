<button type="button" class="btn btn-info pull-rght" data-toggle="modal" data-target="#addEmployee" style="float: right;">Agregar Nuevo Empleado</button>

{!! Form::open(['url' => 'employee']) !!}
{{Form::token()}}
<div class="modal fade" id="addEmployee" tabindrol="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Nueva Empleado</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-user" class="col-form-label">Usuario</label>
            <input type="text" name="user" class="form-control" id="recipient-user" placeholder="Ingresar nombre de usuario" onkeyup="this.value=this.value.toUpperCase()">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre</label>
            <input type="text" name="name" class="form-control" id="recipient-name" placeholder="Ingresar nombre" onkeyup="this.value=this.value.toUpperCase()">
          </div>
          <div class="form-group">
            <label for="recipient-lastname" class="col-form-label">Apellido</label>
            <input type="text" name="lastname" class="form-control" id="recipient-lastname" placeholder="Ingresar Apellido" onkeyup="this.value=this.value.toUpperCase()">
          </div>
          <div class="form-group">
            <label for="recipient-typeId" class="col-form-label">Tipo de Documento</label>
            <input type="text" name="typeId" class="form-control" id="recipient-typeId" placeholder="Ingresar Apellido" onkeyup="this.value=this.value.toUpperCase()">
          </div>
          <div class="form-group">
            <label for="recipient-numId" class="col-form-label">Numero de Documento</label>
            <input type="number" name="numId" class="form-control" id="recipient-numId" placeholder="Ingresar Apellido" onkeyup="this.value=this.value.toUpperCase()">
          </div>
          <div class="form-group">
            <label for="recipient-birthdate" class="col-form-label">Fecha de Nacimiento</label>
            <input type="date" name="birthdate" class="form-control" id="recipient-birthdate" placeholder="Ingresar Apellido" onkeyup="this.value=this.value.toUpperCase()">
          </div>
          <div class="form-group">
            <label for="recipient-password" class="col-form-label">Contraseña</label>
            <input type="password" name="password" class="form-control" id="recipient-password" placeholder="Ingresar nombre">
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Crear</button>
      </div>
    </div>
  </div>
</div>
{!! Form::close() !!}