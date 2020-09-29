<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row row--titubox">
                <div class="col-md-12">
                    <h1 class="row__titubox--titulo">Administración de usuarios</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="mensaje-box">
        <?= $mensaje;?>
    </div>
    <div class="btn-box">
        <button class="btn" type="submit" class="boton-enviar">Crear nuevo</button>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre completo</th>
                        <th scope="col">Login</th>
                        <th scope="col">Password</th>
                        <th scope="col">Permiso</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td><a href="#">Editar</a> | <a href="#">Borrar</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@mdo</td>
                        <td><a href="#">Editar</a> | <a href="#">Borrar</a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>@mdo</td>
                        <td><a href="#">Editar</a> | <a href="#">Borrar</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>