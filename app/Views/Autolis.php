<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Autores libros</title>
</head>

<body class="fondo">
    <h1>Autores libros </h1>
    <br>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar Autores
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Libro Nuevo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('agregar_libro') ?>" method="post">
                        <div class="mb-3">
                            <label for="txt_libro" class="form-label">Libro_id</label>
                            <input type="text" class="form-control" name="txt_libro" placeholder="Nuevo libro">
                        </div>
                        <div class="mb-3">
                            <label for="txt_autor" class="form-label">Autor_id</label>
                            <input type="text" class="form-control" name="txt_autor" placeholder="Nuevo Autor">
                        </div>

                        <input type="submit" class="btn btn-primary" name="btn_guardar_libro" value="Agregar Nuevo Libro">
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">save</button>
                </div>
            </div>
        </div>
    </div>

            <br><br>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>libro_id</th>
                <th>autor_id</th>
                <th>Accion</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($autolibd as $registros):
            ?>
                <tr>
                    <td><?php echo $registros['libro_id'] ?> </td>
                    <td><?php echo $registros['autor_id'] ?> </td>
                    <td>
                        <a href="<?= base_url('datos_libro/' .$registros['libro_id']) ?>">
                            Actualizar
                        </a>/
                        <a href="<?= base_url('eliminar_libro/' . $registros['libro_id']) ?>">
                            Eliminar
                        </a>
                    </td>

                </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>