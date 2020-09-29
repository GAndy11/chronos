<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row row--logobox">
                <div class="col-md-12">
                    <img src="./assets/imagenes/logo.png" alt="">
                    <!-- <a target="_blank" href="https://icons8.com/icons/set/car">Car icon</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a> -->
                </div>
            </div>
            <div class="row row--titubox">
                <div class="col-md-12">
                    <h1 class="row__titubox--titulo">Chronos</h1>
                    <br>
                    <p class="row__titubox--subtitulo">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quis illo quidem aut vel inventore accusantium? Delectus tempore expedita, voluptas doloribus quidem labore dolorem neque molestias id. Aperiam, quas nesciunt?
                    </p>
                </div>
            </div>
            <div class="row row--landingbox">
                <div class="col-md-6">
                    <img class="row__landingbox--imglanding" src="./assets/imagenes/landing.jpg" alt="" srcset="">
                </div>
                <div class="col-md-6">
                    <div class="row__landingbox--loginbox">
                        <form action="?controller=tiempos&action=Listar" method="POST">
                            <div class="form-group">
                                <label for="usuario">Usuario*</label>
                                <input type="text" class="form-control inputs" id="usuario" name="usuario" placeholder="Ingrese el Usuario">
                            </div>
                            <div class="form-group">
                                <label for="contrasena">Contraseña*</label>
                                <input type="text" class="form-control inputs" id="contrasena" name="contrasena" placeholder="Ingrese el Contraseña">
                            </div>
                            <div class="landingbox__loginbox--btnbox">
                                <button class="btn" type="submit" class="boton-enviar">Iniciar Sesión</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>