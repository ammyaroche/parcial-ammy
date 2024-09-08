<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Actualizar Autor</h1>
        <form action="<?= base_url('actualizar_autor') ?>" method="post">
            <div class="mb-3">
                <label for="txt_autor" class="form-label">Autor_id</label>
                        <label for="txt_artista" class="form-label">Artista_id</label>
                        <input type="text" class="form-control"  name="txt_artista" value="<?=$autorbd['artista_id'];?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="txt_nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control"  name="txt_nombre"  value="<?=$autorbd['nombre'];?>" placeholder="Nuevo Nombre">
                    </div>
                    <div class="mb-3">
                        <label for="txt_apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control"  name="txt_apellido"  value="<?=$autorbd['apellido'];?>" placeholder="Nuevo Apellido">
                    </div>
                    <div class="mb-3">
                        <label for="txt_fechana" class="form-label">Fecha nacimiento</label>
                        <input type="text" class="form-control" name="txt_fechana"  value="<?=$autorbd['fecha_nacimiento'];?>" placeholder="Nuevo fecha">
                    </div>
                    <div class="mb-3">
                        <label for="txt_fechamu" class="form-label">Fecha muerte</label>
                        <input type="text" class="form-control"  name="txt_fechamu"  value="<?=$autorbd['fecha_muerte'];?>" placeholder="Nuevo fecha">
                    </div>
                    <div class="mb-3">
                        <label for="txt_pais" class="form-label">Pais</label>
                        <input type="text" class="form-control"  name="txt_pais"  value="<?=$autorbd['pais_id'];?>" placeholder="Nuevo pais">
                
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control" name="btn_actualizar_artista" value="Guardar Cambios">
            </div>

        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>