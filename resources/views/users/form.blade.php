<div class="container">
    <label for="">Nombre del Usuario</label>
    <input type="text" name="name" id="name" value="{{ isset($usuario->name) ? $usuario->name : '' }}"
        class="form-control" required>
    <br>

    <label for="">Correo electronico</label>
    <input type="text" name="email" id="email" value="{{ isset($usuario->email) ? $usuario->email : '' }}"
        class="form-control" required>
    <br>

    <label for="">Contraseña</label>
    <input type="text" name="password" id="password" value="{{ isset($usuario->password) ? $usuario->password : '' }}"
        class="form-control" required>
    <br>

    <label for="">Roles</label>
    <select class="form-control" id="">
        @foreach ($roles as $rol)
            <option value="">{{ $rol }}</option>
        @endforeach
    </select>
    <br>

    <input type="submit" class="btn btn-outline-primary" value="Enviar">

    <a href="{{ url('users') }}" class="btn btn-outline-dark"> Regresar </a>
</div>
