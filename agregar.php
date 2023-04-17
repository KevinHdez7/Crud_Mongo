<?php include "./header.php" ?>

<div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-body">

                        <a href="index.php" class="btn btn-info">
                            <i class="fa-solid fa-angles-left"></i> Regresar
                        </a>
                        <h2>Agregar nuevo registro</h2>
                        <form action="./procesos/insertar.php" method="post">
                            <p>
                            <label for="paterno">Apellido paterno</label>
                            <input type="text" class="form-contol" id="paterno" name="paterno" required>
                            </p>
                            <p>
                            <label for="materno">Apellido materno</label>
                            <input type="text" class="form-contol" id="materno" name="materno">
                            </p>
                            <p>
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-contol" id="nombre" name="nombre" required>
                            </p>
                            <p>
                            <label for="fecha de nacimiento">Fecha de nacimiento</label>
                            <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control" required>
                            </p>
                            <button class="btn btn-primary mt-3" >
                                <i class="fa-solid fa-floppy-disk"></i> Agregar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "./scripts.php" ?>