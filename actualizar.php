
<?php 
    include "./clases/Conexion.php";
    include "./clases/Crud.php";

    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud->obtenerDocumentos($id);
    
?>


<?php include "./header.php" ?>

<div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-body">

                        <a href="index.php" class="btn btn-info">
                            <i class="fa-solid fa-angles-left"></i> Regresar
                        </a>
                        <h2>Actualizar registro</h2>

                        <form action="./procesos/actualizar.php" method="POST">
                            <input type="text" hidden value="<?php echo $idMongo ?>" name="id">
                            <p>
                            <label for="paterno">Apellido paterno</label>
                            <input type="text" class="form-contol" id="paterno" name="paterno" value="<?php echo $datos->paterno ?>">
                            </p>
                            <p>
                            <label for="materno">Apellido materno</label>
                            <input type="text" class="form-contol" id="materno" name="materno" value="<?php echo $datos->materno ?>">
                            </p>
                            <p>
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-contol" id="nombre" name="nombre" value="<?php echo $datos->nombre ?>">
                            </p>
                            <p>
                            <label for="fechaNacimiento">Fecha de nacimiento</label>
                            <input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control" value="<?php echo $datos->fecha_nacimiento ?>">
                            </p>
                            <button class="btn btn-warning mt-3" >
                                <i class="fa-solid fa-floppy-disk"></i> Actualizar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "./scripts.php" ?>